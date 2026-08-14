<?php
namespace Model\Post;

use Model\Card\Card;
use Model\Usuario\Usuario;
use BooleanEnum;

/**
 * Classe Post
 */
class Post {

    /** @var int $iPostId */
    private $iPostId;

    /** @var string $sTitulo */
    private $sTitulo;

    /** @var string $sConteudo */
    private $sConteudo;

    /** @var Usuario $oUsuario */
    private $oUsuario;


    /** @var Card $oCard */
    private $oCard;

    /** @var int $iDeletado */
    private $iDeletado;

    /*
    * Construtor
    *
    * @author Wallisson
    * 
    * @param Usuario $oUsuario
    * @param string $sTitulo
    * @return void
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function __construct(Usuario $oUsuario,string $sTitulo,Card $oCard) {
        $this->oUsuario = $oUsuario;
        $this->sTitulo = $sTitulo;
		$this->oCard = $oCard;
        $this->iDeletado = BooleanEnum::NAO;
    }
    

    /*
    * Retorna o ID do post
    *
    * @author Wallisson
    * 
    * @return int|null
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function getId(): ?int {
        return $this->iPostId;
    }


    /*
    * Retorna o título do post
    *
    * @author Wallisson
    * 
    * @return string
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function getTitulo(): string {
        return $this->sTitulo ?? '';
    }

    /*
    * Retorna o conteúdo do post
    *
    * @author Wallisson
    * 
    * @return string
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function getConteudo(): string {
        return $this->sConteudo ?? '';
    }


    /*
    * Retorna o objeto Usuario autor do post
    *
    * @author Wallisson
    * 
    * @return Usuario
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function getUsuario(): Usuario {
        return $this->oUsuario;
    }

    /*
    * Retorna se o post está marcado como deletado
    *
    * @author Wallisson
    * 
    * @return int
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function getDeletado(): int {
        return $this->iDeletado;
    }

    /*
    * Define o ID do post
    *
    * @author Wallisson
    * 
    * @param int $iId
    * @return void
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function setId(int $iId): void {
        $this->iPostId = $iId;
    }

    /*
    * Define o título do post
    *
    * @author Wallisson
    * 
    * @param string $sTitulo
    * @return void
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function setTitulo(string $sTitulo) : void {
        $this->sTitulo = $sTitulo;
    }

    /*
    * Define o conteúdo do post
    *
    * @author Wallisson
    * 
    * @param string $sConteudo
    * @return void
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function setConteudo(string $sConteudo) : void {
        $this->sConteudo = $sConteudo;
    }

    /*
    * Define o objeto Usuario do post
    *
    * @author Wallisson
    * 
    * @param Usuario $oUsuario
    * @return void
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function setUsuario(Usuario $oUsuario) : void {
        $this->oUsuario = $oUsuario;
    }

	/**
	 * Retorna o objeto Card associado ao post
	 *
	 * @author Wallisson
	 *
	 * @since 1.0.0 - Definição do versionamento da função
	 *
	 * @return Card
	 */
	public function getCard(): Card {
		return $this->oCard;
	}

	/**
	 * Define o objeto Card associado ao post
	 *
	 * @author Wallisson
	 *
	 * @since 1.0.0 - Definição do versionamento da função
	 *
	 * @param Card $oCard
	 * @return void
	 */
	public function setCard(Card $oCard): void {
		$this->oCard = $oCard;
	}

	public function cadastrar(): void{

	}

	public function atualizar(): void{

	}

	public function deletar(): void{

	}

}