<?php
//include_once "../components/register_control.php";
//?>

<!--FORMULÁRIO DE REGISTO-->

<div class="row" xmlns="http://www.w3.org/1999/html">
    <form class="col s12" action="../components/register_control.php" method="post">
        <div class="row">
            <div class="input-field col s6">
                <input id="first_name" type="text" class="validate" name="nome">
                <label for="first_name">Nome</label>
                <span class="green-text">* <?php echo $erro_nome;?></span>
            </div>
            <div class="input-field col s6">
                <input id="last_name" type="text" class="validate" name="apelido">
                <label for="last_name">Apelido</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="username" type="text" class="validate" name="username">
                <label for="username">Username</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" class="validate" name="email">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" class="validate" name="password">
                <label for="password">Password</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password_confirmation" type="password" class="validate" name="cpassword">
<!--FALTA CONFIRMAR SE A PASSWORD É IGUAL-->
                <label for="password">Confirmação da Password</label>
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
