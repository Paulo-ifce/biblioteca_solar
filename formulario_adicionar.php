<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Adicionar Livros</title>
</head>
	<body>
		<h2>Cadastro de livros</h2>
		<form action="adiciona_livro.php" method="post">
		Titulo:<input type="text" name="titulo"/><br/>
		Autor:<input type="text" name="autor"/><br/>
		Editora:<input type="text" name="editora"/><br/>
		Edicao:<input type="text" name="edicao"/><br/>
		<input type="submit" value="Cadastrar" name="cadastrar"/>
		<input type="reset" value="Cancelar" name="cancelar"/>
		</form>
	</body>
</html>