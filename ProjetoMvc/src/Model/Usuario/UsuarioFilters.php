<?php
namespace Model\Usuario;

/**
 * Classe UsuarioFilters
 */
class UsuarioFilters {

    /** @var int $iIdUsuario */
    private $iIdUsuario;

    /** @var string $sUserName */
    private $sUserName;

    /** @var int $iTipoUsuario */
    private $iTipoUsuario;

    /** @var int $iDeletado */
    private $iDeletado;


    /*
    * Cria uma instância de filtros de usuário a partir de um array de dados
    *
    * @author Wallisson
    * 
    * @param array $aDados
    * @return UsuarioFilters
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public static function creatFromArray(array $aDados) : UsuarioFilters {
        $oUsuarioFilters = new UsuarioFilters();
        return $oUsuarioFilters;  
    }

    /*
    * Retorna o Id do usuário
    *
    * @author Wallisson
    * 
    * @return int
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function getIdUsuario(): int {
        return $this->iIdUsuario;
    }

    /*
    * Retorna o nome do usuário
    *
    * @author Wallisson
    * 
    * @return string
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function getNomeUsuario(): string {
        return $this->sUserName;
    }

    /*
    * Retorna o tipo de usuário
    *
    * @author Wallisson
    * 
    * @return int
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function getTipoUsuario() : int {
        return $this->iTipoUsuario;
    }   

    /*
    * Retorna o status do usuário
    *
    * @author Wallisson
    * 
    * @return int
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function getStatusUsuario() : int {
        return $this->iDeletado;
    }
    
}