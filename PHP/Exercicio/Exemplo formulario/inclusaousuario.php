<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inclusão de cadastro</title>
	</head>
	<body>
	  <?php
	   if($nome ==""|| $usuario ==""|| $senha ==""){
		echo"<script>alert('por favor preencha todos os dados')</script>";
	}else{

		include 'conexao.php';		
		$nome      = $_POST['nm_nome'];
		$usuario   = $_POST['nm_usuario'];
		$senha     = $_POST['ds_senha'];
		
		 mysqli_query($con,"insert into tb_usuario(nm_nome, nm_usuario, ds_senha)
		 values('$nome','$usuario','$senha')");	
		
		echo"<script>alert('Inclusão realizada com sucesso');</script>";
		echo"<script>window.location='cadastro.php'</script>";		
		}
?>
</body>
</html>		
			
			
		