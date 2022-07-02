<?php

require_once 'conexao.php';

class Api
{
    private $conexao;
    public function __construct()
    {
        $this->conexao = new Conexao();
    }
    public function registerUser(string $name, string $email, string $pwd)
    {
        $this->conexao->query("INSERT INTO usuario (nome, email, senha) VALUES ('$name', '$email', '$pwd')");
    }


    public function verIfExists($email)
    {
        return $this->conexao->query("SELECT COUNT(*) FROM usuario where email = '$email'")->fetchColumn();
    }
}
