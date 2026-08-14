<?php

namespace Model\Card;

interface CardDAOInterface {

	public function findById(int $id) : Card;

	public function findByFilters(CardFilters $oCardFilters) : array;

	public function finAllPostsByCardId(int $id) : array;

	public function cadastrar(Card $oCard) : void;

	public function atualizar(Card $oCard) : void;

	public function deletar(Card $oCard) : void;
}