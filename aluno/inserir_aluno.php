<?php
	include_once("../conexao.php");
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
	$curso = $_POST['curso'];
    $sql="INSERT INTO aluno(nome,matricula,curso) VALUES('$nome','$matricula','$curso')";
    if($conexao->query($sql)===TRUE){
       echo"<script language='javascript' type='text/javascript'>
        alert('Aluno cadastrado com sucesso!');window.location.
        href='aluno.php'</script>";
    }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse aluno');window.location
        .href='aluno.php'</script>";
	}
?>
