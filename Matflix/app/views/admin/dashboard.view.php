<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/css/dashboard.css">
    <link rel="stylesheet" href="../../../public/css/sidebar.css">
    <script src="https://kit.fontawesome.com/b5c9f282d0.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>
<body>
    <?php require('app/views/includes/navbar_admin.php');?>
    <?php require('app/views/includes/sidebar.php');?>
        <div class="logo">
            <img src="../../../public/img/MatflixLogoText.png" alt="MatFlix" class="logo">
          </div>
        
        <div class="cartoes">
            <div class="card cartao" >
                <img class="card-img-top" src="../../../public/img/perfil.jpg" alt="Card image perfil">
                <div class="card-body corpodocard">
                  <h5 class="card-title cardtitulo2">Usuários</h5>
                  <a href="/lista-usuarios" class="btn btn-primary botao1">Gerenciar</a>
                </div>
              </div>

              <div class="card cartao" >
                <img class="card-img-top" src="../../../public/img/strangerthings3.jpg" alt="Card image Lista de posts">
                <div class="card-body corpodocard">
                  <h5 class="card-title cardtitulo2">Postagens</h5>
                  <a href="/lista-posts-admin" class="btn btn-primary botao1">Gerenciar</a>
                </div>
              </div>

              <div class="card cartao" >
                <img class="card-img-top" src="../../../public/img/discord.jpeg" alt="Card image Comunidade">
                <div class="card-body corpodocard">
                  <h5 class="card-title cardtitulo2">Comunidade</h5>
                  <a href="https://discord.gg/9tJEdxMv" class="btn btn-primary botao1">Gerenciar</a>
                </div>
              </div>

        </div>
        

      

      






        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>