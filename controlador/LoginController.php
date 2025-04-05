<?php
session_start();
require "modelo/login.php";
class LoginController {
    public function index() {
        if (isset($_SESSION['login'])) {
            header('location:'.urlsite);
            require "vista/front/formlogin.php";
        }
    }

    public function login()
    {
        $_modelo = new login();
        $_email = trim ($_POST['txtemail']);
        $_password = trim ($_POST['txtpassword']);

        $_resultado = $_modelo->login($_email,$_password);
        if ($_resultado) {
            $_SESSION['email'] = $_email;
            header('location:'.urlsite."?page=admin");
        } else {
            header('location:'.urlsite. "?msg= No coinciden las credenciales");
            require "vista/login.php";
        }

    }
}
