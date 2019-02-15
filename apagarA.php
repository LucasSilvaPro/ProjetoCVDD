<?php
	
	require_once("conec.php");
	$id=$_GET['id'];
	$sql="DELETE FROM Alunos WHERE id='$id'";
	$result=$conn->query($sql) or die ($sql->error);
	if($result){
		header("Location: alunos.php");
	}else{
		echo "Aluno Não Apagado";
	}

  ?>
