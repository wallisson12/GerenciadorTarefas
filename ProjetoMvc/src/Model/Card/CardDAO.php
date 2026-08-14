<?php

namespace Model\Card;

class CardDAO implements CardDAOInterface {

	public function findById(int $id): Card
	{
		// TODO: Implement findById() method.
	}

	public function findByFilters(CardFilters $oCardFilters): array
	{
		// TODO: Implement findByFilters() method.
	}

	public function finAllPostsByCardId(int $id): array
	{
		// TODO: Implement finAllPostsByCardId() method.
	}

	public function cadastrar(Card $oCard): void
	{
		// TODO: Implement cadastrar() method.
	}

	public function atualizar(Card $oCard): void
	{
		// TODO: Implement atualizar() method.
	}

	public function deletar(Card $oCard): void
	{
		// TODO: Implement deletar() method.
	}
}