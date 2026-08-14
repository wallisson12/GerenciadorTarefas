<?php
namespace Model\Usuario;

use BooleanEnum;
use DAO\DAOFactory;
use Exception;
use Model\Usuario\Usuario;
use PDOException;
use src\config\DataBase;
use Model\Usuario\UsuarioInterfaceDAO;
use Model\Usuario\UsuarioFactory;

require_once 'src/Model/Usuario/UsuarioInterfaceDAO.php';
require_once 'src/Utils/Enums/BooleanEnum.php';
require_once 'src/Model/Usuario/UsuarioFactory.php';
require_once 'src/Model/Usuario/UsuarioFilters.php';

/**
 * Classe UsuarioDAO
 */
class UsuarioDAO implements UsuarioInterfaceDAO{
    
    /*
    * Busca um usuario por seu id
    *
    * @author Wallisson
    * 
    * @param int $iId
    * @return Usuario
    *
    * @throws PDOException|Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function findById(int $iId): Usuario {
        $sSql = "SELECT * FROM users usr WHERE usr.id = ?";
        $aParam = [$iId];

        try{
            $aaUsuario = DataBase::getInstance()->query($sSql,$aParam);
        }catch(PDOException $oException){
            throw new PDOException("Ocorreu um erro ao buscar um usuario com id: {$iId}");
        }

        if(empty($aaUsuario)){
            throw new Exception("Não existe nemhum usuario com esse id : {$iId}");
        }

        return UsuarioFactory::create($aaUsuario[0]);
    }


    /*
    * Responsavel por retornar os usuarios baseado nos filtros passados
    *
    * @author Wallisson
    * 
    * @param UsuarioFilters $oUsuarioFilters
    * @return array
    *
    * @throws PDOException
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function findByFilters(UsuarioFilters $oUsuarioFilters): array {
        $sSql = "SELECT * FROM users usr 
                 Where usr.status = ?";

        $aParam = [BooleanEnum::NAO];

        if(!empty($oUsuarioFilters->getNomeUsuario())){
            $sSql .= " AND usr.username LIKE ?";
            $aParam[] = "%" . $oUsuarioFilters->getNomeUsuario() . "%";
        }

        $sSql .= " ORDER BY usr.username DESC";

        try{
            $aaUsuarios = DataBase::getInstance()->query($sSql,$aParam);
        }catch(PDOException $oException){
            throw new PDOException("Erro ao buscar os usuarios: {$oException->getMessage()}");
        }

        $aUsuariosObj = [];
        foreach($aaUsuarios as $aUsuario){
            $oUsuario = UsuarioFactory::create($aUsuario);
            $aUsuariosObj[] = $oUsuario;
        }

        return $aUsuariosObj;
    }

    /*
    * Responsavel por realizr o cadastro de um usuario no banco
    *
    * @author Wallisson
    * 
    * @param Usuario $oUsuario
    * @return void
    *
    * @throws PDOException
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function cadastrar(Usuario $oUsuario): void {
        $sSql = "INSERT INTO users (username,senha,tipo_usuario,status) VALUES (?,?,?,?)";

        $aParam = [
            $oUsuario->getNomeUsuario(),
            $oUsuario->getSenhaCriptografada(),
            $oUsuario->getTipoUsuario(),
            $oUsuario->getStatusUsuario()
        ];

        try{
            DataBase::getInstance()->execute($sSql,$aParam);
        }catch(PDOException $oException){
            throw new PDOException("Erro ao cadastrar um usuario: {$oException->getMessage()}");
        }
    }

    /*
    * Responsavel por atualizar um usuario no banco de dados
    *
    * @author Wallisson
    * 
    * @param Usuario $oUsuario
    * @return void
    *
    * @throws PDOException
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function atualizar(Usuario $oUsuario): void {
        $sSql = "UPDATE users usr
                 SET usr.username = ?, usr.tipo_usuario = ?
                 WHERE usr.id = ?";

        $aParam = [
            $oUsuario->getNomeUsuario(),
            $oUsuario->getTipoUsuario(),
            $oUsuario->getId()
        ];

        try{
            DataBase::getInstance()->execute($sSql,$aParam);
        }catch(PDOException $oException) {
            throw new PDOException("Erro ao atualizar o usuario: {$oException->getMessage()}");
        }
    }


    /*
    * Responsavel por deletar logicamente um usuario do banco
    *
    * @author Wallisson
    * 
    * @param Usuario $oUsuario
    * @return void 
    *
    * @throws PDOException
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function deletar(Usuario $oUsuario): void {
        $sSql = "UPDATE users usr SET usr.status = ? WHERE usr.id = ?";

        $aParam = [
            $oUsuario->getStatusUsuario(),
            $oUsuario->getId()
        ];
        
        try{
            DataBase::getInstance()->execute($sSql,$aParam);
        }catch(PDOException $e){
            throw new PDOException("Erro ao deletar um usuario: " . $e->getMessage());
        }
    }
}