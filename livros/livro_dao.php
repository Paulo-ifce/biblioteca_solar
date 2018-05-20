<?php
require_once 'livro.php';
require_once 'banco_dados/conexao.php';

class LivroDAO
{

    private $conexao;

    private $livro;

    public function __construct(Livro $livro, Conexao $conexao)
    {
        $this->livro = $livro;
        $this->conexao = $conexao->getConnection();
    }

    public function addLivro()
    {
        $titulo = $this->livro->getTitulo();
        $autor = $this->livro->getAutor();
        $editora = $this->livro->getEditora();
        $edicao = $this->livro->getEdicao();
        $sql = "INSERT INTO livros 
        values(default,'$titulo','$autor'
        ,'$editora','$edicao')";
        if(mysqli_query($this->conexao, $sql)):
            echo "Livro ".$this->livro->getTitulo()." adicionado com sucesso!";
        else:
            echo "Erro ao adicionar livro";
            echo mysqli_error($this->conexao);
        endif;
    }

    public function listaLivro()
    {
       $livros = array();
       $i = 0;
       $sql = 'SELECT * FROM livros';
       $resultado = mysqli_query($this->conexao, $sql);
       while($livro_listado = mysqli_fetch_array($resultado) ){
           $codigo = $livro_listado['codigo'];
           $titulo = $livro_listado['titulo'];
           $autor = $livro_listado['autor'];
           $editora = $livro_listado['editora'];
           $edicao = $livro_listado['edicao'];
           $livro_atual = new Livro($titulo, $autor, $editora, $edicao);
           $livro_atual->setCodigo($codigo);
           $livros[$i] = $livro_atual;
           $i++;
           
       }
       return $livros;
    }

    public function removeLivro()
    {
        $cod = $this->livro->getCodigo();
        $sql = "DELETE FROM livros WHERE codigo='$cod'";
        mysqli_query($this->conexao, $sql);
    }

    public function editaLivro()
    {
        // implementação
    }

    public function buscaLivro()
    {
        // implementação
    }
}
?>