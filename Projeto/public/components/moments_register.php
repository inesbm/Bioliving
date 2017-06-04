<?php
// Ligação à BD 
require_once('../connections/connection.php');
?>

<!--Card of content - Form for moments register-->
<div class="row">
    <form class="col s12 m12" action="../components/moments_register_control.php" method="post">

        <div class="card">
            <div class="card-content">
                <span class="card-title">1. Identificação</span>
                <p></p>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="moment_name" name="moment_name" data-error="<?= $moment_name ?>" data-success="right"
                               type="text" class="validate">
                        <label for="moment_name">Nome do Momento</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="moment_date" name="moment_date" type="date" data-error="<?= $moment_date ?>"
                               data-success="right" class="validate datepicker">
                        <label for="moment_date">Data</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="moment_story" name="moment_story" data-error="wrong" data-success="right"
                                  class="materialize-textarea validate" data-length="500" ></textarea>
                        <label for="moment_story">História</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <span class="card-title">2. Planeamento</span>

                <div class="row">
                    <div class="input-field col s12" disabled>
                        <select id="local" name="local">
                            <optgroup label="Área 1">
                                <option value="1">Local 1</option>
                                <option value="2">Local 2</option>
                            </optgroup>
                            <optgroup label="Área 2">
                                <option value="3">Local 3</option>
                                <option value="4">Local 4</option>
                            </optgroup>
                        </select>
                        <label>Local</label>
                    </div>
                </div>
                <!--<a href="tree_details.php">árvore 1</a>-->
                <div class="row">
                    <div class="input-field col s8">
                        <select class="icons" id="tree_list" name="tree_list">
                            <option value="0" disabled selected class="grey-text">Selecionar espécie</option>
                            <option value="1" data-icon="../../images/álamo.PNG" class="circle">Álamo</option>
                            <option value="2" data-icon="../../images/carvalho.PNG" class="circle">Carvalho</option>
                            <option value="3" data-icon="../../images/cedro.PNG" class="circle">Cedro</option>

                        <?php
/*
                            // Definir a query
                            $query = "SELECT id_arvores, nome, imagem FROM arvores";

                            // Extrair dados da BD 
                            $result = mysqli_query($link, $query);

                            // Mostrar dados
                            while ($row_result = mysqli_fetch_assoc($result)) {

                                $id_arvores = $row_result["id_arvores"];
                                $nome = $row_result["nome"];
                                $imagem = $row_result["imagem"];

                                echo "<option value=\" . $id_arvores . \" data-icon=\"../../images/ . $imagem . \" class=\"circle\">" . $nome .
                            "</option>";

                            }

                            // Fechar ligação à BD 
                            mysqli_close($link);

                            */?>

                        </select>
                    </div>
                    <div class="input-field col s4">
                        <input id="tree_number" name="tree_number" data-error="wrong" data-success="right"
                               type="text" class="validate" value="01">
                        <label for="tree_number">Quantidade</label>
                        <!--    <input type="number" min="1" max="18" step="1" value="1" name="numero">-->
                    </div>
                    <span class="grey-text"><i class="material-icons tiny">warning</i> Disponível consoante a espécie escolhida</span>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <p>Selecione o seu Kit de plantação</p>
                    </div>
                    <div class="input-field col s12">
<!--                        <p>
                            <input name="group1" type="radio" id="test1" />
                            <label for="test1">kit 1 (placa entregue em casa)</label>
                        </p>
-->
                        <p>
                            <input name="group1" type="radio" id="test2" />
                            <label for="test2">kit 1 (arvore + placa entregue em casa)</label>
                        </p>
                        <p>
                            <input name="group1" type="radio" id="test3"  />
                            <label for="test3">kit 2 (arvore + placa + plantação)</label>
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <span class="card-title">3. Pagamento</span>
                <ul class="collection">
                    <li class="collection-item avatar">
                        <img src="../../images/imagem1.png" alt="" class="circle">
                        <span class="title">Árvore 1</span>
                        <p> detalhes 1
                            <br>
                            preço: 10.00€
                        </p>
                        <a href="#!" class="secondary-content"><i
                                    class="material-icons">close</i></a>
                    </li>
                </ul>
                <div class="row">
                    <div class="input-field col s12">
                        Total: 10.00€ (1 item)
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="submit" name="moment_register_form_submit"
                       id="moment_register_form_submit"
                       class="waves-effect waves-light btn green" value="Confirmar">
            </div>
        </div>
    </form>
</div>