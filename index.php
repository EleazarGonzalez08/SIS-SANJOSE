
<?php
require "config.php";

$page = "index";
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

switch ($page) {
    case 'login':
        require "controlador/LoginController.php";
        LoginController::index();
        break;
    case 'loginauth':
        require "controlador/LoginController.php";
        LoginController::login();
        break;
    case 'logout':
        break;
    case 'admin':
        echo "logueado..";
        break;
    
    default:
        echo "<a href='".urlsite."?page=login'>Login</a>";
        break;
}
