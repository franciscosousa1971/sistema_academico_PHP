<?php
	include_once("../conexao.php");
    $nome = $_POST['nome'];
    $sql="INSERT INTO curso(nome) VALUES('$nome')";
    if($conexao->query($sql)===TRUE){
       echo"<script language='javascript' type='text/javascript'>
        alert('Curso cadastrado com sucesso!');window.location.
        href='curso.php'</script>";
    }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse curso');window.location
        .href='curso.php'</script>";
	}
?>
