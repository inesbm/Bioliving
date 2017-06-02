<!DOCTYPE html>
<html lang="pt">
<head>
    <!--Import Google Icon Font-->
    <?php include_once "../helpers/fonts.php" ?>
    <!--Import materialize.css-->
    <?php include_once "../helpers/css.php" ?>

    <!--Let browser know website is optimized for mobile-->
    <?php include_once "../helpers/meta.php" ?>
    <title>Projeto BioLiving - Página Modelo</title>
</head>

<body>

<!--Content (colocar aqui o componente)-->
<div class="row">

    <!--Galery of pictures-->
    <div class="carousel carousel-slider center vh100" data-indicators="true">
        <div class="carousel-fixed-item center">
            <a class="btn waves-effect white grey-text darken-text-2">Skip</a>
        </div>
        <div class="carousel-item white-text" href="#one!"
             style="background-image: url('../../images/back2.png'); background-size: cover; background-position: center;">
            <h2>Cria um Momento</h2>
            <p class="white-text">This is your first panel</p>
        </div>
        <div class="carousel-item amber white-text" href="#two!">
            <h2>Second Panel</h2>
            <p class="white-text">This is your second panel</p>
        </div>
        <div class="carousel-item green white-text" href="#three!">
            <h2>Third Panel</h2>
            <p class="white-text">This is your third panel</p>
        </div>
        <div class="carousel-item blue white-text" href="#four!">
            <h2>Fourth Panel</h2>
            <p class="white-text">This is your fourth panel</p>
        </div>
    </div>
</div>

    <!--Import jQuery before materialize.js-->
    <?php include_once "../helpers/jquery_js.php" ?>

</body>
</html>

