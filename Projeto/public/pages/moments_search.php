<style>

    .controls {
        margin-top: 55px !important;
        border: 1px solid transparent !important;
        border-radius: 2px 0 0 2px !important;
        box-sizing: border-box !important;
        -moz-box-sizing: border-box !important;
        height: 32px !important !important;
        outline: none !important;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3) !important;
    }

    #pac-input {
        background-color: #fff !important;
        font-family: Roboto !important;
        font-size: 15px !important;
        font-weight: 300 !important;
        margin-left: 10px !important;
        padding: 0 11px 0 13px !important;
        text-overflow: ellipsis !important;
        width: 80% !important;
        left: 0px !important;
    }

    #pac-input:focus {
        border-color: #4d90fe;
    }

    .pac-container {
        font-family: Roboto;
    }

    #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
    }

    #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
    }
</style>

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
    <!--Import map.css-->
    <?php include_once "../helpers/map.php" ?>

    <!--Let browser know website is optimized for mobile-->
    <?php include_once "../helpers/meta.php" ?>

    <title>Projeto BioLiving - Procurar Momentos</title>
</head>

<body>

<!--Side Navigation = Menu on Mobile -->
<?php include_once "../components/side_nav.php" ?>

<!--Top Navigation-->
<?php include_once "../components/top_nav_moments_search.php" ?>

<!--Content (Mapa)-->

<div id="map"><?php include_once "../components/map_search.php" ?></div>
<input id="pac-input" class="controls" type="text"
       placeholder="Inserir localização">
<div style="display: none" id="type-selector" class="controls">
    <input type="radio" name="type" id="changetype-all" checked="checked">
    <label for="changetype-all">All</label>

    <input type="radio" name="type" id="changetype-establishment">
    <label for="changetype-establishment">Establishments</label>

    <input type="radio" name="type" id="changetype-address">
    <label for="changetype-address">Addresses</label>

    <input type="radio" name="type" id="changetype-geocode">
    <label for="changetype-geocode">Geocodes</label>
</div>
<div id="teste2"><?php include_once "../components/search_id.php" ?></div>

<!--Footer-->
<?php include_once "../components/footer.php" ?>

<!--Import jQuery before materialize.js-->
<?php include_once "../helpers/jquery_js.php" ?>

</body>
</html>