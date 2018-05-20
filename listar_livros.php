<?php
require_once 'livros/livro.php';
require_once 'livros/livro_dao.php';
require_once 'banco_dados/conexao.php';
$conexao = new Conexao();
$dao = new LivroDAO(new Livro('', '', '', 0), $conexao);
$meus_livros = $dao->listaLivro();
foreach ($meus_livros as $livro){
    echo $livro->getCodigo()."  ".$livro->getTitulo()."  ".$livro->getAutor()."<br/>";
}
?>