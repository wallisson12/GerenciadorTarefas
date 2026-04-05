<?php
namespace Model\Post;

use Model\Post\PostFilters;
use Model\Post\Post;

/**
 * Interface PostDAOInterface
 */
interface PostDAOInterface {

/*
    * Busca um post pelo id
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
    public function findById(int $iPostId): Post;


    /*
    * Busca os posts de acordo com os filtros passados
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
    public function findByFilters(PostFilters $oPostFilters): array;


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

    /*
    * Atualiza um post
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
    public function atualizar(Post $oPost): void;

    /*
    * Deleta logicamente um post
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
    public function deletar(Post $oPost): void;
}