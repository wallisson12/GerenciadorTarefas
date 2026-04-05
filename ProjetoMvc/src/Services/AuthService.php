<?php

use DAO\DAOFactory;

require_once 'src/DAO/DAOFactory.php';
require_once 'src/Services/UsuarioService.php';
require_once 'src/Utils/Managers/SessionManager.php';

/**
 * Responsavel por centralizar a regra de negocio da autenticacao
 */
class AuthService{

    private $oUsuarioService;

    public function __construct()
    {
        $this->oUsuarioService = new UsuarioService(
            DAOFactory::getDAOFactory()->getUsuarioDAO()
        );
    }

    /**
     * Realiza a autenticacao do usuario
     * 
     * @param string $sUsername
     * @param string $sSenha
     */
    public function autenticar(string $sUsername, string $sSenha){
        if(empty($sUsername) || empty($sSenha)){
            throw new InvalidArgumentException("Login ou senha inválido(s)");
        }

        $iNumeroUsuariosEncontrados = $this->oUsuarioService->verificarExistenciaUsuarioByUserName($sUsername);

        if($iNumeroUsuariosEncontrados == 0){
            throw new Exception("Usuário não existe");
        }

        $oUsuario = $this->oUsuarioService->buscarPorUsername($sUsername);

        if(!password_verify($sSenha,$oUsuario->getSenhaCriptografada())){
            throw new InvalidArgumentException("Usuario ou Senha Inválidos!");
        }

        SessionManager::definir("usuario",$oUsuario);
    }
}