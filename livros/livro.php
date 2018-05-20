<?php

class Livro
{

    // atributos da classe livro
    private $codigo;

    private $titulo;

    private $autor;

    private $editora;

    private $edicao;

    // consturtor
    public function __construct(string $titulo, string $autor, string $editora, int $edicao)
    {
        $this->autor = $autor;
        $this->titulo = $titulo;
        $this->editora = $editora;
        $this->edicao = $edicao;
    }

    // metodos de acesso
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setEditora($editora)
    {
        $this->editora = $editora;
    }

    public function getEditora()
    {
        return $this->editora;
    }

    public function setEdicao($edicao)
    {
        $this->edicao = $edicao;
    }

    public function getEdicao()
    {
        return $this->edicao;
    }
    //fim da classe
}
?>