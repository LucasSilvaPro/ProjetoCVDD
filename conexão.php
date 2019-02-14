<?php

	$server='localhost';
 	$user='root';
 	$pass='';
 	$banco="cvdd";

 	$conn= new mysqli($server,$user,$pass,$banco);
 	if($conn->connect_error){
 		echo "error";
 	}

  ?>