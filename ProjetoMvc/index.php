<?php
use src\config\Router;

require_once 'src/Utils/Managers/SessionManager.php';
require_once 'src/config/Router.php';

SessionManager::iniciarSessao();
$aDados = array_merge($_POST,$_GET);
Router::rotear($aDados);
?>