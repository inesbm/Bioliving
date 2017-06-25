<?php
//Conversão do URL numa lista.
$query = [];

$url = parse_url($_SERVER['REQUEST_URI']);

if (isset($url['query'])) {
    parse_str($url['query'], $query);
}

//Conversão do URL numa lista.
$query = [];

$url = parse_url($_SERVER['REQUEST_URI']);

if (isset($url['query'])) {
    parse_str($url['query'], $query);
}

//// ERROS
//
//// Variáveis para guardar as mensagens de erro
//$campo_nome = "";
//$campo_apelido = "";
//$campo_genero = "";
//$campo_email = "";
//$campo_password = "";
//$campo_cpassword = "";

//// Atribuição das mensagens às variáveis das mensagens de erro, de acordo com os erros comunicados no URL.
//
//// CAMPO NOME
//if (in_array("1", $query)){
//    $campo_nome = "O campo está vazio. Por favor, preencha-o.";
//}
//if (in_array("2", $query)){
//    $campo_nome = "O limite de caracteres para este campo é 50).";
//}
//// CAMPO APELIDO
//if (in_array("3", $query)){
//    $campo_apelido = "O campo está vazio. Por favor, preencha-o.";
//}
//if (in_array("4", $query)){
//    $campo_apelido = "O limite de caracteres para este campo é 50.";
//}
//// CAMPO GÉNERO
//if (in_array("5", $query)){
//    $campo_genero = "Por favor, selecione o género.";
//}// CAMPO EMAIL
//if (in_array("7", $query)){
//    $campo_email = "O campo email está vazio. Por favor, preencha-o.";
//}
//if (in_array("8", $query)){
//    $campo_email = "O limite de caracteres deste campo é 100.";
//}
//// CAMPO PASSWORD
//if (in_array("9", $query)){
//    $campo_password = "O campo password está vazio. Por favor, preencha-o.";
//}
//if (in_array("10", $query)){
//    $campo_password = "A password deve ter entre 8 e 12 caracteres.";
//}
//if (in_array("11", $query)){
//    $campo_password = "A password deve conter algarismos e letras maiúsculas e minúsculas.";
//}
//if (in_array("12", $query)){
//    $campo_password = "A password deve conter algarismos e letras maiúsculas e minúsculas.";
//}
//if (in_array("13", $query)){
//    $campo_password = "A password deve conter algarismos e letras maiúsculas e minúsculas.";
//}
//// CAMPO CONFIRMAR PASSWORD
//if (in_array("14", $query)){
//    $campo_cpassword = "O campo confirmar password está vazio. Por favor, preencha-o.";
//}
//if (in_array("15", $query)){
//    $campo_cpassword = "Os valores introduzidos nos campos password e confirmar password não são iguais.";
//}
//if (in_array("16", $query)){
//    $campo_cpassword = "Por favor, volte a preencher o campo confirmar password.";
//}
//// CAMPO NIF
//if (in_array("17", $query)) {
//    $campo_nif = "O NIF deve ter entre 9 algarismos.";
//}
//
////Registo inválido. Se o registo for inválido (informação que vem no URL), a variável $registo = "invalido".
//$registo = "";
//if (isset($_GET['registo'])) {
//    $registo = "Registo inválido. O email escolhido já foi utilizado anteriormente."; // Em princípio, esse é o problema. (Mas esta solução deve ser alterada.)
//    $campo_cpassword = "Por favor, volta a preencher os campos password e confirmar password.";
//}
//
////Variáveis para guardar os valores preenchidos nos campos de formulário após uma submissão incorreta
//$nome = "";
//$apelido = "";
//$genero = "";
//$email = "";
//$cpassword = "";
//
////var_dump($_SESSION);
////
////if (isset($_SESSION['registo'])) {
////    $nome = $_SESSION['nome'];
////    $apelido = $_SESSION['apelido'];
////    $email = $_SESSION['email'];
////}

