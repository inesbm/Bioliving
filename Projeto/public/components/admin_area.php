<!--<div class="row">-->
<!--    <div class="col s12 m6 ">-->
<!--        <!--Search box-->
<!--        <div class="input-field col s12">-->
<!--            <i class="material-icons prefix">search</i>-->
<!--            <input type="text" id="autocomplete-input" class="autocomplete">-->
<!--            <label for="autocomplete-input">Utilizador</label>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<div class="row">
    <form class="col s12 m12">
        <div class="card">
            <div class="card-content">
                <?php

                // Condição Avatar

                //if (isset($_SESSION['user'])) {
                //$genero = $_SESSION['genero'];
                //if ($genero == "f") {
                //$avatar = "avatar_woman.png";
                //} else {
                //$avatar = "avatar_man.png";
                //}
                //}

                // Ligação à BD 
                require_once('../connections/connection.php');

                // Definir a query
                $query = "SELECT nome, apelido, id_user FROM users ORDER BY nome, apelido ASC";

                // Extrair dados da BD 
                $result = mysqli_query($link, $query);

                // Mostrar dados
                while ($row_result = mysqli_fetch_assoc($result)) {

                    //Variáveis
                    $nome = $row_result["nome"];
                    $apelido = $row_result["apelido"];
                    $id_user = $row_result["id_user"];

                    echo "
                        <div class=\"row\">
                            <ul class=\"collection\">
                                <li class=\"collection-item avatar\">
                                    <img src=\"../../images/imagem1.png\" alt=\"\" class=\"circle\">
                                    <span class=\"title\">$nome $apelido</span>
                                    <div class=\"switch\">
                                        <label>
                                            Normal
                                                <input type=\"checkbox\">
                                                <span class=\"lever\"></span>
                                            Administrador
                                        </label>
                                    </div>
                                    <a href=\"../components/admin_area_delete_user.php?id=$id_user\" class=\"secondary-content\"><i class=\"material-icons green-text\">close</i></a>
				                </li>
				            </ul>
                        </div>
";
                }
                // Fechar ligação à BD 
                mysqli_close($link);

                ?>
            </div>
        </div>
    </form>
</div>