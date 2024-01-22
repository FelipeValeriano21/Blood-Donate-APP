<?php

class clientController 
{
    public static function index()
    {

       include 'Views/register.php';

    }

    public static function save ()
    {

        include 'Models/clientModel.php';

        $model = new clientModel();
        $model->nome = $_POST['nome'];
        $model->idade = $_POST['idade'];
        $model->email = $_POST['email'];
        $model->telefone = $_POST['telefone'];
        $model->senha = $_POST['senha'];

        var_dump($model);
        
        $model->save();

    }

    public static function login()
    {
        include 'Views/login.php';
    }

    public static function logar()
    {
        include 'Models/clientModel.php';
        $model = new clientModel();
        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];
        $resultados = $model->logar();
    
        if ($resultados !== false) {
            session_start();
    
            $_SESSION['usuario_id'] = $resultados[0]->idClient;
            $_SESSION['usuario_nome'] = $resultados[0]->ClientName;
            $_SESSION['usuario_email'] = $resultados[0]->ClientEmail;

            header('Location: /menu');
            exit;
            
        } else {
            echo "Login falhou. Usuário ou senha inválidos.";
        }
    }
    
    public static function menu()
    {
        session_start();
        if (isset($_SESSION['usuario_id'])) {
            include 'Views/menu.php';
        } else {
            header('Location: /Login');
        }
    }

    public static function profile()
    {
        session_start();
        if (isset($_SESSION['usuario_id'])) {
            include 'Views/profile.php';
        } else {
            header('Location: /Login');
        }
    }


}