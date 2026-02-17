<?php
namespace src\config;

use src\controllers\HomeController;
use src\controllers\UsuarioController;
use src\controllers\LoginController;
use src\controllers\NotFoundController;
use src\middlewares\AuthMiddleware;
use src\middlewares\GuestMiddleware;

require_once 'src/controllers/HomeController.php';
require_once 'src/controllers/UsuarioController.php';
require_once 'src/controllers/LoginController.php';
require_once 'src/controllers/NotFoundController.php';
require_once 'src/middlewares/AuthMiddleware.php';
require_once 'src/middlewares/GuestMiddleware.php';

class Router{

    private const ROTAS_PUBLICAS = ['login/index','login/logar','usuario/indexCadastrar','usuario/cadastrar'];
    private const ROTA_LOGIN = ['login/index'];

    /**
     * Realiza o roteamento
     */
    public static function rotear(array $aDados): void {
        [$sController,$sMetodo] = self::getControllerEMetodo($aDados);
        self::validarRota($sController,$sMetodo);
        
        if(!self::isControllerMetodoValidos($sController,$sMetodo)){
            self::notFound($aDados);
            return;
        }

        $oController = new $sController();
		$oController->$sMetodo($aDados);
    }

    /**
     * Realiza a extracao da controller e metodo da url
     */
    private static function getControllerEMetodo(array $aDados): array {
        $aUrl = filter_input(INPUT_GET,'url',FILTER_DEFAULT) ?? 'login/index';
        $aUrl = strip_tags($aUrl);

        $aPartes = array_values(array_filter(explode('/',$aUrl)));

        $sController = $aPartes[0] ?? 'login';
        $sMetodo = $aPartes[1] ?? 'index';

        
        $sController = "src\\controllers\\" . ucfirst($sController) . "Controller";

        return [$sController,$sMetodo];
    } 

    /**
     * Valida se a rota precisa passar por validacao de autenticacao de middleware
     * 
     * @param string $sMetodo
     * @param string $sController
     */
    private static function validarRota(string $sController,string $sMetodo): void {
        $sRotaAtual = lcfirst(
            str_replace(
                ["src\\controllers\\","Controller"],
                '',
                $sController
            ) . "/" . $sMetodo
        );

        if(!in_array($sRotaAtual,self::ROTAS_PUBLICAS)){
            AuthMiddleware::handle();
        }

        if(in_array($sRotaAtual,self::ROTA_LOGIN)){
            GuestMiddleware::handle();
        }
    }

    /**
     * Responsavel por validar a controller e o metodo
     */
    private static function isControllerMetodoValidos(string $sController, string $sMetodo) : bool {
         if (!class_exists($sController)) {
            return false;
        }

        if (!method_exists($sController, $sMetodo)) {
            return false;
        }

        return true;
    }

    /**
     * Responsavel por exibir a view de error 404
     */
    private static function notFound (array $aDados) : void{
        http_response_code(404);
        $oController = new NotFoundController();
        $oController->index($aDados);
    }
}