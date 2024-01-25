$("#si").click(function(){
    showOptions();
})
$("#no").click(function(){
    hideOptions();
})


function showOptions() {
    const options = document.getElementById('options');
    options.style.display = 'block';
}

function hideOptions() {
    const options = document.getElementById('options');
    options.style.display = 'none';
    options.value = '';

}

$(document).ready(function() {
    $("#btnBuscar").click(function() {
        var numerosol = document.getElementById("solicitud").value;

        $.ajax({
            type: 'POST',
            data: {
                'numerosol': numerosol
            },
            url: 'http://localhost/archivo/controller/controlTipo.controller.php',
            success: function(res) {
                $("#resultado").html(res);
                // obtengo los elementos de input
                var input1 = document.getElementById('codSol');
                var input3 = document.getElementById('codUsu');

                var input2 = document.getElementById('txtnumsolicitud');
                var input4 = document.getElementById('idusuario');

                // se copia los valores
                input2.value = input1.value;
                input4.value = input3.value;
            },
            error: function(err) {
                console.log("Error");
                $("#resultado").html("error");
            }
        });
    });

    $.ajax({
        type: 'POST',
        data: '',
        url: 'http://localhost/archivo/controller/mostrarNotario.controller.php',
        success: function(res) {
            $("#options").html(res);
        },
        error: function(err) {
            console.log("Error");
            $("#options").html("error");
        }
    });
});