
<!--Card of content-->
<div class="row">
    <form class="col s12 m12">
        <p>Pretende que a Bioliving plante a árvore? (Custo adicional)</p>

        <div class="card">
            <div class="card-content">
                <span class="card-title">1. Identificação</span>
                <p></p>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="last_name" data-error="wrong" data-success="right" type="text" class="validate">
                        <label for="last_name">Nome do Momento</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="date" data-error="wrong" data-success="right" class="datepicker">
                        <label for="date">Data</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea1" data-error="wrong" data-success="right"
                                  class="materialize-textarea" data-length="500"></textarea>
                        <label for="textarea1">História</label>
                    </div>
                </div>
                <span class="card-title">2. Planeamento</span>

                <div class="row">
                    <div class="input-field col s12" disabled>
                        <select id="source" name="source">
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
                <a href="tree_details.php">árvore 1</a>
                <div class="row">
                    <div class="input-field col s8">
                        <select class="icons" id="status" name="status">
                            <option value="" disabled selected class="grey-text">Escolher espécie</option>
                            <option value="" data-icon="../../images/imagem1.png" class="circle">árvore 1</option>
                            <option value="" data-icon="../../images/imagem1.png" class="circle">árvore 2</option>
                            <option value="" data-icon="../../images/imagem1.png" class="circle">árvore 3</option>
                        </select>
                    </div>
                    <div class="input-field col s4">
                        <input id="last_name" data-error="wrong" data-success="right" type="text" class="validate" disabled>
                        <label for="last_name">Quantidade</label>
                        <!--    <input type="number" min="1" max="18" step="1" value="1" name="numero">-->
                    </div>
                    <span class="grey-text"><i class="material-icons tiny">warning</i> Disponível consoante a espécie escolhida</span>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <p>Pretende que a Bioliving plante a árvore? (Custo adicional)</p>
                    </div>
                    <div class="input-field col s12">
                        <!-- Switch -->
                        <div class="switch">
                            <label>
                                Não
                                <input type="checkbox">
                                <span class="lever"></span>
                                Sim
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <span class="card-title margin-top-10">3. Pagamento</span>
                        <ul class="collection">
                            <li class="collection-item avatar">
                                <img src="../../images/imagem1.png" alt="" class="circle">
                                <span class="title">Árvore 1</span>
                                <p> detalhes 1
                                    <br>
                                    preço: 10.00€
                                </p>
                                <a href="#!" class="secondary-content"><i class="material-icons">close</i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="input-field col s12">
                        Total: 10.00€ (1 item)
                    </div>
                </div>
                <div class="row">
                    <a class="waves-effect waves-light btn center green">Confirmar</a>
                </div>
            </div>

        </div>
    </form>
</div>