<?php

class clientDAO
{

    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=mydb";
    
        try {
            $this->conexao = new PDO($dsn, 'root', null);
        } catch (\PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    
    public function insert(clientModel $model)
    {

        $sql = "INSERT INTO `client`(`ClientName`, `ClientAge`, `ClientTel`,`ClientEmail`,`ClientPassword`) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->idade);
        $stmt->bindValue(3, $model->telefone);
        $stmt->bindValue(4, $model->email);
        $stmt->bindValue(5, $model->senha);
        $stmt->execute();

    }

    public function searchLogin(clientModel $model)
    {
        
        $stmt = $this->conexao->prepare("SELECT * FROM `client` WHERE `ClientEmail` = ? AND `ClientPassword` = ?");
        $stmt->bindValue(1, $model->email);
        $stmt->bindValue(2, $model->senha);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);


    }
    


}