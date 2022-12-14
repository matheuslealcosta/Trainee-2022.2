<!DOCTYPE html>
<head>
    <meta CHARSET="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\..\..\public\css\login.css">
    <link rel="icon" type="image/x-icon" href="../../../public/assets/m3dPNG.png">
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

            <form action="login/check" method="POST">
                <input type="text" name="email" placeholder="E-mail do usuário" autofocus>
                <input type="password" name="password" placeholder="Sua Senha">
                <input type="submit" value="Entrar">
            </form>
          
        </div>
    </section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<script src="../../../public/js/login.js"></script>
</body>
