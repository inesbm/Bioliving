<?php
session_start();
?>

<!--FORMULÁRIO DE LOGIN-->

<div id="login" class="col s12">
    <div class="row">
        <form class="col s12" action="../components/login_control.php" method="post">
            <div class="input-field col s12">
                <input id="email" type="email" class="validate" name="email">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input id="password" type="password" class="validate" name="password">
                <label for="password">Password</label>
            </div>
            <p>
                <input type="checkbox" class="remember" id="remember"/>
                <label for="remember">Lembrar-me</label>
            </p>
            <p class="green-text" id="msg_erro_login">
                    <?php
                    if (isset($_GET['erro']) && $_GET['erro'] == 1) {
                        echo "O email ou password são inválidos!";
                    }
                    ?>
                </p>
            <div class="row">
                <div class="input-field col s12">
                    <input type="submit" name="login_form_submit" id="login_form_submit"
                           class="waves-effect waves-light btn green" value="Entrar">
                </div>
            </div>
            <p>
                <a class="green-text" href='#!'><b>Esqueceu-se da password?</b></a>
            </p>
        </form>
    </div>
</div>
