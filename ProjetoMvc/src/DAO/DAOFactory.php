<?php
namespace DAO;

use Model\Card\CardDAO;
use Model\Usuario\UsuarioDAO;
use Model\Post\PostDAO;

require_once 'src/DAO/DAOFactoryInterface.php';

/**
 * Classe responsavel por instanciar os objetos
 */
class DAOFactory implements DAOFactoryInterface{

    /* @var DAOFactory $oInstance */
    private static $oInstance = null;

	/** @var UsuarioDAO $oUsuarioDAO */
    private $oUsuarioDAO;

	/** @var CardDAO $oCardDAO */
    private $oCardDAO;

	/** @var PostDAO $oPostDAO */
    private $oPostDAO;


    /**
     * Retorna a instacia da classe
     *
     * @author Wallisson
     *
     * @since 1.0.0 - Definição do versionamento da função
     *
	 * @return DAOFactory
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
     *
     * @author Wallisson
     *
     * @since 1.0.0 - Definição do versionamento da função
     *
     * @return UsuarioDAO
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
	 *
	 * @author Wallisson
	 *
	 * @since 1.0.0 - Definição do versionamento da função
	 *
	 * @return PostDAO
	 */
    public function getPostDAO() : PostDAO{
        if(empty($this->oPostDAO)){
            $this->oPostDAO = new PostDAO();
        }
        return $this->oPostDAO;
    }


	/**
	 * Retorna a instancia de card DAO
	 *
	 * @author Wallisson
	 *
	 * @since 1.0.0 - Definição do versionamento da função
	 *
	 * @return CardDAO
	 */
	public function getCardDAO() : CardDAO{
		if(empty($this->oCardDAO)){
			$this->oCardDAO = new CardDAO();
		}
		return $this->oCardDAO;
	}

}