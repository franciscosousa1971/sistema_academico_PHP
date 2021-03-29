<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Acadêmico</title>
    <link rel="stylesheet" type="text/css" href="../estilo.css"/>

</head>
	<ul>
  <li><a class="active" href="../index.php">Home</a></li>
	 <li><a href="../aluno/aluno.php">Aluno</a></li>
	 <li><a href="../professor/professor.php">Professor</a></li>
	 <li><a href="../curso/curso.php">Curso</a></li>
	 <li ><a href="disciplina.php">Disciplina</a></li>
</ul>
	<div>
	<h1>Disciplinas</h1>
	<form method="post" action="inserir_disciplina.php">
		nome:<br>
		<input type="text" name="nome">
		<br><br>
		<input type="submit" name="submit" value="Salvar">
	</form>
	
	<? 
	include_once("../conexao.php");
	$sql = "SELECT id, nome FROM disciplina";
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
	<a href='editar_disciplina.php?id=<?= $row['id'] ?>'>
	<?= $row['nome'] ?>
	</a>
	</tr>
	<? } ?>
	</table>
	</div>
  </body>
</html>