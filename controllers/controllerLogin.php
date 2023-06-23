<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

class controllerLogin {
    private $model;

    public function __construct() {
        require_once '../models/modelLogin.php';
        $this->model = new modelLogin();
    }

public function LoginUsuario($user, $password) {
            $validacion=$this->model->IngresarUsuario($user, $password);
            if($validacion===true){
                header('Location: /app/views/menu.php');
            }else{
                header('Location: /app/views/login.php');
            }
        }

    }