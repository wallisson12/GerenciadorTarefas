<?php
namespace Model\Post;

/**
 * Classe PostFilters
 */
class PostFilters{

	/* @var int $iIdPost */
	private $iIdPost;

	/* @var int $iIdUsuario */
	private $iIdUsuario;

	/* @var int $iIdCard */
	private $iIdCard;

	/* @var string $sTitulo */
	private $sTitulo;


	/*
    * Cria uma instância de filtros do posts a partir de um array de dados
    *
    * @param array $aDados
	*
	* @author Wallisson
	*
    * @return PostFilters
    */
	public static function createFromArray(array $aDados) : PostFilters {
		$oPostFilters = new PostFilters();

		if(!empty($aDados['id'])){
			$oPostFilters->iIdPost = intval($aDados['id']);
		}
		if(!empty($aDados['id_usuario'])){
			$oPostFilters->iIdUsuario = intval($aDados['id_usuario']);
		}
		if(!empty($aDados['titulo'])){
			$oPostFilters->sTitulo = $aDados['titulo'];
		}
		if(!empty($aDados['id_card'])){
			$oPostFilters->iIdCard = intval($aDados['id_card']);
		}

		return $oPostFilters;
	}

	/**
	 * Retorna o Id do post
	 *
	 * @author Wallisson
	 *
	 * @return int|null
	 */
	public function getIIdPost(): ?int {
		return $this->iIdPost;
	}

	/**
	 * Retorna o Id do usuário
	 *
	 * @author Wallisson
	 *
	 * @return int|null
	 */
	public function getIIdUsuario(): ?int {
		return $this->iIdUsuario;
	}

	/**
	 * Retorna o Id do card
	 *
	 * @author Wallisson
	 *
	 * @return int|null
	 */
	public function getIIdCard(): ?int {
		return $this->iIdCard;
	}

	/**
	 * Retorna o título do post
	 *
	 * @author Wallisson
	 *
	 * @return string
	 */
	public function getSTitulo(): string {
		return $this->sTitulo ?? '';
	}

}