<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="../../../public/assets/m3dPNG.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas+Neue">
        <link rel="stylesheet" href="../../../public/css/individual_visu.css">
        <title>Visualização Individual</title>
    </head>
    <body>
        <div class="container" id="main">
            <h1 id="title"><img src="../../../public/assets/mat2.png" alt="" class="img-fluid rounded" id="logo-min"> <?php echo $post['title'] ?></h1>
            <h4 class="text-muted"><?php echo $post['created'] ?></h4>
            <!--<p class="lead"><//?php echo $post['content'] ?></p>-->
            <figure>
                <img src="<?php echo $post['image'] ?>" alt="" class="figure-img rounded mx-auto d-block" width="50%">
            </figure>
            <p><?php echo $post['content'] ?></p>
            <div class="d-grid gap-2 col-6 mx-auto">
                <a href="/lista-posts" class="btn btn-lg" id="back">Voltar</a>
            </div>
            
        </div>
        
    </body>
</html>