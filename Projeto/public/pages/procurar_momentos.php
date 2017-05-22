<!DOCTYPE html>
<html lang="pt">
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <?php include_once "../helpers/meta.php"?>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
    <title>Projeto BioLiving - Index </title>
</head>

<body>

<!--Side Navigation = Menu on Mobile -->
<ul id="slide-out" class="side-nav">
    <li>
        <div class="userView">
            <div class="background">
                <img src="../../images/back.png" style="width: 100%;">
            </div>
            <a href="#"><img class="circle" src="../../images/user.jpg"></a>
            <a href="#"><span class="white-text name">Associação Bioliving</span></a>
            <a href="#"><span class="white-text email">geral.bioliving@gmail.com</span></a>
        </div>
    </li>
    <li><a href="#!"><i class="material-icons">nature_people</i>O Projeto</a></li>
    <li><a href="#!"><i class="material-icons">add_circle</i>Registar Momento</a></li>
    <li><a href="#!"><i class="material-icons">photo_library</i>Momentos Recentes</a></li>
    <li><a href="#!"><i class="material-icons">search</i>Procurar Momentos</a></li>
    <li><a href="#!"><i class="material-icons">local_offer</i>Loja</a></li>
    <li><a href="#!"><i class="material-icons">info</i>Associação BioLiving</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="#"><i class="material-icons">person</i>Perfil</a></li>
    <li><a href="#"><i class="material-icons">directions_walk</i>Logout</a></li>
</ul>

<!--Top Navigation-->
<nav class="nav-extended green">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo center">Título</a>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
        <!--
        Menu on Desktop
                       <ul id="nav-mobile" class="right hide-on-med-and-down">
                           <li><a href="#">O Projeto</a></li>
                           <li><a href="#">Registar Momento</a></li>
                           <li><a href="#">Momentos recentes</a></li>
                           <li><a href="#">Loja</a></li>
                           <li><a href="#">Associação BioLiving</a></li>
                       </ul>
        -->
    </div>


    <!--Tabs/ SubMenus-->
    <div class="nav-content">
        <ul class="tabs tabs-transparent">
            <li class="tab"><a href="#test1">Produtos</a></li>
            <li class="tab"><a href="#test2">Carrinho<span class="new badge green darken-4 white-text"
                                                           data-badge-caption="">4</span></a></li>
            <li class="tab"><a href="#test3">Publicações</a></li>
            <li class="tab"><a href="#test4">Detalhes</a></li>
            <li class="tab"><a href="#test5">Sobre BioLiving/ Projeto</a></li>
            <li class="tab"><a class="active" href="#login">Login/Registo</a></li>
            <!--
                        <li class="tab disabled"><a href="#test3">Disabled Tab</a></li>
                        <li class="tab"><a href="#test4">Test 4</a></li>
            -->
        </ul>
    </div>
</nav>


<!--Page 1 of Tabs/Submenus-->
<div id="test1" class="col s12 min-height">
    <div class="row">
        <div class="col s12 m6 margin-top-10">

            <!-- Dropdown Trigger -->
            <a class='dropdown-button btn white grey-text' style="width: 100%" href='#' data-activates='dropdown1'><i
                    class="material-icons left">filter_list</i>Filtrar por...<i class="material-icons right">keyboard_arrow_down</i></a>

            <!-- Dropdown Structure -->
            <ul id='dropdown1' class='dropdown-content '>
                <li><a href="#!" style="color:grey;">Para doar</a></li>
                <li><a href="#!" style="color:grey;">Para aquisição</a></li>
            </ul>

            <!--Card for content-->
            <div class="card">
                <div class="card-image">
                    <img src="../../images/t-shirt.png">
                </div>
                <div class="card-content">
                    <span>Vestuário</span>
                    <span class="card-title">T-shirt Anéis BioLiving</span>
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                        because I require little markup to use effectively.</p>
                </div>
            </div>

            <!--Card for content-->
            <div class="card">
                <div class="card-image">
                    <img src="../../images/t-shirt2.png">
                </div>
                <div class="card-content">
                    <span>Vestuário</span>
                    <span class="card-title">T-shirt Anéis BioLiving</span>
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                        because I require little markup to use effectively.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Page 2 of Tabs/Submenus-->
<div id="test2" class="col s12 min-height">
    <div class="row">
        <div class="col s12 m6 ">

            <!--Search box-->
            <nav>
                <div class="nav-wrapper green margin-top-10">
                    <form>
                        <div class="input-field">
                            <input id="search" type="search" required>
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</div>

<!--Page 3 of Tabs/Submenus-->
<div id="test3" class="col s12 min-height">
    <div class="row">
        <div class="col s12 m6">

            <!--Card for content-->
            <div class="card">
                <div class="card-image">
                    <img src="../../images/back.png">
                    <a class="btn-floating halfway-fab waves-effect waves-light btn-large"><img class="circle"
                                                                                                src="../../images/user.jpg"></a>
                </div>
                <div class="card-content">
                    <span>19-05-1996 às 23h00</span>
                    <span class="card-title">Nascimento do Francisco</span>
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                        because I require little markup to use effectively.</p>
                    <p>
                        <span><i class="material-icons tiny">favorite</i> 43</span>
                        <span><i class="material-icons tiny">chat</i> 18</span>
                        <span><i class="material-icons tiny">share</i> 5</span>
                    </p>
                </div>
            </div>

            <!--Pagination-->
            <ul class="pagination center">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
            </ul>
        </div>
    </div>
