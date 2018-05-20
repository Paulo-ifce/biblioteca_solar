<?php

class Usuario
{

    private $codigo;

    private $nome;

    private $telefone;

    private $email;

    private $cep;

    // método construtor
    public function __construct(string $nome, string $telefone, string $email, string $cep)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->cep = $cep;
    }

    // metodos de acesso
    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
    }
}
?>