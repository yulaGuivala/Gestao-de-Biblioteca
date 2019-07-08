/////////////// jquery validate /////////////////
$(document).ready(function () {
    //valida formularios
    $("#formulario").validate({
        errorClass: "my-error-class",
        validClass: "my-valid-class"
    });
});

////////////////     PAGINA DE PERFIL ///////////////////
//habilita edicao de perfil
$("#habilitar").click(function () {
    $('input').prop('readonly', false);
    $('#alerta-msg').removeClass('d-none');
    $('#p-msg').hide();
    $('#divcs').removeClass('d-none');
    $('#confirmar2').removeClass('d-none');
    $('#btn-foto').prop('disabled',false);
    $('#cancelar').removeClass('d-none');
    $('#habilitar').addClass('d-none');
});

//muda campo senha de passwor para text (senha)
$("#btn-senha").mouseover(function () {
    $('#senha').prop('type', 'text');
});

//muda campo senha de text para password
$("#btn-senha").mouseout(function () {
    $('#senha').prop('type', 'password');
});

//muda campo senha de passwor para text (senha)
$("#btn-csenha").mouseover(function () {
    $('#csenha').prop('type', 'text');
});

//muda campo senha de text para password
$("#btn-csenha").mouseout(function () {
    $('#csenha').prop('type', 'password');
});


