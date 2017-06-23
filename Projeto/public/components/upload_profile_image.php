<?php
session_start();

require_once "../connections/connection.php";

//$target_dir = "uploads/";
//$target_dir = "http://labmm.clients.ua.pt/deca_16L4/deca_16L4_03/IIS_tmp/";
$target_dir = "../../../../IIS_tmp/img_perfil/";

if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}
$target_file = $target_dir . $_SESSION['user_id']. ".jpg";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Verifica se o ficheiro é ou não uma imagem
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["upload_profile_image"]["tmp_name"]);
    if($check !== false) {
        echo "O ficheiro é uma imagem - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "O ficheiro não é uma imagem.";
        $uploadOk = 0;
    }
}

//// Verifica se o ficheiro já existe
//if (file_exists($target_file)) {
//    echo "O ficheiro já existe.";
//    $uploadOk = 0;
//}

// Verifica o tamanho do ficheiro
//para ficheiros de 140px por 140px cada terá 58800bytes
if ($_FILES["upload_profile_image"]["size"] > 58800) {
    echo "O ficheiro é demasiado grande.";
    $uploadOk = 0;
}

// Verifica os tipos de ficheiro permitidos
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Apenas são permitidos ficheiros dos formatos JPG, JPEG, PNG e GIF.";
    $uploadOk = 0;
}
// Verifica se o $uploadOk está no estado 0 de um erro
if ($uploadOk == 0) {
    echo "O ficheiro não foi carregado.";

// Se estiver ok, tenta fazer o upload do ficheiro
} else {

    if (move_uploaded_file($_FILES["upload_profile_image"]["tmp_name"], $target_file)) {
        echo "O ficheiro ". basename( $_FILES["upload_profile_image"]["name"]). " foi carregado com sucesso.";
    } else {
        echo "Houve um erro ao carregar a imagem.";
    }
}
?>