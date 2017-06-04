<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../../materialize/js/materialize.min.js"></script>
<script>

    //Initialize jQuery
    $(".button-collapse").sideNav();
    $('.carousel.carousel-slider').carousel({fullWidth: true});
    $(document).ready(function () {
        $('.materialboxed').materialbox();
        Materialize.updateTextFields();
    });
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 100, // Creates a dropdown of 100 years to control year
        max: true
    });
    $(document).ready(function() {
        $('select').material_select();
    });
    $('#textarea1').trigger('autoresize');
    $('select').material_select('destroy');

//Search Box Admin Area
    $('input.autocomplete').autocomplete({
        data: {
            $nome: null,
            $apelido: null
        },
        limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
        onAutocomplete: function(val) {
            // Callback function when value is autcompleted.
        },
        minLength: 1 // The minimum length of the input for the autocomplete to start. Default: 1.
    });
</script>

