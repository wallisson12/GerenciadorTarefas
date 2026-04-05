<?php
namespace Model\Post;

use DAO\DAOFactory;
use Model\Post\Post;
use Model\Usuario\Usuario;
use src\config\DataBase;

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
    public static function create(array $aDados): Post {
        $oUsuario = DAOFactory::getDAOFactory()->getUsuarioDAO()->findById($aDados['usuario_id']);
        $oPost = new Post(
            $oUsuario, 
            $aDados['titulo']
        );

        if(!empty($aDados['conteudo'])){
            $oPost->setConteudo($aDados['conteudo']);
        }

        return $oPost;
    }
}