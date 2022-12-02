<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/lista_posts.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>
<body>

  <div class="logo">
    <img src="../../../public/img/MatflixLogoText.png" alt="MatFlix" class="logo">
  </div>
  <form action="lista-posts/search" method="POST" class="d-flex barrabranca" role="search">
    <input class="form-control me-2" type="search" name="search" placeholder="Pesquise seus títulos favoritos" aria-label="Search">
    <button class="btn btn-outline-success btn-search botaosearch" type="submit">Pesquisar</button>
  </form>

<div class="items itens">

  <?php foreach($posts as $post): ?>
  <div class="card carta1 page 1" >
    <img src="<?php echo $post['image'] ?>" class="card-img-top" alt="Better Call Saul image" data-filter="Série">
    <div class="card-body corpodocard">
      <h5 class="card-title cardtitulo2"><?php echo $post['title']?></h5>
      <form action="lista-posts/post-individual" method="POST">
        <input type="hidden" name="id" value="<?php echo $post['id'] ?>">
        <input type="submit" class="btn btn-primary botao1" />
      </form>
    </div>
    
  </div>


  <?php endforeach; ?>


</div>
  
 <!-- Carrousel Animações Fim-->
<!--paginação-->

<nav aria-label="Pagenavigationexample" >
  <ul class="pagination justify-content-center barradepag">
    <li class="page-item ">
      <a class="page-link linkdapagina previouss" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item page1"><a class="page-link linkdapagina" href="lista_de_posts.html">1</a></li>
    <li class="page-item page2"><a class="page-link linkdapagina" href="lista_de_posts2.html">2</a></li>
    <li class="page-item page3"><a class="page-link linkdapagina" href="lista_de_posts2.html">3</a></li>
    <li class="page-item page4"><a class="page-link linkdapagina" href="lista_de_posts2.html">4</a></li>
    <li class="page-item page5"><a class="page-link linkdapagina" href="lista_de_posts2.html">5</a></li>
      <a class="page-link  linkdapagina nextt" href="#">Next</a>
    </li>
  </ul>
</nav>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>