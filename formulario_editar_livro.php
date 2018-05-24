<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/formulario_livro.css"/>
<title>Editar Livro</title>
</head>
	<body>
		<div class="container">
			<div class="page-header">
				<h1 class="titulo">Biblioteca Solar</h1>
			</div>
			<div class="row">
    			<div class="col-sm-6">
    				<h2>Editar Livro</h2>
            		<form class ="form" action="edita_livro.php" method="post">
            			<div class="form-group">
            				<label>Titulo</label>
            				<input class="form-control" type="text" name="titulo"/>
            			</div>
            			<div class="form-group">
            				<label>Autor</label>
            				<input class="form-control" type="text" name="autor"/><br/>
            			</div>
                		<div class="form-group">
                			<label>Editora</label>
                			<input  class="form-control" type="text" name="editora"/><br/>
            			</div>
            			<div class="form-group">
            				<label>Edicao</label>
            				<input class="form-control" type="text" name="edicao"/><br/>
            			</div>
            		<input class ="btn btn-primary" type="submit" value="Cadastrar" name="cadastrar"/>
            		<a href="tabela_livros.php"class="btn btn-danger">Cancelar</a>
            		</form>
    			</div>
    			<div class="col-sm-6">
    				<figure><img class="imagem img-responsive thumbnail"alt="imagem de um livro" src="img/livro2.jpg"></figure>
    				<q class="citacao">
    					Todos os dias deveríamos ler um bom poema, 
    					ouvir uma linda canção, contemplar um belo quadro
    					 e dizer algumas palavras bonitas.
    				</q>
    				<br/>
    				~ Johann Goethe
    			</div>
			</div>
    		
		</div>
		
		<!-- Arquivos JS para rodar o bootstap -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="bootstap/js/bootstrap.min.js"></script>
	</body>
</html>