<?php

namespace Model\Usuario;

use Model\Usuario\Usuario;

/**
 * Classe UsuarioFactory
 */
class UsuarioFactory{

    /*
    * Responsavel por criar a entidade Usuario
    *
    * @author Wallisson
    * 
    * @param array $aDados
    * @return Usuario
    *
    * @throws Exception
    * 
    * @since 1.0.0 - Definição do versionamento da função
    */
    public static function create(array $aDados) : Usuario{
        $oUsuario = new Usuario(
                $aDados['username'],
                intval($aDados['tipo_usuario'])
            );

        if(!empty($aDados['id'])){
            $oUsuario->setId($aDados['id']);
        }
        
        if(!empty($aDados['senha'])){
            $oUsuario->setSenha($aDados['senha']);            
        }

        return $oUsuario;
    }
}