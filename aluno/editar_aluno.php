<?php
include_once("../conexao.php");
$id = $_GET['id'];
$sql = "SELECT * FROM aluno WHERE id=" . $id;
$resultado = $conexao->query($sql);
$aluno = $resultado->fetch_assoc();
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
		 <li><a href="aluno.php">Aluno</a></li>
		 <li><a href="../professor/professor.php">Professor</a></li>
		 <li><a href="../curso/curso.php">Curso</a></li>
		 <li ><a href="../disciplina/disciplina.php">Disciplina</a></li>
	</ul>
	<div>
	<h1>Aluno</h1>
		<form method="post" action="alterar.php">
		<input type="hidden" name="id"
		value="<?= $aluno['id'] ?>" />
		Nome: <input type="text" name="nome"
		value="<?= $aluno['nome'] ?>" />
		<br/>
		Matrícula: <input type="text" name="matricula"
		value="<?= $aluno['matricula'] ?>" />
		<br/>
		nome da Curso:<input type="text" name="curso"
		value="<?= $aluno['curso'] ?>" />
		<br><br>
		<input type="button" onclick="javascript:history.go(-1);" value="Voltar"/>
		<input type="submit" value="Alterar"/>
		</form>
	</div>
	</body>
</html>