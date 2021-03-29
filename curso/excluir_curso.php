<?php
include_once("../conexao.php");
$id = $_GET['id'];
$sql = "DELETE FROM curso WHERE id=$id";
if ($conexao->query($sql) === TRUE) {
	echo"<script language='javascript' type='text/javascript'>
        alert('Curso excluído com sucesso!');window.location.
        href='curso.php'</script>";
}else{
    echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse curso');window.location
        .href='curso.php'</script>";
}
?>