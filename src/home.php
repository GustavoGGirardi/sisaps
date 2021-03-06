<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header('Location: index.html?msg=efetuarlogin');
    }   
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SISAPS - Sistema para Associação de plantas e Sintomas">
    <meta name="language" content="PT-BR">
    <meta name="keywords" content="SISAPS, Plantas, Sintomas, Plantas Medicinais">
    <meta name="Classification" content="Negócios">
    <meta name="author" content="Maicon R Silva, maiconrs95@outlook.com.br">    

    <!-- Bootstrap -->
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">

    <!-- main css -->
    <link rel="icon" href="./img/favico.png" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap-duallistbox.css">
    <link rel="stylesheet" href="./css/animate.css">

    <!-- Font Weasome -->
    <script defer src="./vendor/fontweasome/svg-with-js/js/fontawesome-all.min.js"></script>

    <style>
        #conteudo .img{
            margin-top: 110px;
            background: url('img/sisaps.svg');
            background-repeat: no-repeat;
            opacity: 0.3;   
            width: 100%;
            height: 60vh;
        }
    </style>
    <title>SISAPS</title>
</head>

<body>

    <!-- =========================
        navbar
    ============================== -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light nav-shadow">
        <a id="inicio" class="navbar-brand logo side-nav" href="#">
            <img id="logo_principal" src="./img/sisaps.svg" width="110" height="30">
            <!-- <i class="fas fa-leaf fa-1x"></i>
            <h4 class="d-inline">SISAPS</h4> -->
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                    <a id="home" class="nav-link" href="#">
                        <i class="fas fa-home fa-1x ml-3"></i> Home
                    </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 d-flex">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fas fa-user-circle"></i>&nbsp; <?= $_SESSION['usuario']?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a id="btn-sair" class="dropdown-item" href="#">
                                <i class="fas fa-sign-out-alt"></i> Sair</a>
                        </div>
                    </li>
                </ul>
            </form>
        </div>
    </nav><!-- *** end navbar *** -->


    <!-- =========================
        side nav
    ============================== -->
    <section class="container-fluid">
        <div class="row">

            <div id="sidenav" class="col-md-2 d-none d-md-block" style="background: none;">
                <nav class="col-md-2 sidebar mt-3  animated fadeInLeft">
                    <ul class="nav nav-pills flex-column"> 
                        <li class="nav-item">
                            <span id="adm-section">
                                <a id="novo_usuario" class="nav-link side-nav" href="#">
                                    <i class="fas fa-user-plus"></i>
                                    <span class="hidden-sm-down">Novo usuário</span>
                                </a>
                                <a id="alterar_usuario" class="nav-link side-nav" href="#">
                                    <i class="fas fa-redo-alt"></i>
                                    <span class="hidden-sm-down">Alterar usuário</span>
                                </a>                            
                                <hr>                        
                            </span>
                            <a id="novo_planta" class="nav-link side-nav" href="#">
                                <i class="fab fa-envira"></i>
                                <span class="hidden-sm-down">Cadastrar planta</span>
                            </a>
                            <a id="alterar_planta" class="nav-link side-nav" href="#">
                                <i class="fab fa-pagelines"></i>
                                <span class="hidden-sm-down">Alterar planta</span>
                            </a>
                            <a id="novo_sintoma" class="nav-link side-nav" href="#">
                                <i class="fab fa-medrt"></i>
                                <span class="hidden-sm-down">Cadastrar Sintoma</span>
                            </a>
                            <a id="alterar_sintoma" class="nav-link side-nav" href="#">
                                <i class="fas fa-pills"></i>
                                <span class="hidden-sm-down">Alterar Sintoma</span>
                            </a>
                            <hr>
                            <span id="professor-section">
                                <a id="pendencias" class="nav-link side-nav" href="#">
                                    <i class="fas fa-exclamation-circle"></i>
                                    <span class="hidden-sm-down">Pendências</span>
                                </a>
                            </span>
                            <span id="assistente-section">
                                <a id="revisao_assistente" class="nav-link side-nav" href="#">
                                    <i class="fas fa-exclamation"></i>
                                    <span class="hidden-sm-down">Revisão</span>
                                </a>
                            </span>
                        </li>
                    </ul>
                </nav>
            </div><!-- *** side nav *** -->

            <div id="conteudo" class="col-md-10 mt-5 pb-5">
                <div class="img"></div>
                <div class="row d-flex justify-content-center mt-5 loader" style="display: none;">
                    <div class="col-md-4 mt-5">

                    <!-- <section id="homepad">
                        <div class="row">
                            <div class="card border-dark mb-3" style="max-width: 18rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body text-dark">
                                    <h5 class="card-title">Dark card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="row">
                        <div class="col-md-3">
                            <a id="novo_usuario" class="nav-link side-nav" href="#" data-toggle="tooltip" data-placement="bottom" title="Novo Usuário">
                                <i class="fas fa-user-plus fa-5x"></i>
                            </a>                
                        </div>
                    </div> -->

                    </div>
                </div>
            </div><!-- conteudo -->

        </div>
    </section><!-- *** end container body *** -->


    <!-- =========================
        nav mobile
    ============================== -->
    <footer class="footer d-block d-md-none fixed-bottom">
        <div class="container-fluid">
            <div class="row p-3">
                <div class="col-2 adm-mobile">
                    <a id="novo_usuario" class="nav-link side-nav" href="#" style="padding: 0; margin: 0;">
                        <i class="fas fa-user-plus"></i>
                    </a>
                </div>
                <div class="col-2 adm-mobile">
                    <a id="alterar_usuario" class="nav-link side-nav" href="#" style="padding: 0; margin: 0;">
                        <i class="fas fa-redo-alt"></i>
                    </a>
                </div>
                <div class="col-2">
                    <a id="novo_planta" class="nav-link side-nav" href="#" style="padding: 0; margin: 0;">
                        <i class="fab fa-envira"></i>
                    </a>
                </div>
                <div class="col-2">
                    <a id="alterar_planta" class="nav-link side-nav" href="#" style="padding: 0; margin: 0;">
                        <i class="fab fa-pagelines"></i>
                    </a>
                </div>
                <div class="col-2">
                    <a id="novo_sintoma" class="nav-link side-nav" href="#" style="padding: 0; margin: 0;">
                        <i class="fab fa-medrt"></i>
                    </a>
                </div>
                <div class="col-2">
                    <a id="alterar_sintoma" class="nav-link side-nav" href="#" style="padding: 0; margin: 0;">
                        <i class="fas fa-pills"></i>
                    </a>
                </div>                
                <div class="col-2 professor-mobile">
                    <a id="pendencias" class="nav-link side-nav" href="#" style="padding: 0; margin: 0;">
                        <i class="fas fa-exclamation-circle"></i>
                    </a>
                </div>
                <div class="col-2 assistente-mobile">
                    <a id="revisao_assistente" class="nav-link side-nav" href="#" style="padding: 0; margin: 0;">
                        <i class="fas fa-pen-square"></i>
                    </a>
                </div>                
            </div><!-- row -->
        </div><!-- container -->
    </footer><!-- *** end navbmobile *** -->


    <!-- Bootstrap -->
    <script src="./vendor/jquery/jquery.slim.min.js"></script>
    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/popper/popper.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- main js -->
    <script src="./js/jquery.mask.min.js"></script>
    <script src="./js/removeAcento.js"></script>
    <script src="./js/home.js"></script>
    <script src="./js/controller.js"></script>
    <script src="./js/valida.cpf.js"></script>
    <script src="./js/validaEmail.js"></script>
    <script src="./js/via.cep.js"></script>

    <!-- DASHBOARD -->
    <script src="./js/dashboard/dashboard.js"></script>

    <!-- USUARIO -->
    <script src="./js/novoUsuario.js"></script>
    <script src="./js/consultaUsuario.js"></script>
    <script src="./js/alterarUsuario.js"></script>

    <!-- PLANTAS -->
    <script src="./js/jquery.bootstrap-duallistbox.min.js"></script>
    <script src="./js/sendImage.js"></script>
    <script src="./js/novaPlanta.js"></script>
    <script src="./js/consultaPlanta.js"></script>

    <!-- PENDENCIAS PROFESSOR-->
    <script src="./js/pendenciaProf.js"></script>

    <!-- PENDENCIAS ASSISTENTE -->
    <script src="./js/assistentePendencias.js"></script>

    <!-- SINTOMAS -->
    <script src="./js/novoSintoma.js"></script>
    <script src="./js/consultaSintoma.js"></script>
    <script src="./js/alterarSintoma.js"></script>

    <script src="./js/sair.js"></script>

</body>

</html>