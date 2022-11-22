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

    <!--link do font awesome-->
    <script src="https://kit.fontawesome.com/b5c9f282d0.js" crossorigin="anonymous"></script>
    
    <!-- link da font utilizada -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>
<body>
    <div>
   <div class="page-container">

       <h1>Lista de Usuários</h1>

       <div class="page-content">

        
        <div class="btn-adicionar">
            <button  class="add botao " type="button" id="open-modal">Adicionar Usuário</button>
        </div>
        <div id="fade" class="hide"></div>
        <div id="modal" class="hide">

        <!--Modal Criar Usuário-->
        <div class="modal-header">
            <h2>Criar novo usuário</h2>
            <button1 id="close-modal">X</button1>
        </div>
        <div class="modal-body"></div>

        <form class="modal-create">
            <input type="text" class="input-modal-create" name="nome" placeholder="Digite o nome de Usuário" autofocus>
            <input type="text" class="input-modal-create" name="nome" placeholder="Digite seu nome completo" autofocus>
            <input type="text" class="input-modal-create" name="E-mail" placeholder="Digite seu E-mail" autofocus>
            <input type="password" class="input-modal-create" name="senha" placeholder="Digite sua Senha">
            <input type="submit" class="input-modal-create" value="Cadastrar">
        </form>
        </div>

        <!-- Modal Editar Usuário-->

        <div class="fader hide" id="fade_edit"></div>
        <div class="modal-user hide d-flex mx-auto overflow-hidden justify-content-center main" id="modalEdit">
                <img src="../../../public/assets/MatflixLogoText.png" class="img-fluid mx-auto d-block" alt="" id="logo">
                <h2 class="mb-4" id="title">Edição de usuário</h2>
                <form action="POST">
                     <div class="form-group mb-3">
                         <label for="novousuario" class="col-sm-auto col-form-label">Novo nome do usuário:</label>
                         
                         <input type="text" name="" id="titulo" class="form-control">
                        
                     </div>
     
                     <div class="form-group mb-3">
                         <label for="novoemail" class="col-sm-auto col-form-label">Novo e-mail:</label>
                         
                         <input type="text" name="" id="email" class="form-control">
                     </div>
     
                     <div class="form-group mb-3">
                         <label for="novasenha" class="col-sm-auto col-form-label">Nova senha:</label>
                         
                         <input type="password"  value="" name="myPassword" class="form-control"/>
                     </div>
                     <div class="form-group row">
                        <div class="col-sm-6">
                            <input type="submit" value="Editar" class="btn btn-lg formbtn form-control">
                        </div>
        
                        <div class="col-sm-6">
                            <input type="reset" value="Limpar" class="btn btn-lg formbtn form-control">
                        </div>
        
                        <div class="botoes">
                            <input class="btn btn-lg formbtn form-control align-self-center col-sm-6" type="button" value="Cancelar">
                        </div>
                    </div>
                </form>
            </div>
    </div>
        </div>
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
                <tr>
                    <th scope="row" class="number">1</th>
                    <td>Murilo Lopes da Silva</td>
                    <td class="email">murilo.lopes@gmail.com</td>
                    <td>
                        <div class="btn-acoes">
                            <button type="button">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                            <button type="button">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                            <button type="button">
                                <i class="fa fa-pencil-square-o" aria-hidden="true" data-modal="modalEdit"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="number">2</th>
                    <td>Vitória Jesus</td>
                    <td class="email">vitoria.jesus@gmail.com</td>
                    <td>
                        <div class="btn-acoes">
                            <button type="button">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                            <button type="button">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                            <button type="button">
                                <i class="fa fa-pencil-square-o" aria-hidden="true" data-modal="modalEdit"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="number">3</th>
                    <td>Eloah Lima</td>
                    <td class="email">eloah.lima@gmail.com</td>
                    <td>
                        <div class="btn-acoes">
                            <button type="button">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                            <button type="button">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                            <button type="button">
                                <i class="fa fa-pencil-square-o" aria-hidden="true" data-modal="modalEdit"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="number">4</th>
                    <td>Sophie Teixeira</td>
                    <td class="email">sophie.teixeira@outlook.com</td>
                    <td>
                        <div class="btn-acoes">
                            <button type="button">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                            <button type="button">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                            <button type="button">
                                <i class="fa fa-pencil-square-o" aria-hidden="true" data-modal="modalEdit"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="number">5</th>
                    <td>João Farias</td>
                    <td class="email">joao.farias@gmail.com</td>
                    <td>
                        <div class="btn-acoes">
                            <button type="button">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                            <button type="button">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                            <button type="button">
                                <i class="fa fa-pencil-square-o" aria-hidden="true" data-modal="modalEdit"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="number">6</th>
                    <td>Ana Julia Porto</td>
                    <td class="email">julia.porto@outlook.com</td>
                    <td>
                        <div class="btn-acoes">
                            <button type="button">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                            <button type="button">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                            <button type="button">
                                <i class="fa fa-pencil-square-o" aria-hidden="true" data-modal="modalEdit"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
          </table>
        <!--fim da tabela de usuários-->

       </div>
   
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="..\..\..\public\js\modal_create_user.js" defer></script>
    <script src="../../../public/js/modal_edit_user.js"></script>
</body>
</html>