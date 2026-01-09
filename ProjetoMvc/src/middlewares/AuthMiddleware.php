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
        try{
            if(is_null(SessionManager::obter("usuario"))){
                throw new RuntimeException("Usuario não autenticado");
            }

        }catch(Exception $oException){
            $oException->getMessage();
            header("Location: /login/index");
            exit();
        }
    
    }
}