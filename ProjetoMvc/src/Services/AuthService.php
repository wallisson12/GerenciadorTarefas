<?php

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

        $oUsuario = $this->oUsuarioService->buscarPorUsername($sUsername);

        if(!password_verify($sSenha,$oUsuario->getSenhaCriptografada())){
            throw new InvalidArgumentException("Usuario ou Senha Inválidos!");
        }

        //Depois criar um gerenciador para sessao
        $_SESSION['usuario'] = $sUsername;
    }
}