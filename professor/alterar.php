<?php
include_once("../conexao.php");
$id = $_POST['id'] ;
$nome = $_POST['nome'] ;
$titulacao = $_POST['titulacao'] ;
$sql = "UPDATE professor
SET nome='$nome', titulacao='$titulacao' WHERE id = $id";
if ($conexao->query($sql) === TRUE) {
	echo"<script language='javascript' type='text/javascript'>
        alert('Professor alterado com sucesso!');window.location.
        href='professor.php'</script>";
}else{
    echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível alterar esse professor');window.location
        .href='professor.php'</script>";
}
?>
