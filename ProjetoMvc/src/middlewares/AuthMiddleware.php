<?php
namespace src\middlewares;

use Exception;
use RuntimeException;
use SessionManager;

/**
 * Responsavel por realizar a validacao de autenticacao do usuario 
 */
class AuthMiddleware{

    /**
     * Responsavel por validar se o usuario esta logado
     */
    public static function handle(){
        if(is_null(SessionManager::obter("usuario"))){
            header("Location: /login/index");
            exit();
        }
    }
}