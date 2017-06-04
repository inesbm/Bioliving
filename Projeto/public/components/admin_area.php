<div class="row">
    <div class="col s12 m6 ">
        <!--Search box-->
        <nav>
            <div class="nav-wrapper green margin-top-10">
                <form>
                    <div class="input-field">
                        <input id="search" type="search" required>
                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                </form>
            </div>
        </nav>
    </div>
</div>


<div class="row">
    <form class="col s12 m12">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Utilizadores</span>

                <?php
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
                                    <a href=\"admin_area_delete_user.php\" class=\"secondary-content\"><i class=\"material-icons\">close</i></a>
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