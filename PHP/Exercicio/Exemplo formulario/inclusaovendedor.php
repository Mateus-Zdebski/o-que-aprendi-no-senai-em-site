<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inclusão de vendedor</title>
	</head>
	<body>
	  <?php
							  	
		if($nome == ""|| $email == ""|| $cidade ==""||$estado==""){
			echo"<script>alert('por favor preencha todos os dados')</script>";
		}else{
			include 'conexao.php';	
			$nome      = $_POST['Nm_vendedor'];
			$email   = $_POST['Ds_email'];
			$cidade     = $_POST['ds_cidade'];
			$estado     = $_POST['ds_estado'];
			mysqli_query($con,"insert into VENDEDORES(Nm_vendedor, Ds_email, ds_cidade, ds_estado)
			values('$nome','$email','$cidade', '$estado')");	
		   
		   echo"<script>alert('Inclusão realizada com sucesso');</script>";
		   echo"<script>window.location='main.html'</script>";		
		}
		
		
?>
</body>
</html>		
			