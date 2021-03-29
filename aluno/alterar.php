<?php
include_once("../conexao.php");
$id = $_POST['id'] ;
$nome = $_POST['nome'] ;
$matricula = $_POST['matricula'] ;
$sql = "UPDATE aluno
SET nome='$nome', matricula='$matricula' WHERE id = $id";
if ($conexao->query($sql) === TRUE) {
	echo"<script language='javascript' type='text/javascript'>
        alert('Aluno alterado com sucesso!');window.location.
        href='aluno.php'</script>";
}else{
    echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível alterar esse aluno');window.location
        .href='aluno.php'</script>";
}
?>
