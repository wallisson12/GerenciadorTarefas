<?php
namespace DAO;

use Model\Usuario\UsuarioDAO;
use Model\Post\PostDAO;

require_once 'src/DAO/DAOFactoryInterface.php';

/**
 * Classe responsavel por instanciar os objetos
 */
class DAOFactory implements DAOFactoryInterface{

    private static $oInstance = null;
    private $oUsuarioDAO;
    private $oPostDAO;

    /**
     * Retorna a instacia da classe
     */
    public static function getDAOFactory(): DAOFactory
    {
        if(empty(self::$oInstance)){
            self::$oInstance = new DAOFactory;
        }
        return self::$oInstance;
    }

    /**
     * Retorna a instancia de usuario DAO
     */
    public function getUsuarioDAO(): UsuarioDAO
    {
        if(empty($this->oUsuarioDAO)){
            $this->oUsuarioDAO = new UsuarioDAO;
        }
        return $this->oUsuarioDAO;
    }

    /**
     * Retorna a instancia de post DAO
     */
    public function getPostDAO() : PostDAO{
        if(empty($this->oPostDAO)){
            $this->oPostDAO = new PostDAO();
        }
        return $this->oPostDAO;
    }

}