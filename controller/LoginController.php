<?php

include_once 'model/LoginModel.php';
include_once 'helper/MysqlDatabase.php';
$config = parse_ini_file('config/config.ini');
$database = new MysqlDatabase($config);
$loginModel = new LoginModel($database);

class LoginController
{
    private $render;

    public function __construct($render)
    {
        $this->render = $render;
    }

    public function execute()
    {
        echo $this->render->render("view/loginView.php");
    }

}

/*if (isset($_POST['email']) && !empty($_POST['email']) and isset($_POST['password']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cantidadDeFilas = $loginModel->getUsuario($email, $password);

    }

    if ($cantidadDeFilas == 1) {
        $_SESSION["logueado"] = 1;
        $_SESSION["email"] = $_POST['email'];
        echo 'tp pain';
        header("Location: ../view/principalView.php");
    } else {
        $_SESSION['mensaje'] = "Usuario y/o contraseña invalido";
        header("Location: ../view/index.php");
    }*/