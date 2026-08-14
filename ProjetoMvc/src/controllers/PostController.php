<?php

namespace src\controllers;

use PostService;

/**
 * Classe PostController
 */
class PostController{

    /** @var PostService $oPostService */
    private $oPostService;

    /**
     * Construtor
     */
    public function __construct(){
        $this->oPostService = new PostService();
    }

	public function indexCadastrar(array $aDados = []) : void {
		//Vai abrir a modal para cadastrar um novo post
	}

	public function indexEditar(array $aDados = []) : void {
		//Vai abrir a modal para editar um post existente
	}

	public function listarAjax(array $aDados = []) : void {
		//Vai listar os posts de um card específico
	}


	public function cadastrar(array $aDados = []) : void {
		//Cadastrar um novo post
	}

	public function atualizar(array $aDados = []) : void {
		//Atualizar um post existente
	}

	public function deletar(array $aDados = []) : void {
		//Deletar um post existente
	}

}