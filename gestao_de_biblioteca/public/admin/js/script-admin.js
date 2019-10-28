/////////////// jquery validate /////////////////
$(document).ready(function () {
    //valida formularios
    $("#formulario").validate({
        errorClass: "my-error-class",
        validClass: "my-valid-class",
        errorPlacement: function(error, element) {
            if(element.attr("name") == "senha") {
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

//cria datatable em pt
dataTablePt('#tabela-dados');
dataTablePt('#tabela-dados2');

//seleciona todos checkboxes da tabela
$("#selecionar").click(function () {
    $('input:checkbox').prop('checked', this.checked);
});

