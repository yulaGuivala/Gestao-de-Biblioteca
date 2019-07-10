
$(document).ready(function () {
    //valida formularios
    $("#formulario").validate({
        errorClass: "my-error-class",
        validClass: "my-valid-class",
        errorPlacement: function (error, element) {
            if (element.attr("name") == "senha") {
                error.appendTo($("#erro-senha").parent());
            } else if (element.attr("name") == "csenha") {
                error.appendTo($("#erro-csenha").parent());
            } else if (element.attr("id") == "foto-livro") {
                error.appendTo($("#erro-fotoLivro").parent());
            } else {
                error.insertAfter(element);
            }
        }
    });
});

//habilita edicao de perfil
$("#habilitar").click(function () {
    $('input').prop('readonly', false);
    $('#inputEst').prop('disabled', false);
    $('#confirmar').removeClass('d-none');
    $('#cancelar').removeClass('d-none');
    $('#divcs').removeClass('d-none');
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