?>

<!--Avatar-->
<div id="profile_photo" class="col s12">
    <div class="row">
        <?php
        if (isset($_SESSION['user'])) {
            $genero = $_SESSION['genero'];
            $email = $_SESSION['user'];
            $user_id = $_SESSION['user_id'];
            $result = "";

            //verificar se imagem existe
            $target_dir = "../../../../IIS_tmp/img_perfil/";
            $avatar_path = $target_dir.$user_id.".jpg";
            if (file_exists($avatar_path)) {
                //aplicar imagem perfil;
            }
            else{
                //aplicar imagem default
                if ($genero == "m") {
                    $avatar_path = "../../images/avatar_man.png";
                } else {
                    $avatar_path = "../../images/avatar_woman.png";
                }
            }

            echo "
                    <div class=\"userView\">
                        <img src=\"$avatar_path\" class=\"circle\" height=\"100px\">
                    </div>
                ";
        }
        ?>
        <form action="../components/upload_profile_image.php" method="post" enctype="multipart/form-data">
            <div id="personal_data" class="input-field-photo">
                <div class="btn-floating btn waves-effect waves-light green file-field">
                    <i class="material-icons">mode_edit</i>
                    <input type="file" name="upload_profile_image" id="upload_profile_image" onchange="this.form.submit()">
                </div>
            </div>
        </form>
    </div>
</div>

<p class="green-text" id="msg_erro_upload_img_perfil">
    <?php
    if (isset($_GET['erro'])) {
        if ($_GET['erro'] == 1) {
            echo "Houve um erro ao carregar a imagem.";
        }
        if ($_GET['erro'] == 2) {
            echo "O ficheiro não foi carregado porque é demasiado grande.";
        }
        if ($_GET['erro'] == 3) {
            echo "Apenas são permitidos ficheiros dos formatos JPG e JPEG.";
        }
        if ($_GET['erro'] == 4) {
            echo "O ficheiro não é uma imagem.";
        }
    }
    ?>
</p>

<div class="divider col s12">
    <div class="row"></div>
</div>

