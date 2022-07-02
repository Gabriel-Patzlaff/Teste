<?php
class Conexao
{
    private $user;
    private $pwd;
    private $db;
    private $host;
    private $conn;

    public function __construct()
    {
        $this->user = "root";
        $this->host = "localhost";
        $this->pwd = "";
        $this->db = "teste";
        $this->conn = $this->connect();
    }
    public function connect()
    {
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db;

        try {
            $conn = new PDO($dsn, $this->user, $this->pwd);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
    public function query($sql)
    {
        return $this->conn->query($sql);
    }
}
