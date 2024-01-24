<?php

    session_start();
	$login = $_POST['nm_usuario'];
	$senha = $_POST['ds_senha'];
	
	if($login == ""|| $senha == ""){
		echo"<script>alert('por favor preencha todos os dados')</script>";
	}else{	
	include 'conexao.php';
	
	$result = mysqli_query($con,"select nm_usuario,ds_senha from tb_usuario where nm_usuario = '$login' and ds_senha = '$senha'");
    	

	if(mysqli_num_rows ($result) > 0 ) { 
		$_SESSION['txtnome']   = $login; 
		$_SESSION['txtsenha']  = $senha; 
		
		if(isset($_SESSION['txtnome'])){							
				header('location:main.html'); 
			}
		else
			{
			   header('location:index.html'); 
			}
	} 
	else{ 	    
		unset ($_SESSION['txtnome']); 
		unset ($_SESSION['txtsenha']);
		header('location:index.html');
		} 
	}
?>		

	
	
	