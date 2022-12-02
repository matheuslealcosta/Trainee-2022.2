<!DOCTYPE html>
<head>
    <meta CHARSET="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\..\..\public\css\login.css">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    
    <title>Login</title>
</head>
<body>
<div class="fade-modal hide" id="fadeModal"></div>
    <section class="area-login">
        <div class="login">
            <div>
                <img src="..\..\..\public\img\MatflixLogoText.png">
            </div>

            <form action="login/verify" method="POST">
                <input type="text" name="name" placeholder="Nome de Usuário" autofocus>
                <input type="password" name="password" placeholder="Sua Senha">
                <input type="submit" value="Entrar">
            </form>
          <p>Ainda não tem uma conta?</p><a class="criar botao criarconta" data-modal="modalAdd" href="#"> Criar Conta</a></p>
        </div>
    </section>

    <div id="modalAdd" class="hide fech">

<!--Modal Criar Usuário-->
<div class="modal-header">
    <h2>Criar uma conta</h2>
    <button1 id="close-modal">X</button1>
</div>
<div class="modal-body"></div>

<form class="modal-create" method="POST" action="login/create">
    <input type="text" class="input-modal-create" name="name" placeholder="Digite o nome de Usuário" autofocus>
    <input type="text" class="input-modal-create" name="email" placeholder="Digite seu E-mail" autofocus>
    <input type="password" class="input-modal-create" name="password" placeholder="Digite sua Senha">
    <input type="submit" class="input-modal-create" value="Cadastrar">
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<script src="../../../public/js/login.js"></script>
</body>
