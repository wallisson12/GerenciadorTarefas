<?php

namespace controllers;

use Exception;
use Mensagens;
use Model\Card\CardService;

/**
 * Classe CardController
 */
class CardController {

	/** @var CardService $oCardService */
	public $oCardService;

	/**
	 *
	 */
	public function __construct() {
		$this->oCardService = new CardService();
	}

	public function indexCadastrar(array $aDados = []) : void {
		//Vai abrir a modal para cadastrar um novo card
	}

	public function indexEditar(array $aDados = []) : void {
		//Vai abrir a modal para editar um card existente
	}

	public function listarAjax(array $aDados = []) : void {
		//Vai listar os cards existentes
	}

	public function cadastrar(array $aDados = []) : void {
		//Cadastrar um novo card
		try{

		}catch (Exception $oExcecao){
			//Tratar exceção
		}
	}

	public function atualizar(array $aDados = []) : void {
		//Atualizar um card existente
		try {

		}catch (Exception $oExcecao){
			//Tratar exceção
		}
	}

	public function deletar(array $aDados = []) : void {
		//Deletar um card existente e todos os posts relacionados a ele
		try {

		}catch (Exception $oExcecao){
			//Tratar exceção
		}
	}
}