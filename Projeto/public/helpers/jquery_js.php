<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../../materialize/js/materialize.min.js"></script>
<script>

    //Initialize jQuer
    $(".button-collapse").sideNav();
    $('.carousel.carousel-slider').carousel({fullWidth: true});
    $(document).ready(function () {
        $('.materialboxed').materialbox();
        Materialize.updateTextFields();
    });

    //date-picker
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 100, // Creates a dropdown of 100 years to control year
        max: true
////        yearRange: "1900:2017"
//        min: new Date(1900,1,1),
//        max: new Date(2017,12,31)
//        yearRange: '1930:2010'
//        dateFormat: 'dd/mm/yy',
//        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
//        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
////        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
//        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
//        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
//        nextText: 'Próximo',
//        prevText: 'Anterior'
    });
</script>
