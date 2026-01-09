<?php
namespace src\middlewares;

use Exception;
use RuntimeException;

/**
 * Responsavel por realizar a validacao de autenticacao do usuario 
 */
class AuthMiddleware{

    /**
     * Responsavel por validar se o usuario esta logado
     */
    public static function handle(){
        try{
            if(!isset($_SESSION['usuario'])){
                throw new RuntimeException("Usuario não autenticado");
            }

        }catch(Exception $oException){
            $oException->getMessage();
            header("Location: /login/index");
            exit();
        }
    
    }
}