</div>

<!--Page 4 of Tabs/Submenus-->
<div id="test4" class="col s12">

    <!--Galery of pictures-->
    <div class="carousel carousel-slider center" data-indicators="true">
        <div class="carousel-fixed-item center">
        </div>
        <div class="carousel-item  white-text materialboxed"
             style="background-image: url('../../images/back.png'); background-size: cover; background-position: center;">
        </div>
        <div class="carousel-item  white-text materialboxed"
             style="background-image: url('../../images/back.png'); background-size: cover; background-position: center;">
        </div>
        <div class="carousel-item  white-text materialboxed"
             style="background-image: url('../../images/back.png'); background-size: cover; background-position: center;">
        </div>
        <div class="carousel-item  white-text materialboxed"
             style="background-image: url('../../images/back.png'); background-size: cover; background-position: center;">
        </div>
    </div>

    <!--Card of content-->
    <div class="row">
        <div class="col s12 m12">
            <div class="card no-margin-top">
                <div class="card-image">
                </div>
                <div class="card-content">
                    <span>19-05-1996 às 23h00</span>
                    <span class="card-title">Nascimento do Francisco</span>
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                        because I require little markup to use effectively.</p>
                    <a class="waves-effect waves-light btn green"><i class="material-icons left">favorite</i>Gosto</a>
                    <a class="waves-effect waves-light btn grey"><i class="material-icons left">share</i>Partilhar</a>
                    <p class="margin-top-10">
                        <span><i class="material-icons tiny">favorite</i> 43</span>
                        <span><i class="material-icons tiny">chat</i> 18</span>
                        <span><i class="material-icons tiny">share</i> 5</span>
                    </p>
                    <div class="divider"></div>

                    <!--Comments-->
                    <p>Comentários</p>
                    <div class="row">
                        <form class="col s12">
                            <div class="input-field col s3">
                                <img class="circle" src="../../images/user.jpg" style="width: 100%">
                            </div>
                            <div class="input-field col s9">
                                <p>Isto é um exemplo de comentário</p>
                            </div>
                        </form>
                    </div>

                    <!--New comment-->
                    <div class="row">
                        <form class="col s12">
                            <div class="input-field col s3">
                                <img class="circle" src="../../images/user.jpg" style="width: 100%">
                            </div>
                            <div class="input-field col s9">
                                <input placeholder="Escreve um comentário..." id="first_name2" type="text"
                                       class="validate">
                                <!--<label class="active" for="first_name2">First Name</label>-->
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div id="test5" class="col s12">
    <!--Galery of pictures-->
    <div class="carousel carousel-slider center" data-indicators="true">
        <div class="carousel-fixed-item center">
        </div>
        <div class="carousel-item  white-text materialboxed"
             style="background-image: url('../../images/back.png'); background-size: cover; background-position: center;">
        </div>
        <div class="carousel-item  white-text materialboxed"
             style="background-image: url('../../images/back.png'); background-size: cover; background-position: center;">
        </div>
        <div class="carousel-item  white-text materialboxed"
             style="background-image: url('../../images/back.png'); background-size: cover; background-position: center;">
        </div>
        <div class="carousel-item  white-text materialboxed"
             style="background-image: url('../../images/back.png'); background-size: cover; background-position: center;">
        </div>
    </div>

    <!--Card of content-->
    <div class="row">
        <div class="col s12 m12">
            <div class="card no-margin-top">
                <div class="card-image">
                </div>
                <div class="card-content">
                    <span class="card-title">A Associação Bioliving</span>
                    <p>A BioLiving, que tem sede em Frossos, em espaço cedido pela Autarquia, é uma associação que
                        desenvolve atividades e oficinas ligadas à natureza, promove a sustentabilidade e recuperação de
                        áreas florestais. O seu lema é “Natureza e Educação para todos”. A Câmara Municipal de
                        Albergaria-a-Velha, por seu turno, consciente da necessidade em manter uma gestão sustentável do
                        património arbóreo, garantindo a salvaguarda da saúde pública, a mobilidade, a estética urbana e
                        a biodiversidade da floresta, compromete-se a plantar seis árvores por cada uma que seja
                        retirada.</p>
                    <span class="card-title margin-top-10">Título</span>
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                        because I require little markup to use effectively.</p>
                    <div class="divider margin-top-10"></div>
                    <span class="card-title margin-top-10">Título</span>
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                        because I require little markup to use effectively.</p>
                </div>
            </div>
        </div>
    </div>

</div>
<br/>

<div id="login" class="col s12">
    <div class="row">
        <form class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
                <p>
                    <input type="checkbox" class="remember" id="remember" checked="checked"/>
                    <label for="remember">Lembrar-me</label>
                </p>
                <a class="waves-effect waves-light btn green" type="submit" name="action">Entrar</a>
                <a class="waves-effect waves-light btn-flat" type="submit" name="action">Esqueceu-se da password?</a>
            </div>
        </form>
    </div>
</div>

<!--Footer-->
<footer class="page-footer green" style="position: relative; bottom: 0">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer
                    content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2017 Projeto BioLiving
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>
</footer>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../../materialize/js/materialize.min.js"></script>
<script>

    //Initialize jQuer
    $(".button-collapse").sideNav();
    $('.carousel.carousel-slider').carousel({fullWidth: true});
    $(document).ready(function () {
        $('.materialboxed').materialbox();
        Materialize.updateTextFields();
    });

</script>
</body>
</html>