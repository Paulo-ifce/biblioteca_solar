<?php
require_once 'livros/livro_dao.php';
require_once 'livros/livro.php';
require_once 'banco_dados/conexao.php';
    $livro = new Livro($_POST['titulo'], $_POST['autor'], $_POST['editora'], intval($_POST['edicao']));
    $conexao = new Conexao();
    $dao = new LivroDAO($livro, $conexao);
    $dao->addLivro();
    echo "Concluido adicionado com sucesso!";
    header("location:tabela_livros.php");
?>