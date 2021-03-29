<?php
	include_once("../conexao.php");
    $nome = $_POST['nome'];
    $titulacao = $_POST['titulacao'];
	$disciplina = $_POST['disciplina'];
    $sql="INSERT INTO professor(nome,titulacao,disciplina) VALUES('$nome','$titulacao','$disciplina')";
    if($conexao->query($sql)===TRUE){
       echo"<script language='javascript' type='text/javascript'>
        alert('Professor cadastrado com sucesso!');window.location.
        href='listar_professor.php'</script>";
    }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse professor');window.location
        .href='professor.php'</script>";
	}
?>
