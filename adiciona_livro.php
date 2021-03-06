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
    $conexao = new Conexao();
    $dao = new LivroDAO($livro, $conexao);
    $dao->addLivro();
    echo "Concluido adicionado com sucesso!";
    header("location:tabela_livros.php");
    else:
    header("location:formulario_adicionar.php?erro=%27Ha+campos+invalidos!%27");
    endif;
?>