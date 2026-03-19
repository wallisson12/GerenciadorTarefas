<?php 

use DAO\DAOFactory;
use Model\Usuario\Usuario;
use Model\Usuario\UsuarioDAO;
use Model\Usuario\UsuarioFilters;
use Model\Usuario\UsuarioFactory;

require_once 'src/DAO/DAOFactory.php';

/**
 * Classe responsavel por centralizar as regras e 
 * realizar os testes e validacoes da entidade usuario
 */
class UsuarioService{

    /** @var UsuarioDAO $oUsuarioDAO*/
    private $oUsuarioDAO;

    /**
     * Construtor
     */
    public function __construct() {
        $this->oUsuarioDAO = DAOFactory::getDAOFactory()->getUsuarioDAO();     
    }

    /**
     * Responsavel por realizar o cadastro do usuario passando por validacao e regra de negocio
     * 
     * @param array $aDados
     * @return void
     */
    public function cadastrarNovoUsuario(array $aDados = []) : void {
        $this->validarDadosCadastro($aDados);
        $oUsuario = $this->buscarPorUsername($aDados['username']);
        if(!is_null($oUsuario)){
            throw new InvalidArgumentException("Já existe um usuario com esse nome!");
        }
        $aDados['senha'] = password_hash($aDados['senha'],PASSWORD_DEFAULT);
        $oUsuario = UsuarioFactory::create($aDados);
        $oUsuario->cadastrar();
    }

    /**
     * Responsavel por realizar a edicao do usuario passando por validacao e regra de negocio 
     * 
     * @param array $aDados
     * @return void
     */
    public function getUsuario(array $aDados = []) : Usuario {
        $this->validarUsuario($aDados);
        $oUsuario = $this->oUsuarioDAO->findById($aDados['id']);
        return $oUsuario;
    }

    /**
     * Responsavel por realizar a atualizacao de um usuario passando por validacao e regra de negocio 
     * 
     * @param array $aDados
     * @return void
     */
    public function atualizarUsuario(array $aDados = []) : void {
        $this->validarUsuario($aDados);
        $this->validarDadosEditar($aDados);
        $oUsuario = UsuarioFactory::create($aDados);
        $oUsuario->atualizar();
    }

    /**
     * Responsavel por buscar um usuario por seu username
     * 
     * @param string $sUserName
     */
    public function buscarPorUsername(string $sUserName) : ?Usuario{
        if(empty($sUserName)){
            throw new InvalidArgumentException("Nome do usuario inválido");
        }

        $oUsuario = $this->oUsuarioDAO->findByUsername($sUserName);
        return $oUsuario;
    }

    /**
     * Responsavel por realizar a listagem dos usuarios
     * 
     * @param UsuarioFilters $oUsuarioFilters
     * @return array
     */
    public function listarUsuarios(UsuarioFilters $oUsuarioFilter) : array {
        $aoUsuarios = $this->oUsuarioDAO->findByFilters($oUsuarioFilter);
        return $aoUsuarios;
    }

    /**
     * Responsavel por realizar a delecao logica de um usuario passando por validacao e regra de negocio 
     * 
     * @param array $aDados
     * @return void
     * 
     */
    public function deletarUsuario(array $aDados = []) : void {
        $this->validarUsuario($aDados);
        $oUsuario = $this->oUsuarioDAO->findById($aDados['id']);
        $oUsuario->deletar();
    } 


     /**
     * Responsavel por realizar a validacao dos campos de cadastro
     * 
     * @param array $aDados
     * @return void
     */
    private function validarDadosCadastro(array $aDados = []) : void {
        if(!isset($aDados['cadastrarUsuario'])){
            header('Location: /home/index');
            exit();
        }

        $aCamposObrigatorios = [
            'username' => 'Nome obrigatório',
            'tipo_usuario' => 'Tipo de usuario obrigatório',
            'senha' => 'Senha obrigatória'
        ];

        foreach($aCamposObrigatorios as $sCampo => $sMensagem){
            if(empty($aDados[$sCampo])){
                throw new InvalidArgumentException($sMensagem);                
            }
        }

    }

    /**
     * Responsavel por realizar a validacao dos campos de editar
     * 
     * @var array $aDados
     */
    private function validarDadosEditar(array $aDados){
        $aCamposObrigatorios = [
            'username' => 'Nome obrigatório',
            'tipo_usuario' => 'Tipo de usuario obrigatório',
        ];

        foreach($aCamposObrigatorios as $sCampo => $sMensagem){
            if(empty($aDados[$sCampo])){
                throw new InvalidArgumentException($sMensagem);                
            }
        }
    }


    /**
     * Responsavel por realizar validacao da edicao/delecao de um usuario
     * 
     * @param array $aDados
     * @return void
     */
    private function validarUsuario(array $aDados = []) : void {
        if(empty($aDados['id'])){
            throw new InvalidArgumentException("O identificador do usuario não foi encontrado");
        }
    }

}