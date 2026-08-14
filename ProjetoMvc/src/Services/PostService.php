<?php

use DAO\DAOFactory;
use Model\Post\PostDAO;

/**
 * Classe PostService
 */
class PostService{

    /** @var PostDAO $oPostDAO */
    private $oPostDAO;

    /**
     * Construtor
     */
    public function __construct() {
        $this->oPostDAO = DAOFactory::getDAOFactory()->getPostDAO();
    }
}
