<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="./img/m3dPNG.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas+Neue">
        <link rel="icon" type="image/x-icon" href="../../../public/assets/m3dPNG.png">
        <link rel="stylesheet" href="../../../public/css/form_post.css">
        <title>Edição de posts</title>
    </head>
    <body>
        <div class="container overflow-hidden main form-modal">
           <img src="../../../public/assets/MatflixLogoText.png" class="img-fluid mx-auto d-block" alt="" id="logo">
           <h2 class="mb-4" id="title">Edição de Post.</h2>
           <form action="POST" class="row gy-3 gx-3 align-items-center mt-2">
                <div class="form-group mb-3">
                    <label for="titulo" class="col-sm-auto col-form-label">Título da Postagem:</label>
                    
                    <input type="text" name="" id="titulo" class="form-control" placeholder="TITULO">
                   
                </div>

                <div class="form-group mb-3">
                    <label for="prim_para" class="col-sm-auto col-form-label">Primeiro Parágrafo:</label>
                    
                    <textarea name="" id="prim_para" cols="3" rows="5" class="form-control" placeholder="PARAGRAFO"></textarea>
                </div>

                <div class="form-group mb-3">
                    <label class="col-sm-auto col-form-label me-5" for="arq">Mídia inclusa:</label>
                    
                    <input type="file" class="custom-file-input form-control" id="arq">

                </div>  
                <div class="col-sm-6">
                    <input type="submit" value="Editar" class="btn btn-lg formbtn form-control"></input>
                </div>
                <div class="col-sm-6">
                    <button class="btn btn-lg formbtn form-control align-self-center col-sm-6">Cancelar</button>
                </div>
           </form>
        </div>
    </body>
</html>