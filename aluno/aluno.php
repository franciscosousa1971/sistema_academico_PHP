<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Acadêmico</title>
    <link rel="stylesheet" type="text/css" href="../estilo.css"/>

</head>
<ul>
  <li><a class="active" href="../index.php">Home</a></li>
	 <li><a href="aluno.php">Aluno</a></li>
	 <li><a href="../professor/professor.php">Professor</a></li>
	 <li><a href="../curso/curso.php">Curso</a></li>
	 <li ><a href="../disciplina/disciplina.php">Disciplina</a></li>
</ul>
	<div>
	<form method="post" action="inserir_aluno.php">
		nome:<br>
		<input type="text" name="nome">
		<br>
		Matrícula:<br>
		<input type="text" name="matricula">
		<br>
		nome do Curso:<br>
		<select name="curso">
		<?
		include_once("../conexao.php");
		$sql = "SELECT id, nome FROM curso";
		$curso = $conexao->query($sql);
		?>
		<? while($opcoes = $curso->fetch_assoc()) { ?>
		<option value="<?= $opcoes['id'] ?>">
		<?= $opcoes['nome'] ?></option>
		<? } ?>
		</select>
		<br><br>
		<input type="submit" name="submit" value="Salvar">
	</form>
	<?php
	$consulta = "SELECT a.*, c.nome as cnome
	FROM aluno a, curso c
	WHERE a.curso=c.id";
	$resultado = $conexao->query($consulta);
	?>
	<table>
	<tr>
	<td>Nome</td>
	<td>Curso</td>
	</tr>
	<? while($linha = $resultado->fetch_assoc()) {
	?>
	<tr>
	<td>
	<a href="editar_aluno.php?id=<?= $linha['id'] ?>">
	<?= $linha['nome'] ?>
	</a>
	</td>
	<td><?= $linha['cnome'] ?></td>
	</tr>
	<? } ?>
	</table>
	</div>
  </body>
</html>