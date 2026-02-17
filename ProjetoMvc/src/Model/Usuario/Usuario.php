<?php
namespace Model\Usuario;

use BooleanEnum;
use DAOFactory;
use Model\Usuario\UsuarioDAO;

require_once 'src/DAO/DAOFactory.php';
require_once 'src/Model/Usuario/UsuarioDAO.php';

/**
 * Classe da entidade usuario
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


    /**
     * Construtor
     */
    public function __construct(string $sUserName,int $iTipoUsuario) {
        $this->sUserName = $sUserName;
        $this->iTipoUsuario = $iTipoUsuario;
        $this->iDeletado = BooleanEnum::NAO;
    }

    /**
     * Retorna o id do usuario
     * 
     * @return int
     */
    public function getId(): ?int {
        return $this->iIdUsuario;
    }
    
    /**
     * Retorna o nome do usuario
     * 
     * @return string
     */
    public function getNomeUsuario(): string {
        return $this->sUserName ?? '';
    }
    
    /**
     * Retorna o tipo de usuario
     * 
     * @return int
     */
    public function getTipoUsuario(): ?int {
        return $this->iTipoUsuario;
    }

    /**
     * Retorna a senha criptografada
     * 
     * @return string
     */
    public function getSenhaCriptografada(): string {
        return $this->sSenha;
    }

    /**
     * Retorna o status do usuario
     * 
     * @return int
     */
    public function getStatusUsuario(): ?int {
        return $this->iDeletado;
    }

    /**
     * Define o id do usuario
     * 
     * @param int|null $iId
     */
    public function setId(?int $iId): void {
        $this->iIdUsuario = $iId;
    }

    /**
     * Define o nome do usuario
     * 
     * @param string $sNome
     */
    public function setNomeUsuario(string $sNome) : void {
        $this->sUserName = $sNome;
    }

    /**
     * Define o tipo de usuario
     * 
     * @param int $iTipoUsuario
     */
    public function setTipoUsuario(int $iTipoUsuario) : void {
        $this->iTipoUsuario = $iTipoUsuario;
    }

    /**
     * Define a senha do usuario
     * 
     * @param string $sSenha
     */
    public function setSenha(string $sSenha) : void{
        $this->sSenha = $sSenha;
    }

    /**
     * Define o status do usuario, (deletado ou nao)
     * 
     * @param int $iDeletado
     */
    public function setStatusUsuario(int $iDeletado) : void {
        $this->iDeletado = $iDeletado;
    }

    /**
     * Responsavel por cadastrar um usuario
     * 
     * @return void
     */
    public function cadastrar(): void {
        DAOFactory::getDAOFactory()->getUsuarioDAO()->cadastrar($this);
    }

    /**
     * Responsavel por atualizar um usuario
     * 
     * @return void
     */
    public function atualizar() : void {
        DAOFactory::getDAOFactory()->getUsuarioDAO()->atualizar($this);
    }

    /**
     * Responsavel por deletar logicamente um usuario
     * 
     * @return void
     */
    public function deletar(): void {
        $this->iDeletado = BooleanEnum::SIM;
        DAOFactory::getDAOFactory()->getUsuarioDAO()->deletar($this);
    }
}