<?php 

/**
 * Gerenciador de sessao
 */
class SessionManager{

    /**
     * Inicia a sessao
     */
    public static function iniciarSessao() : void {
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
    }


    /**
     * Define um dado na sessao
     * 
     * @param string $sKey
     * @param string $sValor
     */
    public static function definir(string $sKey, string $sValor): void{
        self::iniciarSessao();
        $_SESSION[$sKey] = $sValor ?? null;
    }


    /**
     * Obtem um dado da sessao
     * 
     * @param string $sKey
     */
    public static function obter(string $sKey) : ?string {
        self::iniciarSessao();
        return $_SESSION[$sKey] ?? null;
    }

    /**
     * Remove um dado da sessao
     * 
     * @param $sKey
     */
    public static function remover(string $sKey) : void{
        self::iniciarSessao();
        if(isset($_SESSION[$sKey])){
            unset($_SESSION[$sKey]);
        }
    } 


    /**
     * Destroi uma sessao
     */
    public static function destroySession() : void {
        self::iniciarSessao();
        session_destroy();
    }

}