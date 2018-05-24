<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/formulario_livro.css"/>
<title>Livros</title>
</head>
	<body>
		<div class="container">
			<div class="page-header">
				<h1 class="titulo">Biblioteca Solar</h1>
			</div>
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>Código</th>
						<th>Titulo</th>
						<th>Autor</th>
						<th>Editora</th>
						<th>Edição</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					//parte necessaria
					require_once 'livros/livro.php';
					require_once 'livros/livro_dao.php';
					require_once 'banco_dados/conexao.php';
					$conexao = new Conexao();
					$dao = new LivroDAO(new Livro('', '', '', 0), $conexao);
					$meus_livros = $dao->listaLivro();
					//parte que realmente faz alguma coisa
					foreach ($meus_livros as $livro){
					  $codigo = $livro->getCodigo();
					  $titulo = $livro->getTitulo();
					  $autor = $livro->getAutor();
					  $editora = $livro->getEditora();
					  $edicao = $livro->getEdicao();
					  echo "<tr>
                            <td>$codigo</td>
                            <td>$titulo</td>
                            <td>$autor</td>
                            <td>$editora</td>
                            <td>$edicao</td>
                            <td class=\"actions\">
                            <a  href=\"remove_livro.php?cod=$codigo\">
                            <img src=\"img/remover.png\">
                            </a>
                            <a href=\"formulario_editar.php?cod=$codigo&titulo=$titulo&autor=$autor&editora=$editora&edicao=$edicao\">
                            <img src=\"img/edicao.png\">
                            </a>
                            </td>
                            </tr>";
					}
					?>
				</tbody>
			</table>
			<a href="formulario_adicionar.php" class="btn btn-primary">Adicionar</a>
		</div>
		<!-- Arquivos JS para rodar o bootstap -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="bootstap/js/bootstrap.min.js"></script>
	</body>
</html>