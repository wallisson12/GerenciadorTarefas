<?php

namespace src\config;

use src\controllers\HomeController;
use src\controllers\UsuarioController;
use src\controllers\LoginController;
use src\middlewares\AuthMiddleware;

//Inclui o arquivo
require_once 'src/controllers/HomeController.php';
require_once 'src/controllers/UsuarioController.php';
require_once 'src/controllers/LoginController.php';
require_once 'src/middlewares/AuthMiddleware.php';

$aDados = array_merge($_POST,$_GET);	
routeToController($aDados);


/**
 * Metodo responsavel por fazer o roteamento
 * 
 * @param array $aDados (Merge das super globais $_POST, $_GET)
 */
function routeToController(array $aDados){
	//Acessa a variavel url da requisicao
	$aUrl = filter_input(INPUT_GET,'url',FILTER_DEFAULT);

	//Remove as tags html e php da variavel
	$aUrl = !empty($aUrl) ? strip_tags($aUrl) : '';

	$aUrl = !empty($aUrl) ? $aUrl : 'login/index' ;

	$aUrl = array_filter(explode('/',$aUrl));

	//Separa em Controller e Metodo	
	$sController = "src\\controllers\\" . ucfirst($aUrl[0]) . "Controller";

	$sMetodo = $aUrl[1];

	carregaControllerMetodo($sController,$sMetodo,$aDados);
}

/**
 * Metodo responsavel por chamar a classe e seu metodo
 * 
 * @param string $sController
 * @param string $sMetodo
 * @param array $aDados
 */
function carregaControllerMetodo(?string $sController, ?string $sMetodo,$aDados){
	validarRota($sController,$sMetodo);
	if(class_exists($sController) && method_exists($sController,$sMetodo)){
		$oController = new $sController();
		$oController->$sMetodo($aDados);
		return;
	}
	$oController = new LoginController();
	$oController->index($aDados);
}

/**
 * Valida se a rota precisa passar por validacao de autenticacao
 * 
 * @param string $sMetodo
 * @param string $sController
 */
function validarRota(string $sController,string $sMetodo): void{
	$sRotaAtual = lcfirst(str_replace(
			["src\\controllers\\","Controller"],
			'',
			$sController
		) . "/" . $sMetodo
	);
	if(!verificarRotasPublicas($sRotaAtual)){
		AuthMiddleware::handle();
	}

}

/**
 * Realiza a verificacao se a rota é publica
 * 
 * @param string $sRotaAtual
 */
function verificarRotasPublicas(string $sRotaAtual) : bool{
	$aRotasPublicas = ['login/index','login/logar','usuario/indexCadastrar','usuario/cadastrar'];
	return in_array($sRotaAtual,$aRotasPublicas);
}

?>