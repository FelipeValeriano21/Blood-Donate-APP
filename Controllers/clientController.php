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
            $_SESSION['usuario_idade'] = $resultados[0]->ClientAge;
            $_SESSION['usuario_telefone'] = $resultados[0]->ClientTel;
            $_SESSION['usuario_senha'] = $resultados[0]->ClientPassword;
    
            header('Location: /menu');
    
        } else {
             session_start();
            $_SESSION['loginerror'] = "";
            include 'Views/login.php';
            exit;
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

    public static function logout()
    {
        session_start();
        session_destroy();
        session_unset();
        header('Location: /Login');
    }

    public static function bancosdesangue()
    {
        session_start();
        include 'Views/bancodesangue.php';
    }

    public static function calendario()
    {
        session_start();
        include 'Views/calendario.php';
    }

    public static function erro404()
    {
        include 'Views/404.php'; 
    }

    public static function update()
    {

        session_start();

        include 'Models/clientModel.php';

        $model = new clientModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->idade = $_POST['idade'];
        $model->email = $_POST['email'];
        $model->telefone = $_POST['telefone'];
        $model->senha = $_POST['senha'];

        var_dump($model);
        
        $model->update();

        

    }

}