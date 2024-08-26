<?php

class Database{
    private const HOSTNAME = "localhost";
    private const USERNAME = "root";
    private const PASSWORD = "";
    private const DBNAME = "sistema_blog";
    private $conn;

    public function __construct()
    {
        try {
            // Criando uma conexão com o bd usando PDO
            $this->conn = new PDO("mysql:host=".self::HOSTNAME.";dbname=".self::DBNAME.";", self::USERNAME, self::PASSWORD);
            // Definindo o modo de erro como exceção
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexão bem sucedida";
        } catch (PDOException $e) {
            echo "Falha na conexão: ".$e->getMessage();
        }
    }

    private function close(){
        $this->conn = null;
    }
}