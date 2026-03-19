<?php
namespace Model\Post;

use Model\Post\Post;
use Model\Usuario\Usuario;

/**
 * Classe PostFactory
 */
class PostFactory {
    /*
    * Cria uma nova instância de Post
    *
    * @author Wallisson
    * 
    * @param Usuario $oUsuario
    * @param string $sTitulo
    * @return Post
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public static function create(Usuario $oUsuario, string $sTitulo): Post {
        return new Post($oUsuario, $sTitulo);
    }
}