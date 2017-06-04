<nav class="nav-extended green">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo center">Procurar</a>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
        <!--
        Menu on Desktop
                       <ul id="nav-mobile" class="right hide-on-med-and-down">
                           <li><a href="#">O Projeto</a></li>
                           <li><a href="#">Registar Momento</a></li>
                           <li><a href="#">Momentos recentes</a></li>
                           <li><a href="#">Loja</a></li>
                           <li><a href="#">Associação BioLiving</a></li>
                       </ul>
        -->
    </div>

    <!--Tabs/ SubMenus-->
<!--    <div class="nav-content">-->
<!--        <ul class="tabs tabs-transparent">-->
<!--            <li class="tab"><a href="#test1">Localização</a></li>-->
<!--            <li class="tab"><a href="#test2">Recentes</a></li>-->
<!--        </ul>-->
<!--    </div>-->
</nav>

<nav>
    <div class="nav-wrapper white">
        <form>
            <div class="input-field">
                <input class="grey-text text-darken-3" id="search" type="search" required value="Inserir o id ou o local" onfocus="apagarvalue()" onblur="reporvalue()">
                <label class="label-icon" for="search"><i class="material-icons grey-text text-darken-3" style="opacity: 2">search</i></label>
            </div>
        </form>
    </div>
</nav>

<script>
    function apagarvalue() {

        document.getElementById('search').value = "";

    }
    function reporvalue() {

        document.getElementById('search').value = "Inserir o id ou o local";

    }
</script>
