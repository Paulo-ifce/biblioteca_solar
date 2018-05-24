<?php
require_once 'livros/livro_dao.php';
require_once 'livros/livro.php';
require_once 'banco_dados/conexao.php';
if(isset($_POST['titulo']) &&
    isset($_POST['autor'])&&
    isset($_POST['editora'])&&
    isset($_POST['edicao'])&&
    (filter_input(INPUT_POST, 'edicao',FILTER_VALIDATE_INT))):
    $livro = new Livro($_POST['titulo'], $_POST['autor'], $_POST['editora'], intval($_POST['edicao']));
    $livro->setCodigo(intval($_POST['codigo']));
    $conexao = new Conexao();
    $dao = new LivroDAO($livro, $conexao);
    $dao->editaLivro();
    header("location:tabela_livros.php");
endif;
?>