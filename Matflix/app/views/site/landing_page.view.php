<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Matflix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/landing_page.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/css/navbar_footer.css">

     <!--link do font awesome-->
     <script src="https://kit.fontawesome.com/b5c9f282d0.js" crossorigin="anonymous"></script>
  </head>
  <body>
  <?php require('app/views/includes/navbar.php');?>
    <div class="logo">
      <img src="../../../public/img/MatflixLogoText.png" alt="MatFlix" class="logo">
    </div>

      <div class="container">
        <div id="carouselExampleInterval" class="carousel slide carousel-here" data-bs-ride="carousel">
          <div class="carousel-inner carrosseliner">
          <?php foreach ($post_carousel as $post):?>
              <div class="carousel-item <?= $post->id  == $min ? "active" : ""?>" data-bs-interval="10000">
                  <img src="<?=$post->image?>" class="img-caroussel" alt="Imagem da série Better Call Saul">
                  <div class="carousel-caption d-md-block">
                    <form method="POST" action="/lista-posts/post-individual">
                      <input type="hidden" name="id" value="<?= $post->id ?>">
                      <input type="hidden" name="page" value="/landing-page">
                      <input type="submit" class="btn btn-secondary" value="Conheça">
                    </form>
                  </div>
                </div>
                <?php endforeach;?>

           </div>
                
                <div class="botoes">
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden prev">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden next">Next</span>
                  </button>
          </div>
</div>
</div>
      
      
      

<div class="line1 primarr"></div>

<!-- Texto+logo matflix abaixo do carrousel   -->

<div class="ultposts">
    <h1>Confira os últimos posts feitos:</h1>
</div>


<div class="cartas">
    <?php foreach($posts as $post):?>
    <div class="card carta1">
        <img src="<?= $post->image ?>" class="card-img-top" alt="Better Call Saul image">
        <div class="card-body card-corpo">
          <h5 class="card-title titulo-card ellipsis"><?=$post->title?></h5>
          <p class="card-text card-texto ellipsis"><?= $post->content?></p>
           <form method="POST" action="/lista-posts/post-individual">
                      <input type="hidden" name="id" value="<?= $post->id ?>">
                      <input type="hidden" name="page" value="/landing-page">
                      <input type="submit" class="btn btn-primary" value="Veja Mais">
            </form>
        </div>
      </div>
      <?php endforeach;?>

</div>
<?php require('app/views/includes/pagination.php');?>
<!-- Texto+logo spotify abaixo do carrousel   -->
<div class="line1"></div>

<div class="junt-rede-social">
  <div class="texto-rede-social">
      <h1>Escute a trilha sonora de seus filmes e séries preferidas:</h1>
  </div>
  <div class="logo-rede-social">
      <a href="https://open.spotify.com/playlist/60G6IQEwaQs4kkEmBmDSvp?si=d16b8416a1c94629"><img src="../../../public/img/spotify8.png" class="img-fluid"  img-responsive img-thumbnail></a>
  </div>
</div>


<div class="line1"></div>
<!-- Texto+logo discord abaixo do carrousel   -->
<div class="junt-rede-social">

  <div class="texto-rede-social">
      <h1>Entre no nosso Discord e faça parte da comunidade:</h1>
  </div>
  
  <div class="logo-rede-social">
      <a href="https://discord.gg/GZx75HRk"><img src="../../../public/img/discordicon3.png" class="img-fluid"  img-responsive img-thumbnail></a>
  </div>

</div>

<?php require('app/views/includes/footer.php') ?>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>


<!--<div class="carousel-item active" data-bs-interval="2000">
                  <img src="../../../public/img/bettercallsaul3.jpg" class="d-block w-100" alt="Imagem da série Better Call Saul">
                  <div class="carousel-caption d-md-block">
                    <a href="#" class="btn btn-secondary">Conheça</a>
                  </div>
                </div>
                
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../../../public/img/breakingbad.jpg" class="d-block w-100" alt="Imagem da série Breaking Bad">
                    <div class="carousel-caption d-md-block">
                      <a href="#" class="btn btn-secondary">Conheça</a>
                    </div>
                  </div>

                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="../../../public/img/ozark.jpg" class="d-block w-100" alt="Imagem da série Ozark">
                    <div class="carousel-caption d-md-block">
                      <a href="#" class="btn btn-secondary">Conheça</a>
                    </div>
                  </div>

                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="../../../public/img/vinlandsaga3.jpg" class="d-block w-100" alt="Imagem da série Vinland Saga">
                    <div class="carousel-caption d-md-block">
                      <a href="#" class="btn btn-secondary">Conheça</a>
                    </div>
                  </div>

                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="../../../public/img/sandman3.jpg" class="d-block w-100" alt="Imagem da série Sandman">
                    <div class="carousel-caption d-md-block">
                      <a href="#" class="btn btn-secondary">Conheça</a>
                    </div>
                  </div>

                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="../../../public/img/thegrayman.jpg" class="d-block w-100" alt="Imagem da série The gray man">
                    <div class="carousel-caption d-md-block">
                      <a href="#" class="btn btn-secondary">Conheça</a>
                    </div>
                  </div>-!>