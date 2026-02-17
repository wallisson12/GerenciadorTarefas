<?php
namespace src\middlewares;

use SessionManager;
/**
 * Responsavel por realizar a validacao em rotas publicas de usuarios ja logados
 */
class GuestMiddleware {

    /**
     * Responsavel por realizar a validacao da rota publica que o usuario logado nao pode acessar mais
     */
    public static function handle(){
        if(!is_null(SessionManager::obter("usuario"))){
            header('Location: home/index');
        }   
    }

}