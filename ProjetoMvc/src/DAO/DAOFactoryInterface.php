<?php
namespace DAO;

use Model\Usuario\UsuarioDAO;
use Model\Post\PostDAO;

interface DAOFactoryInterface{

    /**
     * Retorna a instancia de UsuarioDAO
     */
    public function getUsuarioDAO():UsuarioDAO;

    /**
     * Retorna a instancia de PostDAO
     */
    public function getPostDAO() : PostDAO;
}