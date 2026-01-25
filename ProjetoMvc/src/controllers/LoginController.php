<?php

namespace src\controllers;

use AuthService;
use Exception;
use SessionHandler;
use SessionManager;
use View;


require_once 'src/DAO/DAOFactory.php';
require_once 'src/Model/Usuario/UsuarioDAO.php';
require_once 'src/Services/AuthService.php';

/**
 * Realiza o controle do login
 */
class LoginController{

    /** @var AuthService $oAuthService **/
    private $oAuthService;

    /**
     * Construtor
     */
    public function __construct(){
        $this->oAuthService = new AuthService();
    }

    /**
     * Carrega a view de login
     * 
     * @param array $aDados
     * @return void
     */
    public function index(array $aDados = []) : void {
        $oView = new View(__DIR__."/../public/view/login/login.php");
        $oView->render();
    }

    /**
     * Realiza o login do usuario
     * 
     * @param array $aDados
     */
    public function logar(array $aDados = []) : void {
        try{
            $this->oAuthService->autenticar($aDados['username'],$aDados['senha']);
            header('Location: /home/index');
        }catch(Exception $oException){
            $oException->getMessage();
            header("Location: /login/index");
            exit();
        }
    }

    /**
     * Realiza o logout do usuario e todos os dados salvos na sessao
     * 
     * @param array $aDados 
     * @return void
     */
    public function logout(array $aDados = []) : void{
        try{
            if(isset($aDados['logoutUsuario'])){
                SessionManager::destroySession();
                header("Location: /login/index");
            }
        }catch(Exception $oException){
            $oException->getMessage();
            header("Location: /login/index");
            exit();
        }
    }
    
}