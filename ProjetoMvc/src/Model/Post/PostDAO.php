<?php
namespace Model\Post;

use PDOException;
use src\config\DataBase;
use Exception;

/**
 * Classe PostDAO
 */
class PostDAO implements PostDAOInterface {


	/**
	 * Responsavel por buscar um post pelo id
	 *
	 * @param int $iPostId
	 * @return Post
	 * @throws Exception
	 */
	public function findById(int $iPostId): Post {
		$sSql = "SELECT * FROM posts pts WHERE pts.id = ?";
		$aParam = [$iPostId];

		try{
			$aPost = DataBase::getInstance()->query($sSql,$aParam);
		}catch(PDOException $oException){
			throw new PDOException("Ocorreu um erro ao buscar o post com id: {$iPostId}");
		}

		if(empty($aPost)){
			throw new Exception("Não existe nemhum post com esse id : {$iPostId}");
		}

		return PostFactory::create($aPost[0]);
	}

	public function findByFilters(PostFilters $oPostFilters): array{
		return [];
	}

	/**
	 * Responsavel por cadastrar um post
	 *
	 * @param Post $oPost
	 * @throws Exception
	 */
	public function cadastrar(Post $oPost): void {
		
	}

	/**
	 * Responsavel por atualizar um post
	 *
	 * @param Post $oPost
	 * @throws Exception
	 */
	public function atualizar(Post $oPost): void {
		
	}

	/**
	 * Responsavel por deletar logicamente um post
	 *
	 * @param Post $oPost
	 * @throws Exception
	 */
	public function deletar(Post $oPost): void {
		
	}

}