<?php
namespace Model\Post;

use Model\Post\Post;

/**
 * Interface PostDAOInterface
 */
interface PostDAOInterface {
    /*
    * Cadastra um post
    *
    * @author Wallisson
    * 
    * @param Post $oPost
    * @return void
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function cadastrar(Post $oPost): void;
}