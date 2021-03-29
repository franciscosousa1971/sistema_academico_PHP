<?php
include_once("../conexao.php");
$id = $_GET['id'];
$sql = "SELECT * FROM professor WHERE id=" . $id;
$resultado = $conexao->query($sql);
$professor = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Acadêmico</title>
    <link rel="stylesheet" type="text/css" href="../estilo.css"/>

</head>
	<body>
	<ul>
		<li><a class="active" href="../index.php">Home</a></li>
		 <li><a href="../aluno/aluno.php">Aluno</a></li>
		 <li><a href="professor.php">Professor</a></li>
		 <li><a href="../curso/curso.php">Curso</a></li>
		 <li ><a href="../disciplina/disciplina.php">Disciplina</a></li>
	</ul>
	<div>
	<h1>Professores</h1>
		<form method="post" action="alterar.php">
		<input type="hidden" name="id"
		value="<?= $professor['id'] ?>" />
		Nome: <input type="text" name="nome"
		value="<?= $professor['nome'] ?>" />
		<br/>
		Titulacao: <input type="text" name="titulacao"
		value="<?= $professor['titulacao'] ?>" />
		<br/>
		nome da Disciplina:<input type="text" name="disciplina"
		value="<?= $professor['disciplina'] ?>" />
		<br><br>
		<input type="button" onclick="javascript:history.go(-1);" value="Voltar"/>
		<input type="submit" value="Alterar"/>
		</form>
	</div>
	</body>
</html>