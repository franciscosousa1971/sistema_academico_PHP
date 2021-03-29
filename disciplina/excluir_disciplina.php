<?php
include_once("../conexao.php");
$id = $_GET['id'];
$sql = "DELETE FROM disciplina WHERE id=$id";
if ($conexao->query($sql) === TRUE) {
	echo"<script language='javascript' type='text/javascript'>
        alert('Discplina excluído com sucesso!');window.location.
        href='disciplina.php'</script>";
}else{
    echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar essa disciplina');window.location
        .href='disciplina.php'</script>";
}
?>