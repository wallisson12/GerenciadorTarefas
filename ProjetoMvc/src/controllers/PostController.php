<?php

/**
 * Classe PostController
 */
class PostController{

    /** @var PostService $oPostService */
    private $oPostService;

    /**
     * Construtor 
     */
    public function __construct(){
        $this->oPostService = new PostService();
    }

}