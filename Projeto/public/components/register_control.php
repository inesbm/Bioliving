<?php
//Ligação à BD
require_once('../connections/connection.php');

//VALIDAÇÃO

//ERROS: 0 = campo vazio, 1 = excesso de caracteres;
//OUTROS ERROS (password): 2 = campos com valores diferentes; 3 = falta ou excesso de caracteres; 4 = não contém nenhum número; 5 = não contém nenhuma letra maiúscula; 6 = não contém nenhuma letra minúscula

$erro = [];

//verifica se o campo nome está preenchido
if (!empty($_POST['nome'])) {
    //se estiver preenchido, verifica o número de caracteres
    if ((strlen($_POST['nome'])) > 50) {
        //erro excesso de caracteres
        $erro[] = 1;
    }
}else {
        //campo nome estar vazio
        $erro[] = 2;
}

if (!empty($_POST['apelido'])) {
    //se estiver preenchido, verifica o número de caracteres
    if ((strlen($_POST['apelido'])) > 50) {
        //erro excesso de caracteres
        $erro[] = 3;
    }
}else {
        //campo apelido estar vazio
        $erro[] = 4;
}

if (!empty($_POST['username'])) {
    //se estiver preenchido, verifica o número de caracteres
    if ((strlen($_POST['username'])) > 20) {
        //erro excesso de caracteres
        $erro[] = 5;
    }
} else {
        //campo username estar vazio
        $erro[] = 6;
}

if (!empty($_POST['email'])) {
    //se estiver preenchido, verifica o número de caracteres
    if ((strlen($_POST['email'])) > 100) {
        //erro excesso de caracteres
        $erro[] = 7;
    }
} else {
        //campo email estar vazio
        $erro[] = 8;
}

if (!empty($_POST['password'])) {
    //se estiver preenchido, verifica o número de caracteres
    if ((strlen($_POST['password'])) < 8 || (strlen($_POST['password'])) > 12) {
        //erro por falta ou excesso de caracteres
        $erro[] = 9;
    }
}
    /*elseif(!preg_match("#[0-9]+#",$password)) {
        $erro_password = 3;
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        $erro_password = 4;
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        $erro_password = 5;
    }*/
    else {
        //campo password estar vazio
        $erro[] = 10;
}

if (!empty($_POST['cpassword'])) {
    //se estiver preenchido, verifica se é igual ao campo password
    if ($_POST["password"] != $_POST["cpassword"]) {
        $erro[] = 11; // erro = 3 -> password e confirmação da password não são iguais
    }
}
else {
        $erro[] = 12;
}

var_dump($erro);

$erro_query_string = http_build_query($erro);

if(count($erro)==0) {
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
        header('Location: ../pages/info_bioliving.php');
    } else {
        mysqli_stmt_close($stmt);
        //	Acção	de	erro
        //echo "Registo inválido.";
        //header('Location: ../pages/login_register.php?validacao=2');
    }
}
else{
    header('Location: ../pages/login_register.php?'.$erro_query_string);
}

?>