<!--// LIGAÇÃO À BD -->
<!--require_once('../connections/connection.php');-->

<div id="register" class="col s12">
    <div class="row">
        <form class="col s12">
            <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
            </div>
            <p>
                <input type="checkbox" class="remember" id="remember" checked="checked"/>
                <label for="remember">Lembrar-me</label>
            </p>
            <a class="waves-effect waves-light btn green" type="submit" name="action">Entrar</a>
            <a class="waves-effect waves-light btn-flat" type="submit" name="action">Esqueceu-se da password?</a>
        </form>
    </div>
</div>
