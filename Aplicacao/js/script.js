
$(document).ready(function () {
    //valida formularios
    $("#formulario").validate({
        errorClass: "my-error-class",
        validClass: "my-valid-class"
    });
});

//habilita edicao de perfil
$("#habilitar").click(function () {
    $('input').prop('readonly', false);
    $('#inputEst').prop('disabled', false);
    $('#confirmar').removeClass('d-none');
    $('#cancelar').removeClass('d-none');
    $('#habilitar').addClass('d-none');
});

//seleciona todos checkboxes da tabela de livros seleionados (caixa de livros)
$("#checklivros").click(function () {
    alert("ssssss");
    $('input:checkbox').prop('checked', this.checked);
});

    


//visualisa mensagen de confirmacao
/*$("#formulario").submit(function(event) {
   //alert("dfsdasdad");
    $("#msg-sucesso").removeClass("d-none"); 
});*/