<?php

/**
 * Responsavel por centralizar mensagens do sistema 
 */
class Mensagens{

    /** @const MENSAGEM_KEY */
    private const MENSAGEM_KEY = "mensagem";
    
    /**
     * Define mensagem na sessao
     * 
     * @param string $sTipo
     * @param string $sMensagem
     * 
     * @return void
     */
    private static function definirMensangem(string $sTipo,string $sMensagem) : void{
        SessionManager::definir(self::MENSAGEM_KEY,['tipo' => $sTipo,'mensagem' => $sMensagem]);
    } 

    /**
     * Exibe a mensagem salva na sessao e remove
     * 
     * @return void
     */
    public static function exibirMensagem() : ?array {
        $aMensagem = SessionManager::obter(self::MENSAGEM_KEY);
        SessionManager::remover(self::MENSAGEM_KEY);
        return $aMensagem;
    }

    /**
     * Define mensagem sucesso
     * 
     * @param string $sMensagem
     * @return void
     */
    public static function success(string $sMensagem): void {
        self::definirMensangem("success",$sMensagem);
    }

    /**
     * Define mensagem de warning
     * 
     * @param string $sMensagem
     * @return void
     */
    public static function warning(string $sMensagem) : void {
        self::definirMensangem("warning",$sMensagem);
    }


    /**
     * Define mensagem de erro
     * 
     * @param string $sMensagem
     * @return void
     */
    public static function error(string $sMensagem) : void {
        self::definirMensangem("error",$sMensagem);
    }

}