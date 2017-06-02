<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <!--Import Google Icon Font-->
    <?php include_once "../helpers/fonts.php" ?>
    <!--Import materialize.css-->
    <?php include_once "../helpers/css.php" ?>

    <!--Let browser know website is optimized for mobile-->
    <?php include_once "../helpers/meta.php" ?>
    <title>Projeto BioLiving - Perfil</title>
</head>

<body>

<!--Side Navigation = Menu on Mobile -->
<?php include_once "../components/side_nav.php" ?>

<!--Top Navigation-->
<?php include_once "../components/top_nav_profile.php" ?>

<!--Content (colocar aqui o componente)-->
<div class="row">
    <div class="col s12 m12">
        <div id="test1" class="col s12">
            <?php include_once "../components/profile_personal_data.php" ?>
        </div>
        <div id="test2" class="col s12">
            <?php include_once "../components/my_moments.php"?>
        </div>
    </div>
</div>

<!--Footer-->
<?php include_once "../components/footer.php" ?>

<!--Import jQuery before materialize.js-->
<?php include_once "../helpers/jquery_js.php" ?>

</body>
</html>