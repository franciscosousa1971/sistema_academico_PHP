<?php
include_once("../conexao.php");
$id = $_GET['id'];
$sql = "SELECT * FROM curso where id=$id";
$result = $conexao->query($sql);
$row = $result->fetch_assoc();
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
		 <li><a href="../professor/professor.php">Professor</a></li>
		 <li><a href="curso.php">Curso</a></li>
		 <li ><a href="../disciplina/disciplina.php">Disciplina</a></li>
	</ul>
	<div>
	<h1>Cursos</h1>
	<form action="alterar_curso.php" method="post">
	<p>Id:
	<input type="text" name="id" readonly="true"
	value="<?= $row['id'] ?>"/></p>
	<p>Nome:
	<input type="text" name="nome" value="<?= $row['nome'] ?>"/></p>
	<input type="button" onclick="javascript:history.go(-1);" value="Voltar"/>
	<input type="submit" value="Alterar"/>
	<a href="excluir_curso.php?id=<?= $row['id'] ?>">Excluir Curso</a>
	</form>
	</div>
</body>
</html>