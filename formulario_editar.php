<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF8"/> 
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
		<title>Editar Livros</title>
	</head>
	<body>
		<div class="container">
			<div class="page-header">
				<h1 class="titulo">Biblioteca Solar</h1>
			</div>
			<div class="row">
    			<div class="col-sm-6">
    				<h2>Editar livro</h2>
            		<form class ="form" action="edita_livro.php" method="post">
            			<div class="form-group">
            				<label>Titulo</label>
            				<input class="form-control" value="<?php echo $_GET['titulo'];?>" type="text" name="titulo"/>
            			</div>
            			<div class="form-group">
            				<label>Autor</label>
            				<input class="form-control" value="<?php echo $_GET['autor']?>" type="text" name="autor"/><br/>
            			</div>
                		<div class="form-group">
                			<label>Editora</label>
                			<input  class="form-control" value="<?php echo $_GET['editora']?>" type="text" name="editora"/><br/>
            			</div>
            			<div class="form-group">
            				<label>Edicao</label>
            				<input class="form-control" value="<?php echo $_GET['edicao']?>" type="text" name="edicao"/><br/>
            			</div>
            		<input type="hidden" value="<?php echo $_GET['cod'];?>" type="text" name="codigo"/>
            		<input class ="btn btn-primary" type="submit" value="Cadastrar" name="cadastrar"/>
            		<a href="tabela_livros.php"class="btn btn-danger">Cancelar</a>
            		</form>
    			</div>
    	</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>