<?php
namespace Model\Usuario;

use Model\Usuario\Usuario;
use Model\Usuario\UsuarioFilters;

/**
 * Interface UsuarioInterfaceDAO
 */
interface UsuarioInterfaceDAO{

    /*
    * Busca um usuario por id
    *
    * @author Wallisson
    * 
    * @param int $iId
    * @return Usuario
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function findById(int $iId): Usuario;


    /*
    * Busca os usuarios baseado nos filtros passados
    *
    * @author Wallisson
    * 
    * @param UsuarioFilters $oUsuarioFilters
    * @return array
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public function findByFilters(UsuarioFilters $oUsuarioFilters): array;


    /*
    * Realiza o cadastro de um usuario
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
    public function cadastrar(Usuario $oUsuario): void;


    /*
    * Atualiza os dados de um Usuario
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
    public function atualizar(Usuario $oUsuario): void;

    /*
    * Realiza a deleção lógica de um usuario
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
    public function deletar(Usuario $oUsuario): void;
}