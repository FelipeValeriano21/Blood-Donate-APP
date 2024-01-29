<?php

class clientModel
{

    public $nome, $idade, $email, $telefone, $senha; 
    public $rows;
    public $id;



    public static function index()
    {

    } 
    public function save () 
    {

        include 'DAO/clientDAO.php';

        $dao = new clientDAO();

        $dao->insert($this);

    }

    
    public function logar()
    {
        include_once 'DAO/clientDAO.php';

        $dao = new clientDAO();
        
        $resultados = $dao->searchLogin($this);

        if (empty($resultados)) {
            return false;
        } else {
            return $resultados;
           
        }
    }

    public function update()
    {
        include 'DAO/clientDAO.php';
    
        $dao = new clientDAO();
    
        $result = $dao->update($this);
    
        if ($result) {
            header("Location: /menu");
            
            exit(); 
        } else {
            echo "Erro na atualização. Verifique o log para mais detalhes.";
        }
    }
}    
