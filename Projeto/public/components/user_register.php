<?php
//include_once "../components/register_control.php";
//?>

<?php


// if(count($_GET[])>0){
    $url = parse_url($_SERVER['REQUEST_URI']);
    parse_str($url['query'], $query);

    for($n=0; $n<count($query); $n++){  // PROVISÓRIO
        echo $query[$n]."<br>";
    }

 // Variáveis dos nomes

    $campo_nome = "";
    $campo_apelido = "";
    $campo_username = "";
    $campo_email = "";
    $campo_password = "";
    $campo_cpassword = "";

// Verifica quais são os erros comunicados através do URL

// CAMPO NOME
if (in_array("1", $query)){
    $campo_nome = "O campo está vazio. Por favor, preencha-o.";
}
if (in_array("2", $query)){
    $campo_nome = "O limite de caracteres para este campo é 50).";
}
// CAMPO APELIDO
if (in_array("3", $query)){
    $campo_apelido = "O campo está vazio. Por favor, preencha-o.";
}
if (in_array("4", $query)){
    $campo_apelido = "O limite de caracteres para este campo é 50.";
}
// CAMPO USERNAME
if (in_array("5", $query)){
    $campo_username = "O campo está vazio. Por favor, preencha-o.";
}
if (in_array("6", $query)){
    $campo_username = "O limite de caracteres para este campo é 20.";
}
// CAMPO EMAIL
if (in_array("7", $query)){
    $campo_email = "O campo email está vazio. Por favor, preencha-o.";
}
if (in_array("8", $query)){
    $campo_email = "O limite de caracteres deste campo é 100.";
}
// CAMPO PASSWORD
if (in_array("9", $query)){
    $campo_password = "O campo password está vazio. Por favor, preencha-o.";
}
if (in_array("10", $query)){
    $campo_password = "A password deve ter entre 8 e 12 caracteres.";
}
if (in_array("11", $query)){
    $campo_password = "A password deve conter algarismos e letras maiúsculas e minúsculas.";
}
if (in_array("12", $query)){
    $campo_password = "A password deve conter algarismos e letras maiúsculas e minúsculas.";
}
if (in_array("13", $query)){
    $campo_password = "A password deve conter algarismos e letras maiúsculas e minúsculas.";
}
// CAMPO CONFIRMAR PASSWORD
if (in_array("14", $query)){
    $campo_cpassword = "O campo email está vazio. Por favor, preencha-o.";
}
if (in_array("15", $query)){
    $campo_cpassword = "Os valores introduzidos nos campos password e confirmar password não são iguais.";
}

?>

<!--FORMULÁRIO DE REGISTO-->

<div class="row" xmlns="http://www.w3.org/1999/html">
    <form class="col s12" action="../components/register_control.php" method="post">
        <div class="row">
            <div class="input-field col s6">
                <input id="first_name" type="text" class="validate" name="nome">
                <label for="first_name">Nome</label>
                <span class="green-text"><?= $campo_nome ?></span>
            </div>
            <div class="input-field col s6">
                <input id="last_name" type="text" class="validate" name="apelido">
                <label for="last_name">Apelido</label>
                <span class="green-text"><?= $campo_apelido ?></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="username" type="text" class="validate" name="username">
                <label for="username">Username</label>
                <span class="green-text"><?= $campo_username ?></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" class="validate" name="email">
                <label for="email">Email</label>
                <span class="green-text"><?= $campo_email ?></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" class="validate" name="password">
                <label for="password">Password</label>
                <span class="green-text"><?= $campo_password ?></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password_confirmation" type="password" class="validate" name="cpassword">
<!--FALTA CONFIRMAR SE A PASSWORD É IGUAL-->
                <label for="password">Confirmação da Password</label>
                <span class="green-text"><?= $campo_cpassword ?></span>
            </div>
        </div>
<!--        <p class="green-text" id="msg_validacao_registo">-->
<!--            --><?php
//            if (isset($_GET['validacao']) && $_GET['validacao'] == 1) {
//                echo "Registo efetuado com sucesso!";
//            }
//            if (isset($_GET['validacao']) && $_GET['validacao'] == 2) {
//                echo "Registo não efetuado.";
//            }
//            ?>
<!--        </p>-->
        <div class="row">
            <div class="input-field col s12">
                <input type="submit" name="register_form_submit" id="register_form_submit" class="waves-effect waves-light btn green" value="Submeter">
            </div>
        </div>
    </form>
</div>
