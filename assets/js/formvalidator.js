jQuery(function ($) {
    $.validator.addMethod("alphabetsnspace", function(value, element) {
          return this.optional(element) || /^[a-zA-ZÀ-ú' ]*$/.test(value);
      });

  $("#formContact").validate({
    rules: {
       nome: {
        alphabetsnspace: true,
        minlength: 2,
        maxlength: 15,
        required: true

       },
       sobrenome: {
        required: true,
        minlength: 3,
        maxlength: 20,
        alphabetsnspace: true
       },
       email: {
        required: true,
        email: true
       },
       celular: {
        required: true,
        minlength: 15
       },
       mensagem: {
        required: true,
        maxlength: 1500
       }
    },
    messages:{
       nome: {
        required:"Por favor, informe seu nome",
        alphabetsnspace: "Por favor, apenas letras"
       },
       sobrenome: {
        required:"Por favor, informe seu sobrenome",
        alphabetsnspace: "Por favor, apenas letras"
       },
       email: {
        required:"Por favor, informe seu e-mail para contato"
       },
       celular: {
        required:"Por favor, informe seu número de celular",
        minlength:"Por favor, insira 11 dígitos (somente números)"
       }
      }
  })
});
$("#celular").mask("(00) 00000-0000");
