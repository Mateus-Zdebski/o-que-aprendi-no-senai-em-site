<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Autenticação de usuário</title>
        <meta name="description" content="">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <script language="javascript" src="Funcao.js"></script>

    </head>

    <body>
        <div class="container mt-5 col-sm-4 col-md-4">
            <div class="bg-white border border-rounded form">
                <div id="box">
                   <p>AUTENTICAÇÃO DE USUÁRIO</p> 
                </div>    
                <form method="post" action="sessao.php"onSubmit="return validaCampo();">
                    <div class="form-group">                      
                        <label for="nm_usuario" class="inputWithIcon col-md-5 col-form-label ">Usuário</label>
                        <div class="inputWithIcon col-sm-10 col-md-10 col-lg-10 ">
                           
                            <input type="text" class="form-control " name="nm_usuario"  placeholder="Informe o usuário" id="nm_usuario">
                                <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                        </div> 

                        <label for="ds_senha" class="inputWithIcon  col-md-8 col-form-label">Senha</label>
                        <div class="inputWithIcon  col-sm-10 col-md-10 col-lg-10">
                            <input type="password" class=" form-control" name="ds_senha"  placeholder="Informe o senha" id="ds_senha"/>
                            <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                        </div> 
                     </div>
                    <div class="col-sm-6 offset-1.  col-md-10 offset-1  col-lg-10 offset-1">                      
                        <button type="submit" class="btn btn-primary ">Entrar</button>
                        <a href="cadastro.php" class="btn btn-success">Cadastre-se</a>
                    </div>
				    
                  </form>
           </div>  
     </div>
        
     
    </body>
</html>






