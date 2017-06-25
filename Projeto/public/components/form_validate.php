<?php

$emModoCriacao = true;

//verificar se estamos em modo de criação
if( strpos( $_SERVER['REQUEST_URI'], "profile_data_control" ) !== false ) {
    echo "Estamos na edicao";
    $emModoCriacao = false;
}


//VALIDAÇÃO DO FORMULÁRIO
//Lista de erros
$GLOBALS['erro'] = [];

//Verifica se o campo nome está preenchido.
validar_nome();

//Verifica se o campo apelido está preenchido.
validar_apelido();

//Verifica se o campo gene está preenchido.
validar_genero();

//Verifica se o campo email está preenchido.
validar_email();

//Verifica se o campo passwords está preenchido.
validar_password($emModoCriacao);

if (!$emModoCriacao) {
    //ALTERAÇÃO DA PASSWORD
    //Verifica se o campo passwords está preenchido.
    validar_password($emModoCriacao);

    //Verifica se o campo nif está preenchido.
    validar_nif();
}


//FUNÇÕES

function validar_nome()
{
    //Verifica se o campo nome está preenchido.
    if (!empty($_POST['nome'])) {
        //Se estiver preenchido, verifica o número de caracteres.
        if ((strlen($_POST['nome'])) > 50) {
            //Erro de excesso de caracteres.
            $GLOBALS['erro'][] = 2;
        }
    }else {
        //Erro de campo vazio.
        $GLOBALS['erro'][] = 1;
    }
}

function validar_apelido()
{
    //Verifica se o campo apelido está preenchido.
    if (!empty($_POST['apelido'])) {
        //Se estiver preenchido, verifica o número de caracteres.
        if ((strlen($_POST['apelido'])) > 50) {
            //Erro de excesso de caracteres.
            $GLOBALS['erro'][] = 4;
        }
    }else {
        //Erro de campo vazio.
        $GLOBALS['erro'][] = 3;
    }
}

function validar_genero()
{
    //Verifica se o campo gene está preenchido.
    if (empty($_POST['genero'])) {
        $GLOBALS['erro'][] = 5;
    }
}

function validar_email()
{
    //Verifica se o campo email está preenchido.
    if (!empty($_POST['email'])) {
        //Se estiver preenchido, verifica o número de caracteres.
        if ((strlen($_POST['email'])) > 200) {
            //Erro de excesso de caracteres.
            $GLOBALS['erro'][] = 8;
        }
    } else {
        //Erro de campo vazio.
        $GLOBALS['erro'][] = 7;
    }
}

function validar_nif() {
    if (!empty($_POST['nif'])) {
        //Se estiver preenchido, verifica se são apenas números
        if (!is_numeric(($_POST['nif']))) {
            //Erro não é número
            $GLOBALS['erro'][] = 17;
        }
        //Verifica o número de caracteres.
        if ((strlen($_POST['nif'])) != 9) {
            //Erro de falta ou excesso de caracteres.
            $GLOBALS['erro'][] = 17;
        }
    }
}

function validar_password($emModoCriacao)
{
    $pass = "";
    $confPass = "";

    //Verifica se o campo passwords está preenchido.
    if (($emModoCriacao && !empty($_POST['password'])) || (!$emModoCriacao && !empty($_POST['new_password']))) {
        if($emModoCriacao){
            $pass = $_POST['password'];
//        $confPass = $_POST['password'];
        } else {
            $pass = $_POST['new_password'];
        }
        //Se estiver preenchido, verifica o número de caracteres.
        if ((strlen($pass)) < 8 || (strlen($pass)) > 12) {
            //Erro de falta ou excesso de caracteres.
            $GLOBALS['erro'][] = 10;
        }

        if (!preg_match("#[0-9]+#", $pass)) {
            $GLOBALS['erro'][] = 11;
        }
        if (!preg_match("#[A-Z]+#", $pass)) {
            $GLOBALS['erro'][] = 12;
        }
        if (!preg_match("#[a-z]+#", $pass)) {
            $GLOBALS['erro'][] = 13;
        }
    }else {
        //Erro de campo vazio.
        $GLOBALS['erro'][] = 9;
    }


    //Verifica se o campo confirmar password está preenchido.
    if (!empty($_POST['cpassword'])) {
        //se estiver preenchido, verifica se é igual ao campo password
        if ($_POST["password"] != $_POST["cpassword"]) {
            $GLOBALS['erro'][] = 15; // erro = 3 -> password e confirmação da password não são iguais
        }
    } else {
        // Erro de campo vazio.
        $GLOBALS['erro'][] = 14;
    }
}