<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Lista de Posts</title>

    <!--link do bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <!--link do css-->
    <link rel="stylesheet" href="../../../public/css/listadeposts_admin.css">
    <link rel="icon" type="image/x-icon" href="../../../public/assets/m3dPNG.png">
    <!--link do font awesome-->
    <script src="https://kit.fontawesome.com/b5c9f282d0.js" crossorigin="anonymous"></script>
    
    <!-- link da font utilizada -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>
<body>
   <div class="page-container">

    <h1><img src="../../../public/assets/mat2.png" alt="" class="img-fluid rounded m-2" id="logo-min">Lista de Posts</h1>

       <div class="page-content">
           
        <div class="btn-adicionar">
            <button  class="add botao " type="button" data-modal="modalnewpost" id="botaoAbrir">Adicionar Postagem  +</button>
        </div>
        <!--início da tabela de posts-->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" class="number">#</th>
                    <th scope="col">Postagem</th>
                    <th scope="col">Data da Postagem</th>
                    <th scope="col" class="title-acao">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($posts as $post):?>
                <tr>
                    <th scope="row" class="number"><?=$post->id;?></th>
                    <td><?=$post->title;?></td>
                    <td><?=$post->created;?></td>
                    <td>
                        <div class="btn-acoes ">
                            <i class="fa fa-eye  botao " aria-hidden="true" data-modal="visualisarPost" > </i>
                            <i class="fa fa-trash-o  botao" aria-hidden="true" data-modal="excluirPost"></i>
                            <i class="fa fa-pencil-square-o botao " aria-hidden="true" data-modal="editarPost"></i>
                        </div>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
          </table>
        <!--fim da tabela de posts-->
        
   
   </div>
</div>
<div class="container-modal">

<!-- modal de esdição de post-->
<div class="fade-modal hide" id="fadeModal"></div>
<div class="container hide modal" id="editarPost">
    <img src="../../../public/assets/MatflixLogoText.png" class="img-fluid mx-auto d-block" alt="Logo da Matflix" id="logo">
    <h2 class="mb-4" id="title">Edição de Post</h2>
    <form action="" class="row gy-3 gx-3 align-items-center mt-2">
         <div class="form-group">
             <label for="titulo" class="col-sm-auto col-form-label">Título da Postagem:</label>
             
             <input type="text" name="title" id="titulo" class="form-control" placeholder="TITULO">
            
         </div>

         <div class="form-group">
             <label for="prim_para" class="col-sm-auto col-form-label">Primeiro Parágrafo:</label>
             
             <textarea name="content" id="prim_para" name="content" cols="3" rows="5" class="form-control" placeholder="PARAGRAFO"></textarea>
         </div>

         <div class="form-group">
             <label class="col-sm-auto col-form-label me-5" for="arq">Mídia inclusa:</label>
             
             <input type="file" name="image" class="custom-file-input form-control" id="arq">

         </div>  
         <div class="col-sm-6">
             <input type="submit" value="Editar" class="botao btn btn-lg formbtn form-control"></input>
         </div>
         <div class="col-sm-6">
            <button class="btn btn-lg formbtn form-control align-self-center col-sm-6 cancc cancelar" id="Cancel" >Cancelar</button>         </div>
    </form>
</div>
<!--*******************-->

   <!-- modal de criação de post-->
   <div class="container hide modal" id="modalnewpost">
    <img src="../../../public/assets/MatflixLogoText.png" class="img-fluid mx-auto d-block" alt="" id="logo">
    <h2 class="mb-4" id="title">Criação de Post</h2>
    <form  class="row gy-3 gx-3 align-items-center mt-2" action="lista-posts/create" method="POST">
         <div class="form-group row mb-3">
             <label for="titulo" class="col-sm-auto col-form-label">Título da Postagem:</label>
             <div class="col-sm-7">
                 <input type="text" name="title" id="titulo" class="form-control">
             </div>
         </div>

         <div class="form-group row mb-3">
             <label for="prim_para" class="col-sm-auto col-form-label">Primeiro Parágrafo:</label>
             <div class="col-sm-7">
                 <textarea name="content" id="prim_para" cols="3" rows="5" class="form-control"></textarea>
             </div>
         </div>

         <div class="input-group mb-3 row">
             <label class="col-sm-auto col-form-label me-5" for="arq">Enviar mídia:</label>
             <div class="col-sm-7">
                 <input type="file" name="image" class="custom-file-input form-control" id="arq">
             </div>
         </div>  
         <div class="col-sm-6">
             <input type="submit" value="Criar" class="btn btn-lg formbtn form-control"></input>
         </div>

         <div class="col-sm-6">
             <input type="reset" value="Limpar" class="btn btn-lg formbtn form-control"></input>
         </div>

         <div>
             <button class="btn btn-lg formbtn form-control align-self-center col-sm-6 cancc cancelar" id="Cancel" >Cancelar</button>
         </div>
    </form>
 </div>
 <!--*******************-->

 <!-- modal de visualização de post-->
 
 <!--*******************-->

 
 <!-- modal de excluir de post-->
 
 <!--*******************-->
</div>

</div>

   <script src ="../../../public/js/listadeposts_admin.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>



