<!--Avatar-->
<div id="profile_photo" class="col s12">
    <div class="row">
        <div class="userView">
            <img src="../../images/user.jpg" class="circle" height="100px" ">
        </div>
        <div id="personal_data" class="input-field-photo">
            <div class="btn-floating btn waves-effect waves-light green file-field">
                <i class="material-icons">mode_edit</i>
                <input type="file">
            </div>
        </div>
    </div>
</div>

<div class="divider col s12">
    <div class="row"></div>
</div>

<form class="col s12" action="../components/profile_data_control.php" method="post">
    <div id="profile_data" class="col s12">
        <div class="row">
            <div class="input-field col s6">
                <input id="first_name" type="text" class="validate" name="nome" value="<?php $nome_BD ?>">
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
                <label for="password">Atual Password</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password_confirmation" type="password" class="validate" name="new_password">
                <!--FALTA CONFIRMAR SE A PASSWORD É IGUAL-->
                <label for="password">Nova Password</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password_confirmation" type="password" class="validate" name="cpassword">
                <!--FALTA CONFIRMAR SE A PASSWORD É IGUAL-->
                <label for="password">Confirmação da Password</label>
            </div>
        </div>
    </div>

    <div class="divider col s12">
        <div class="row"></div>
    </div>

    <div id="profile_data_others" class="col s12">
        <div class="row">
            <div class="input-field col s12">
                <input type="date" class="datepicker" id="calendar">
                <label for="birthdate">Data de Nascimento</label>
            </div>
        </div>
    </div>

    <div class="divider col s12">
        <div class="row"></div>
    </div>

    <div id="user_address" class="col s12">
        <div class="row">
            <div class="input-field col s12">
                <input type="text" class="validate" id="rua">
                <label for="address">Rua</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input type="text" class="validate" id="n_porta">
                <label for="n_porta">N.º Porta</label>
            </div>
            <div class="input-field col s6">
                <input type="text" class="validate" id="andar">
                <label for="andar">Andar</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input type="text" class="validate" id="cod_postal">
                <label for="cod_postal">Código Postal</label>
            </div>
            <div class="input-field col s6">
                <input type="text" class="validate" id="cidade">
                <label for="cidade">Cidade</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6 center">
            <input type="submit" name="change_profile_data" id="change_profile_data"
                   class="waves-effect waves-light btn changes-btn green" value="Alterar">
        </div>
        <div class="input-field col s6 center">
            <input type="submit" name="cancel_changes_profile_data" id="cancel_changes_profile_data"
                   class="waves-effect waves-light btn changes-btn green" value="Cancelar">
        </div>
    </div>
</form>
