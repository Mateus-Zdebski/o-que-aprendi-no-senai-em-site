<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro de usuário</title>
        <meta name="description" content="">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
    </head>
     
    <body>
     <div class="container mt-5 col-md-6">
        <div class="bg-white border border-rounded">

          <div id="box">
             <p class="">CADASTRO DE USUÁRIO</p>
          </div>
        <!--
          action = Dispara uma ação para carregar o arquivo php
          method = É o método que irá enviar os dados
        -->
           <form action="inclusaousuario.php" method="post">
            <div class="form-group">
            <label for="nm_nome" class="col-md-6 col-form-label">Nome </label>
                <div class="col-md-10 col-sm-10 col-lg-10">
                    <input type="text" class="form-control" placeholder="Informe o seu nome" id="nm_nome" name="nm_nome"/>
                </div>                
            

                <label for="nm_usuario" class="col-sm-2 col-form-label">Usuário</label>
                <div class="col-md-10 col-sm-10 col-lg-10">
                  <input type="text" class="form-control" placeholder="Informe o seu usuário"  id="nm_usuario" name="nm_usuario">
                </div>

                <label for="ds_senha" class="col-sm-2 col-form-label">Senha</label>
                <div class="col-md-10 col-sm-10 col-lg-10">
                  <input type="password" class="form-control" placeholder="Informe a sua senha"  id="ds_senha" name="ds_senha">
                </div>
              </div>

              <div class="ml-3">
                <button class="btn btn-primary" type="submit">Salvar</button>
                <a href="index.php" class="btn btn-success">Retornar</a>
              </div>
              
            </form>
             
           </div>

        </div><!--Fim da classe container-->
</body>        
