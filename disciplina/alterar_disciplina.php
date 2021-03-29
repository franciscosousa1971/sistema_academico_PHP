<?php
include_once("../conexao.php");
$nome = $_POST['nome'];
$id = $_POST['id'];
$sql = "UPDATE disciplina SET nome='$nome' WHERE id=$id";
if($conexao->query($sql)===TRUE){
    echo"<script language='javascript' type='text/javascript'>
        alert('disciplina alterado com sucesso!');window.location.
        href='disciplina.php'</script>";
}else{
    echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível alterar esse disciplina');window.location
        .href='disciplina.php'</script>";
}
?>
