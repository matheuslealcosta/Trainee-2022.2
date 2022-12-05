<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Lista de Usuários</title>

    <!--link do bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <!--link do css-->
    <link rel="stylesheet" href="../../../public/css/listaUsuarios.css">
    <link rel="stylesheet" href="../../../public/css/edit_user_modal.css">
    <link rel="stylesheet" href="../../../public/css/navbar_footer.css">
    <link rel="stylesheet" href="../../../public/css/sidebar.css">
    <link rel="stylesheet" href="../../../public/css/navbar_admin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--link do font awesome-->
    <script src="https://kit.fontawesome.com/b5c9f282d0.js" crossorigin="anonymous"></script>
    
    <!-- link da font utilizada -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>
<body>
    <?php if(isset($error)){
                    echo "<script>alert('$error')
                    window.location.href='/lista-usuarios'</script>";
                        }?>
    <?php require('app/views/includes/navbar_admin.php');?>
    <?php require('app/views/includes/sidebar.php');?>
   <div class="page-container">
 
       <h1>Lista de Usuários</h1>

       <div class="page-content">

        
        <div class="btn-adicionar">
            <button  class="add botao " type="button" data-modal="modalAdd" >Adicionar Usuário</button>
        </div>
        <div class="fade-modal hide" id="fadeModal"></div>
        <div id="modalAdd" class="hide fech">

        <!--Modal Criar Usuário-->
        <div class="modal-header">
            <h2>Criar novo usuário</h2>
            <button1 id="close-modal">X</button1>
        </div>
        <div class="modal-body"></div>

        <form class="modal-create" method="POST" action="/lista-usuarios/create">
            <input type="text" class="input-modal-create" name="name" placeholder="Digite o nome de Usuário" autofocus>
            <input type="text" class="input-modal-create" name="email" placeholder="Digite seu E-mail" autofocus>
            <input type="password" class="input-modal-create" name="password" placeholder="Digite sua Senha">
            <input type="submit" class="input-modal-create" value="Cadastrar">
            
        </form>
        </div>
        <!---->

        
        <!--início da tabela de usuários-->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" class="number">#</th>
                    <th scope="col">Nome Completo</th>
                    <th>E-mail</th>
                    <th scope="col" class="title-acao">Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($users as $user):?>
                <tr>  
                    <th scope="row" class="number"><?= $user->id; ?></th>
                    <td><?= $user->name; ?></td>
                    <td class="email"><?= $user->email; ?></td>
                    <td>
                        <div class="btn-acoes">
                            <button type="button">
                                <i class="fa fa-eye botao" aria-hidden="true" data-modal="modalShow-<?=$user->id?>"></i>
                            </button>
                            <button type="button">
                                <i class="fa fa-trash-o botao" aria-hidden="true" data-modal="modalDelete-<?=$user->id?>"></i>
                            </button>
                            <button type="button">
                                <i class="fa fa-pencil-square-o botao" aria-hidden="true" data-modal="modalEdit-<?=$user->id?>"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                    <!-- Modal Editar Usuário-->


                <div class="modal-user hide d-flex mx-auto justify-content-center main fech" id="modalEdit-<?=$user->id?>">
                        <img src="../../../public/assets/MatflixLogoText.png" class="img-fluid mx-auto d-block" alt="" id="logo">
                        <h2 class="mb-4" id="title">Edição de usuário</h2>
                        <form method="POST" action="/lista-usuarios/edit">
                            <div class="form-group mb-3">
                            <input type="hidden" value="<?=$user->id?>" name="id">
                                <label for="novousuario" class="col-sm-auto col-form-label">Novo nome do usuário:</label>
                                
                                <input type="text" name="name" id="titulo" class="form-control" placeholder="<?=$user->name?>">
                                
                            </div>
            
                            <div class="form-group mb-3">
                                <label for="novoemail" class="col-sm-auto col-form-label">Novo e-mail:</label>
                                
                                <input type="text" name="email" id="email" class="form-control" placeholder="<?=$user->email?>">
                            </div>
            
                            <div class="form-group mb-3">
                                <label for="novasenha" class="col-sm-auto col-form-label">Nova senha:</label>
                                
                                <input type="password"  value="" name="password" class="form-control"/>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="submit" value="Editar" class="btn btn-lg formbtn form-control">
                                </div>
                
                                <div class="col-sm-6">
                                    <input type="reset" value="Limpar" class="btn btn-lg formbtn form-control">
                                </div>
                
                                <div class="botoes">
                                    <input class="btn btn-lg formbtn form-control align-self-center col-sm-6 fechar" type="button" value="Cancelar">
                                </div>
                            </div>
                        </form>
                    </div>
            </div> 
            <tr>
                <!----MODAL EXCLUIR---->
            <div class="modal-user hide d-flex mx-auto overflow-hidden justify-content-center main fech" id="modalDelete-<?=$user->id?>">
                <img src="../../../public/assets/MatflixLogoText.png" class="img-fluid mx-auto d-block" alt="" id="logo">
                <h2 id="title">Deleção de Usuario</h2>
                <p class="lead text-center">Tem certeza que deseja excluir o usuário?</p>
                    <div class="row d-flex justify-content-center">
                        <form action="/lista-usuarios/delete" method="POST">
                            <input type="hidden" value="<?=$user->id?>" name="id">
                            <button type="submit" class="btn btn-lg formbtn col-md-4" >Sim</button>
                            <button type="button" class="btn btn-lg formbtn col-md-4 fechar">Cancelar</button>
                        </form>
                    </div>
                </div>
            
            <!---->
            <!----MODAL VISUALIZAR--->
            <div class="modal-user hide d-flex mx-auto overflow-hidden justify-content-center main fech"id="modalShow-<?=$user->id?>" >
                <img src="../../../public/assets/MatflixLogoText.png" class="img-fluid mx-auto d-block" alt="" id="logo">
                <h2 class="mb-4" id="title">Visualizar Usuário</h2>
                <div class="row gy-3 gx-3 align-items-center mt-2">
                        <div class="form-group mb-3">
                            <label for="usuario" class="col-sm-auto col-form-label">Nome do usuário:</label>
                            
                            <p class=" form showusuario show"><?=$user->name?></p>
                        
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="col-sm-auto col-form-label">E-mail:</label>
                            
                            <p class=" form showemail show"><?=$user->email?></p>
                        </div>

                        <div>
                            <button class="btn btn-lg formbtn form-control align-self-center col-sm-6 fechar">Voltar</button>
                        </div>
            </div>
                </div>
                        <!----->
                        
            <!---->
            </div>
    
            <?php endforeach;?>
            </tbody>
          </table>
        <!--fim da tabela de usuários-->
        <?php require('app/views/includes/pagination.php');?>
       
       </div>  
       <?php require('app/views/includes/footer.php');?>
   </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="../../../public/js/listausuarios.js"></script>
    
</body>
</html>