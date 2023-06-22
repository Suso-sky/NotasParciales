<?php
require_once '/opt/lampp/htdocs/app/controllers/controllerLogin.php';
$login = new controllerLogin();
$login->LoginUsuario($_POST['usuario'],$_POST['password']);
?>