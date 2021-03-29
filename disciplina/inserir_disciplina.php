<?php
	include_once("../conexao.php");
    $nome = $_POST['nome'];
    $sql="INSERT INTO disciplina(nome) VALUES('$nome')";
    if($conexao->query($sql)===TRUE){
       echo"<script language='javascript' type='text/javascript'>
        alert('disciplina cadastrada com sucesso!');window.location.
        href='disciplina.php'</script>";
    }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar essa disciplina');window.location
        .href='disciplina.php'</script>";
	}
?>
