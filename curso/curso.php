<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Acadêmico</title>
    <link rel="stylesheet" type="text/css" href="../estilo.css"/>

</head>
	<body>
	<ul>
		<li><a class="active" href="index.php">Home</a></li>
		 <li><a href="../aluno/aluno.php">Aluno</a></li>
		 <li><a href="../professor/professor.php">Professor</a></li>
		 <li><a href="curso.php">Curso</a></li>
		 <li ><a href="../disciplina/disciplina.php">Disciplina</a></li>
	</ul>
	<div >
		<h1>Cursos</h1>
		<form method="post" action="inserir_curso.php">
			<br><br>nome:<br>
			<input type="text" name="nome">
			<br><br>
			<input type="submit" name="submit" value="Salvar">
		</form>
		
		<? 
		include_once("../conexao.php");
		$sql = "SELECT id, nome FROM curso";
		$result = $conexao->query($sql);
		?>
		<table>
		<tr>
		<th>ID</th>
		<th>Nome</th>
		</tr>
		<?
		while ($row = $result->fetch_assoc()){
		?>
		<tr>
		<td><?= $row['id'] ?></td>
		<td>
		<a href='editar_curso.php?id=<?= $row['id'] ?>'>
		<?= $row['nome'] ?>
		</a>
		</tr>
		<? } ?>
		</table>
	</div>
	</body>
</html>