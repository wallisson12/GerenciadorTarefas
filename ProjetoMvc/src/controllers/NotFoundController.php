<?php
namespace src\controllers;

use View;

class NotFoundController{

    /**
     * Exibe a view de 404 not found
     */
    public function index() : void {
        $oView = new View(__DIR__ .'/../public/view/notfound/error_notfound.php');
        $oView->render();
    }
}