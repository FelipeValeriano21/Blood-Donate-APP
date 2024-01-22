<?php

include 'Controllers/clientController.php';

$url = strtok($_SERVER["REQUEST_URI"], '?'); 
$params = $_GET;  


switch($url)
{
    case '/':
        echo "Menu principal do sistema";
    break;

    case '/register':
        clientController::index();
    break;

    case '/register/save':
        clientController::save();
    break;

    case '/Login':
        clientController::login();
    break;

    case '/logar':
        clientController::logar();
    break;

    case '/menu':
        clientController::menu();
    break;

    case '/Profile':
        clientController::profile();
    break;

    default:
        echo("Tela de 404");
}
    