<form class="col s12" action="../components/profile_data_control.php" method="post">
    <div id="profile_data" class="col s12">
        <div class="row">

                <?php
                // Ligação à BD 
                require_once('../connections/connection.php');

                $campo_nome = "";
                $campo_apelido = "";
                $campo_email = "";
                $campo_new_password = "";
                $campo_c_password = "";
                $campo_nif = "";

                // Definir a query
                $query = "SELECT nome, apelido, genero, email, data_nascimento, rua, numero_porta, andar, codigo_postal, cidade, contribuinte FROM users WHERE email=?";
                $result = mysqli_prepare($link, $query);
                // Extrair dados da BD 
                mysqli_stmt_bind_param($result, 's', $email);
                mysqli_stmt_execute($result);
                mysqli_stmt_bind_result($result, $nome, $apelido, $genero, $email, $data_nascimento, $rua, $numero_porta, $andar, $codigo_postal, $cidade, $nif);

                if (mysqli_stmt_fetch($result)) {
                    //Variáveis
                    $nome_BD = $nome;
                    $apelido_BD = $apelido;
                    $genero_BD = $genero;
                    $email_BD = $email;
                    $data_nascimento_BD = $data_nascimento;
                    $nif_BD = $nif;
                    $rua_BD = $rua;
                    $numero_porta_BD = $numero_porta;
                    $andar_BD = $andar;
                    $codigo_postal_BD = $codigo_postal;
                    $cidade_BD = $cidade;

//                    $_SESSION['user_id'] =

                    mysqli_stmt_close($result);

                    echo "
            <div class=\"input-field col s6\">
                <input id=\"first_name\" type=\"text\" class=\"validate\" name=\"nome\" value=\"$nome_BD\">
                <label for=\"first_name\">Nome</label>
                <span class=\"green-text\"><?= $campo_nome ?></span>
            </div>
            <div class=\"input-field col s6\">
                <input id=\"last_name\" type=\"text\" class=\"validate\" name=\"apelido\" value=\"$apelido_BD\">
                <label for=\"last_name\">Apelido</label>
                <span class=\"green-text\"><?= $campo_apelido ?></span>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"input-field col s12\">
                <input id=\"email\" type=\"email\" class=\"validate\" name=\"email\" value=\"$email_BD\">
                <label for=\"email\">Email</label>
                <span class=\"green-text\"><?= $campo_email ?></span>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"input-field col s12\">
                <input id=\"password\" type=\"password\" class=\"validate\" name=\"atual_password\">
                <label for=\"password\">Atual Password</label>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"input-field col s12\">
                <input id=\"new_password\" type=\"password\" class=\"validate\" name=\"new_password\">
                <label for=\"new_password\">Nova Password</label>
                <span class=\"green - text\"><?= $campo_new_password ?></span>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"input-field col s12\">
                <input id=\"password_confirmation\" type=\"password\" class=\"validate\" name=\"c_password\">
                <label for=\"password_confirmation\">Confirmação da Password</label>
                <span class=\"green - text\"><?= $campo_c_password ?></span>
            </div>
        </div>
    </div>

    <div class=\"divider col s12\">
        <div class=\"row\"></div>
    </div>

    <div id=\"profile_data_others\" class=\"col s12\">
        <div class=\"row\">
            <div class=\"input-field col s12\">
                <input id=\"calendar\" type=\"text\" class=\"datepicker\" name=\"data_nascimento\" value=\"$data_nascimento_BD\">
                <label for=\"calendar\">Data de Nascimento</label>
            </div>
        </div>
    </div>

    <div class=\"divider col s12\">
        <div class=\"row\"></div>
    </div>

    <div class=\"row\">
            <div class=\"input-field col s12\">
                <input id=\"nif\" type=\"text\" class=\"validate\" name=\"nif\" value=\"$nif_BD\">
                <label for=\"nif\">NIF</label>
                <span class=\"green - text\"><?= $campo_nif ?></span>
            </div>
    </div>

    <div class=\"divider col s12\">
        <div class=\"row\"></div>
    </div>

    <div id=\"user_address\" class=\"col s12\">
        <div class=\"row\">
            <div class=\"input-field col s12\">
                <input type=\"text\" class=\"validate\" id=\"rua\" name='rua' value=\"$rua_BD\">
                <label for=\"rua\">Rua</label>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"input-field col s6\">
                <input type=\"text\" class=\"validate\" id=\"n_porta\" name='numero_porta' value=\"$numero_porta_BD\">
                <label for=\"n_porta\">N.º Porta</label>
            </div>
            <div class=\"input-field col s6\">
                <input type=\"text\" class=\"validate\" id=\"andar\" name='andar' value=\"$andar_BD\">
                <label for=\"andar\">Andar</label>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"input-field col s6\">
                <input type=\"text\" class=\"validate\" id=\"cod_postal\" name='codigo_postal' value=\"$codigo_postal_BD\">
                <label for=\"cod_postal\">Código Postal</label>
            </div>
            <div class=\"input-field col s6\">
                <input type=\"text\" class=\"validate\" id=\"cidade\" name='cidade' value=\"$cidade_BD\">
                <label for=\"cidade\">Cidade</label>
            </div>
        </div>
    </div>
    ";
        }
        ?>
<div class="row">
    <div class="input-field col s6 center">
        <input type="submit" name="change_profile_data" id="change_profile_data"
               class="waves_effect waves_light btn changes-btn green" value="Alterar">
    </div>
    <div class="input-field col s6 center">
        <a href="../pages/moments.php" id="cancel_changes_profile_data" class="waves_effect waves_light btn changes-btn
        green">Cancelar</a>
    </div>
</div>

</form>