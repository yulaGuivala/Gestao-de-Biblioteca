//habilita edicao de perfil
$("#habilitar").click(function () {
    $('input').prop('readonly', false);
    $('#confirmar2').removeClass('d-none');
    $('#cancelar').removeClass('d-none');
    $('#habilitar').addClass('d-none');
});