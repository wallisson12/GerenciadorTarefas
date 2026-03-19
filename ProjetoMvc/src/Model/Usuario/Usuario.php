<?php
namespace Model\Usuario;

use BooleanEnum;
use DAO\DAOFactory;
use Model\Usuario\UsuarioDAO;

require_once 'src/DAO/DAOFactory.php';
require_once 'src/Model/Usuario/UsuarioDAO.php';
require_once 'src/Utils/Enums/BooleanEnum.php';

/**
 * Classe Usuario
 */
class Usuario{

    /** @var int $iIdUsuario */
    public $iIdUsuario;

    /** @var string $sUserName */
    public $sUserName;

    /** @var string $sSenha */
    private $sSenha;

    /** @var int $iTipoUsuario */
    public $iTipoUsuario;

    /** @var int $iDeletado */
    private $iDeletado;


    /*
    * Construtor
    *
    * @author Wallisson
    * 
    * @param string $sUserName
    * @param int $iTipoUsuario
    * @return void
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function __construct(string $sUserName,int $iTipoUsuario) {
        $this->sUserName = $sUserName;
        $this->iTipoUsuario = $iTipoUsuario;
        $this->iDeletado = BooleanEnum::NAO;
    }

    /*
    * Retorna o Id
    *
    * @author Wallisson
    * 
    * @return int|null
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function getId(): ?int {
        return $this->iIdUsuario;
    }
    
    /*
    * Retorna o nome
    *
    * @author Wallisson
    * 
    * @return string
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function getNomeUsuario(): string {
        return $this->sUserName ?? '';
    }
    
    /*
    * Retorna o tipo de usuário
    *
    * @author Wallisson
    * 
    * @return int|null
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function getTipoUsuario(): ?int {
        return $this->iTipoUsuario;
    }

    /*
    * Retorna a senha criptografada
    *
    * @author Wallisson
    * 
    * @return string
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function getSenhaCriptografada(): string {
        return $this->sSenha;
    }

    /*
    * Retorna o status de deleção do usuário
    *
    * @author Wallisson
    * 
    * @return int|null
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function getStatusUsuario(): ?int {
        return $this->iDeletado;
    }

    /*
    * Define o Id
    *
    * @author Wallisson
    * 
    * @param int|null $iId
    * @return void
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function setId(?int $iId): void {
        $this->iIdUsuario = $iId;
    }

    /*
    * Define o nome
    *
    * @author Wallisson
    * 
    * @param string $sNome
    * @return void
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function setNomeUsuario(string $sNome) : void {
        $this->sUserName = $sNome;
    }

    /*
    * Define o tipo de usuário
    *
    * @author Wallisson
    * 
    * @param int $iTipoUsuario
    * @return void
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function setTipoUsuario(int $iTipoUsuario) : void {
        $this->iTipoUsuario = $iTipoUsuario;
    }

    /*
    * Define a senha
    *
    * @author Wallisson
    * 
    * @param string $sSenha
    * @return void
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function setSenha(string $sSenha) : void{
        $this->sSenha = $sSenha;
    }

    /*
    * Define o status de deleção do usuário
    *
    * @author Wallisson
    * 
    * @param int $iDeletado
    * @return void
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function setStatusUsuario(int $iDeletado) : void {
        $this->iDeletado = $iDeletado;
    }

    /*
    * Responsável por cadastrar o usuário
    *
    * @author Wallisson
    * 
    * @return void
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function cadastrar(): void {
        DAOFactory::getDAOFactory()->getUsuarioDAO()->cadastrar($this);
    }

    /*
    * Responsável por atualizar um usuário
    *
    * @author Wallisson
    * 
    * @return void
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function atualizar() : void {
        DAOFactory::getDAOFactory()->getUsuarioDAO()->atualizar($this);
    }

    /*
    * Responsável por deletar logicamente o usuário
    *
    * @author Wallisson
    * 
    * @return void
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function deletar(): void {
        $this->iDeletado = BooleanEnum::SIM;
        DAOFactory::getDAOFactory()->getUsuarioDAO()->deletar($this);
    }
}