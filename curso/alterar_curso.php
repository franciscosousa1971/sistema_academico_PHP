<?php
include_once("../conexao.php");
$nome = $_POST['nome'];
$id = $_POST['id'];
$sql = "UPDATE curso SET nome='$nome' WHERE id=$id";
if($conexao->query($sql)===TRUE){
    echo"<script language='javascript' type='text/javascript'>
        alert('Curso alterado com sucesso!');window.location.
        href='curso.php'</script>";
}else{
    echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível alterar esse curso');window.location
        .href='curso.php'</script>";
}
?>
