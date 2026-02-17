<?php

namespace Model\Usuario;

use Model\Usuario\Usuario;

class UsuarioFactory{

    /**
     * Responsavel por criar a entidade Usuario
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