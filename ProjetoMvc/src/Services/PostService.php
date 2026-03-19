<?php
namespace Model\Post;

use DAO\DAOFactory;

/**
 * Classe PostService
 */
class PostService{

    /** @var PostDAO $oPostDAO */
    private $oPostDAO;

    public function __construct() {
        $this->oPostDAO = DAOFactory::getDAOFactory()->getPostDAO();
    }
}
