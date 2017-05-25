<?php
//Ligação à BD
require_once('../connections/connection.php');

//Registo do utilizador na BD

    $query = "INSERT INTO bioliving_users (nome, apelido, username, email, password) VALUES (?,?,?,?,?)";

    $stmt = mysqli_prepare($link, $query);

    mysqli_stmt_bind_param($stmt, 'sssss', $nome, $apelido, $username, $email, $password);

    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        //	Acção	de	sucesso
        echo "Registo efetuado com sucesso!";
        header('Location: ../pages/info_bioliving.php');
    } else {
        mysqli_stmt_close($stmt);
        //	Acção	de	erro
        echo "Registo inválido.";
    }
?>