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
    <title>Projeto BioLiving - O Projeto</title>
</head>

<body>

<!--Side Navigation = Menu on Mobile -->
<?php include_once "../components/side_nav.php" ?>

<!--Top Navigation-->
<?php include_once "../components/top_nav_info_project.php" ?>

<!--Content (colocar aqui o componente)-->
<?php include_once "../components/info_project.php" ?>

<!--Footer-->
<?php include_once "../components/footer.php" ?>

<!--Import jQuery before materialize.js-->
<?php include_once "../helpers/jquery_js.php" ?>

<!--Import js -->
<script type="text/javascript" src="../../js/js_costume.js"></script>

</body>
</html>