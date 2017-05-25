<!--// LIGAÇÃO À BD -->
<!--require_once('../connections/connection.php');-->

<div class="row">
    <form class="col s12" action="../components/register_control.php" method="post">
        <div class="row">
            <div class="input-field col s6">
                <input id="first_name" type="text" class="validate" name="nome">
                <label for="first_name">Nome</label>
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
                <input id="password_confirmation" type="password" class="validate">
<!--FALTA CONFIRMAR SE A PASSWORD É IGUAL-->
                <label for="password">Confirmação da Password</label>
            </div>
        </div>
        <a class="waves-effect waves-light btn green" type="submit" name="action">Submeter</a>
    </form>
</div>
