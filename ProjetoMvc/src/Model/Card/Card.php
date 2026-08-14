<?php

namespace Model\Card;

use BooleanEnum;

/**
 * Classe Card
 */
class Card {

	/* @var int $iId */
	private $iIdCard;

	/* @var string $sTitulo */
	private $sTitulo;

	/* @var array $aPosts */
	private $aPosts;

	/* @var int $iDeletado */
	private $iDeletado;

	/**
	 * Construtor
	 *
	 * @param string $sTitulo
	 */
	public function __construct(string $sTitulo) {
		$this->sTitulo = $sTitulo;
		$this->aPosts = [];
		$this->iDeletado = BooleanEnum::NAO;
	}


	/**
	 * Retorna o ID do card
	 *
	 * @return int|null
	 */
	public function getId(): ?int {
		return $this->iIdCard;
	}

	/**
	 * Define o ID do card
	 *
	 * @param int $iIdCard
	 * @return void
	 */
	public function setId(int $iIdCard): void {
		$this->iIdCard = $iIdCard;
	}


	/**
	 * Retorna o título do card
	 *
	 * @return string
	 */
	public function getTitulo(): string {
		return $this->sTitulo;
	}

	/**
	 * Retorna se o card está marcado como deletado
	 *
	 * @return bool
	 */
	public function getDeletado(): bool {
		return $this->iDeletado;
	}

	/**
	 * Retorna os posts do card
	 *
	 * @return array
	 */
	public function getPosts(): array {
		return $this->aPosts;
	}

	/**
	 * Define os posts do card
	 *
	 * @param array $aPosts
	 * @return void
	 */
	public function setListaPosts(array $aPosts) : void {
		$this->aPosts = $aPosts;
	}

	public function cadastrar(): void{

	}

	public function atualizar(): void{

	}

	public function deletar(): void{

	}

}