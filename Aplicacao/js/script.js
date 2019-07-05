
$(document).ready(function () {
    //valida formularios
    $("#formulario").validate({
        errorClass: "my-error-class",
        validClass: "my-valid-class"
    });
});

//seleciona todos checkboxes da tabela de livros seleionados (caixa de livros)
$("#checkbox-livros").click(function () {
    $('input:checkbox').prop('checked', this.checked);
});


//visualisa mensagen de confirmacao
/*$("#formulario").submit(function(event) {
   //alert("dfsdasdad");
    $("#msg-sucesso").removeClass("d-none"); 
});*/