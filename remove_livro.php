<?php
require_once 'livros/livro.php';
require_once 'livros/livro_dao.php';
require_once 'banco_dados/conexao.php';
$conexao = new Conexao();
$livro = new Livro('', '', '', 0);
$livro->setCodigo($_GET['cod']);
$dao = new LivroDAO($livro, $conexao);
$dao->removeLivro();
header("location:tabela_livros.php");
?>