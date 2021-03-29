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
	<form method="post" action="inserir_professor.php">
		nome:<br>
		<input type="text" name="nome">
		<br>
		Titulação:<br>
		<input type="text" name="titulacao">
		<br>
		nome da Disciplina:<br>
		<select name="disciplina">
		<?
		include_once("../conexao.php");
		$sql = "SELECT id, nome FROM disciplina";
		$disciplina = $conexao->query($sql);
		?>
		<? while($opcoes = $disciplina->fetch_assoc()) { ?>
		<option value="<?= $opcoes['id'] ?>">
		<?= $opcoes['nome'] ?></option>
		<? } ?>
		</select>
		<br><br>
		<input type="submit" name="submit" value="Salvar">
	</form>
	<?php
	$consulta = "SELECT p.*, d.nome as dnome
	FROM professor p, disciplina d
	WHERE p.disciplina=d.id";
	$resultado = $conexao->query($consulta);
	?>
	<table>
	<tr>
	<td>Nome</td>
	<td>Titulação</td>
	<td>Disciplina</td>
	</tr>
	<? while($linha = $resultado->fetch_assoc()) {
	?>
	<tr>
	<td>
	<a href="editar_professor.php?id=<?= $linha['id'] ?>">
	<?= $linha['nome'] ?>
	</a>
	</td>
	<td><?= $linha['titulacao'] ?></td>
	<td><?= $linha['dnome'] ?></td>
	</tr>
	<? } ?>
	</table>
	</div>
  </body>
</html>