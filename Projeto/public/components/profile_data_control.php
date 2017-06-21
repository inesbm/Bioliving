<?php
session_start();

//Ligação à BD
require_once('../connections/connection.php');

$user_id = $_SESSION['user_id'];

//Verificação se o campo da password não está preenchido
if ($_POST['new_password'] === '') {
    //Registo do utilizador na BD

    $query = "UPDATE users SET nome=?,apelido=?,email=?,data_nascimento=?,rua=?,numero_porta=?,andar=?,
    codigo_postal=?,cidade=? WHERE id_user=$user_id";

    echo "entrei no if === ''";

    $stmt = mysqli_prepare($link, $query);

//definição das variáveis
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
//$genero = $_POST['genero'];
    $email = $_POST['email'];
    //$password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
    $data_nascimento = $_POST['data_nascimento'];
    $rua = $_POST['rua'];
    $numero_porta = $_POST['numero_porta'];
    $andar = $_POST['andar'];
    $codigo_postal = $_POST['codigo_postal'];
    $cidade = $_POST['cidade'];

    mysqli_stmt_bind_param($stmt, 'sssssssss', $nome, $apelido, $email, $data_nascimento, $rua,
        $numero_porta, $andar, $codigo_postal, $cidade);

    echo "nome = $nome, apelido = $apelido, email = $email, data nascimento = $data_nascimento,
     rua = $rua, número porta = $numero_porta, andar = $andar, cód. postal = $codigo_postal, cidade = $cidade";
}


//verificação se o campo da password está preenchido
//elseif ((password_hash($_POST['password'], PASSWORD_DEFAULT)) != '') {
else {
    $query = "UPDATE users SET nome=?,apelido=?,email=?,password=?,data_nascimento=?,rua=?,numero_porta=?,andar=?,
    codigo_postal=?,cidade=? WHERE id_user=$user_id";

$stmt = mysqli_prepare($link, $query);

    echo "entrei no else != ''";

//definição das variáveis
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
//$genero = $_POST['genero'];
$email = $_POST['email'];
$password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
$data_nascimento = $_POST['data_nascimento'];
$rua = $_POST['rua'];
$numero_porta = $_POST['numero_porta'];
$andar = $_POST['andar'];
$codigo_postal = $_POST['codigo_postal'];
$cidade = $_POST['cidade'];

mysqli_stmt_bind_param($stmt, 'ssssssssss', $nome, $apelido, $email, $password, $data_nascimento, $rua,
    $numero_porta, $andar, $codigo_postal, $cidade);

    echo "nome = $nome, apelido = $apelido, email = $email, pass = $password, data nascimento = $data_nascimento,
     rua = $rua, número porta = $numero_porta, andar = $andar, cód. postal = $codigo_postal, cidade = $cidade";
}


if (mysqli_stmt_execute($stmt)) {
    mysqli_stmt_close($stmt);
    //	Registo válido.

//    session_unset();

    $_SESSION['user'] = $email;
    $_SESSION['nome'] = $nome;
    $_SESSION['apelido'] = $apelido;
    $_SESSION['genero'] = $genero;
    $_SESSION['role'] = $role;
    //$_SESSION['data_nascimento'] = $data_nascimento;
    $_SESSION['data_nascimento'] = strftime('%Y-%m-%d', strtotime($result[0]->startdate));
    $_SESSION['rua'] = $rua;
    $_SESSION['numero_porta'] = $numero_porta;
    $_SESSION['andar'] = $andar;
    $_SESSION['codigo_postal'] = $codigo_postal;
    $_SESSION['cidade'] = $cidade;
    $_SESSION['registo']='valido';

    header('Location: ../pages/moments.php');
}
else {
    mysqli_stmt_close($stmt);
    // Registo inválido.

    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['apelido'] = $_POST['apelido'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['registo']='invalido';

//    header('Location: ../pages/profile.php?atualizacao=invalida');
}

//printf("Error #%d: %s.\n", mysqli_stmt_errno($stmt), mysqli_stmt_error($stmt));

//mysqli_stmt_execute($stmt);