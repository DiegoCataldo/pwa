(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();


$('.datepicker').pickadate({
    // Escape any “rule” characters with an exclamation mark (!).
    format: 'yyyy-mm-dd',
    formatSubmit: 'yyyy-mm-dd',
    hiddenPrefix: 'prefix__',
    hiddenSuffix: '__suffix'
})

$('#input_starttime').pickatime({});

// Material Select




// stepper 

$(document).ready(function() {
    $('.stepper').mdbStepper();

    $('.mdb-select').materialSelect({});
    var check = $("input[type=checkbox]");
    var check;
    check.data('checked', 0);
    check.prop('indeterminate', true);
    check.prop('checked', false);
    console.log('false');
    check.prop('value', 0);



    $('#seleccionar').on("change", function(event) {
        var value = $('#seleccionar').val();

        if (value === '' || value === null) {

            return;
        } else {
            var pos = $("#ultimaPosicion").val();
            var textoActual = $("#txtAreaPreviewMensaje").val();
            var textoInsertar = value;
            textoInsertar = '* ' + textoInsertar;
            var output = `${textoActual} \r\n ${textoInsertar}`;
            $("#txtAreaPreviewMensaje").val(output);
            $("#txtAreaPreviewMensaje").focus();
        }
    });

    $('#txtAreaPreviewMensaje').blur(function() {
        var end = $('#txtAreaPreviewMensaje').prop('selectionEnd');
        $('ultimaPosicion').val(end);
    });

})



function someFunction21() {
    setTimeout(function() {
        $('#horizontal-stepper').nextStep();
    }, 2000);
}
/////////////// CHECKBOX /////////////////

var $check = $("input[type=checkbox]");
var el;

$check.data('checked', 0).on('click', function() {

    el = $(this);

    switch (el.data('checked')) {

        case 0:
            el.data('checked', 2);
            el.prop('indeterminate', false);
            el.prop('checked', true);
            el.prop('value', 1);
            console.log('true');
            break;

        case 1:
            el.data('checked', 0);
            el.prop('indeterminate', true);
            el.prop('checked', false);
            console.log('false');
            el.prop('value', 0);
            break;

        default:
            el.data('checked', 1);
            el.prop('indeterminate', false);
            el.prop('checked', false);
            console.log('false');
            el.prop('value', 2);
    }
});



///////////////////// OTROS SENSORES (OBSERVACIONES) ////////////////

function sensoresOnChange() {

    var m_ecod = $('#m_ecod').val();

    if (m_ecod == "COMB") {

        divC = document.getElementById("divCOMB");
        divC.style.display = "";

        divT = document.getElementById("divANDA");
        divT.style.display = "none";
        divT = document.getElementById("div5");
        divT.style.display = "none";
        divT = document.getElementById("divLSC");
        divT.style.display = "none";
        divT = document.getElementById("divTLH");
        divT.style.display = "none";
        divT = document.getElementById("divMIN");
        divT.style.display = "none";
        divC = document.getElementById("divPC");
        divC.style.display = "none";


    } else if (m_ecod == "ANDA") {

        divC = document.getElementById("divANDA");
        divC.style.display = "";

        divT = document.getElementById("divCOMB");
        divT.style.display = "none";
        divT = document.getElementById("div5");
        divT.style.display = "none";
        divT = document.getElementById("divLSC");
        divT.style.display = "none";
        divT = document.getElementById("divTLH");
        divT.style.display = "none";
        divT = document.getElementById("divMIN");
        divT.style.display = "none";
        divC = document.getElementById("divPC");
        divC.style.display = "none";

    } else if (m_ecod == "5") {

        divC = document.getElementById("div5");
        divC.style.display = "";

        divT = document.getElementById("divCOMB");
        divT.style.display = "none";
        divT = document.getElementById("divANDA");
        divT.style.display = "none";
        divT = document.getElementById("divLSC");
        divT.style.display = "none";
        divT = document.getElementById("divTLH");
        divT.style.display = "none";
        divT = document.getElementById("divMIN");
        divT.style.display = "none";
        divC = document.getElementById("divPC");
        divC.style.display = "none";

    } else if (m_ecod == "LSC") {

        divC = document.getElementById("divLSC");
        divC.style.display = "";

        divT = document.getElementById("divCOMB");
        divT.style.display = "none";
        divT = document.getElementById("divANDA");
        divT.style.display = "none";
        divT = document.getElementById("div5");
        divT.style.display = "none";
        divT = document.getElementById("divTLH");
        divT.style.display = "none";
        divT = document.getElementById("divMIN");
        divT.style.display = "none";
        divC = document.getElementById("divPC");
        divC.style.display = "none";

    } else if (m_ecod == "TLH") {

        divC = document.getElementById("divTLH");
        divC.style.display = "";

        divT = document.getElementById("divCOMB");
        divT.style.display = "none";
        divT = document.getElementById("divANDA");
        divT.style.display = "none";
        divT = document.getElementById("div5");
        divT.style.display = "none";
        divT = document.getElementById("divLSC");
        divT.style.display = "none";
        divT = document.getElementById("divMIN");
        divT.style.display = "none";
        divC = document.getElementById("divPC");
        divC.style.display = "none";

    } else if (m_ecod == "MIN") {

        divC = document.getElementById("divMIN");
        divC.style.display = "";

        divT = document.getElementById("divCOMB");
        divT.style.display = "none";
        divT = document.getElementById("divANDA");
        divT.style.display = "none";
        divT = document.getElementById("div5");
        divT.style.display = "none";
        divT = document.getElementById("divLSC");
        divT.style.display = "none";
        divT = document.getElementById("divTLH");
        divT.style.display = "none";
        divC = document.getElementById("divPC");
        divC.style.display = "none";

    } else if (m_ecod == "PC") {

        divC = document.getElementById("divPC");
        divC.style.display = "";

        divT = document.getElementById("divCOMB");
        divT.style.display = "none";
        divT = document.getElementById("divANDA");
        divT.style.display = "none";
        divT = document.getElementById("div5");
        divT.style.display = "none";
        divT = document.getElementById("divLSC");
        divT.style.display = "none";
        divT = document.getElementById("divTLH");
        divT.style.display = "none";
        divT = document.getElementById("divMIN");
        divT.style.display = "none";

    } else {

        divT = document.getElementById("divCOMB");
        divT.style.display = "none";
        divT = document.getElementById("divANDA");
        divT.style.display = "none";
        divT = document.getElementById("div5");
        divT.style.display = "none";
        divT = document.getElementById("divLSC");
        divT.style.display = "none";
        divT = document.getElementById("divTLH");
        divT.style.display = "none";
        divT = document.getElementById("divMIN");
        divT.style.display = "none";
        divC = document.getElementById("divPC");
        divC.style.display = "none";
    }
}



function comprueboCheck(id) {

    var checkbox = document.getElementById(id);
    var label = document.getElementById(id + 'Label');


    switch (checkbox.dataset.numero) {

        case "0":
            checkbox.dataset.numero = "2";
            checkbox.value = "true";
            label.className = "check";

            break;
        case "1":
            checkbox.dataset.numero = "0";
            checkbox.value = "indeterminate";
            label.className = "indeterminate";

            break;
        case "2":
            label.className = "false";
            checkbox.value = "false";
            checkbox.dataset.numero = "1";

            break;
    }

}