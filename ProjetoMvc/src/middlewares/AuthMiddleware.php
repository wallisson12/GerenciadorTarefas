<?php
namespace src\middlewares;

use Exception;
use RuntimeException;
use SessionManager;

/**
 * Responsavel por realizar a validacao em rotas privadas 
 */
class AuthMiddleware{

    /**
     * Responsavel por proteger a rota privada do usuario
     */
    public static function handle(){
        if(is_null(SessionManager::obter("usuario"))){
            header("Location: /login/index");
            exit();
        }
    }
}