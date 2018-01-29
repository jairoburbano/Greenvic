(function ( $ ) {
    $.validator.addMethod("customemail",
        function(value, element) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(value);
        },
        "Tu correo no es válido"
    );
    /**
     * Validación del formulario usando jQuery Validate
     */
    function validacionFormulario() {
        var formContainer   = $('.form--contact');
        formContainer.each(function() {
            var $this       = $(this),
                form        = $this,
                formBox     = $this.find('.group'),
                formSubmit  = $this.find('.send-group input');
            $('<div class="loading"><span class="bounce1"></span><span class="bounce2"></span><span class="bounce3"></span></div>').appendTo($this);
            $('<div class="message content"></div>').appendTo($this);
            form.validate({
                rules: {
                    username: "required",
                    usermail: {
                        required: true,
                        customemail: true
                    },
                    userphone: {
                        required: true,
                        number: true,
                        minlength: 8
                    },
                    usertext: {
                        required : true,
                        minlength: 20
                    },
                },
                messages: {
                    username: "Usa solo letras.",
                    usermail: {
                        required: "Ingresa un e-mail válido.",
                        email: "E-mail no válido"
                    },
                    userphone: {
                        required: "Usa solo números. ",
                        number: "Teléfono no válido",
                        minlength: "Ingresa al menos 8 caracteres."
                    },
                    usertext: {
                        required: "Ingresa al menos 20 caracteres.",
                        minlength: "Ingresa al menos 20 caracteres."
                    }
                },
                errorElement: 'span',
                errorClass: 'form__error',
                validClass: 'form__valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parents(formBox).addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parents(formBox).removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
//                    $this.find('.loading').css({opacity: 0}).animate({opacity: 1});
                    formSubmit.val('Enviando...');
                    formSubmit.prop('disabled', true);
                    var formURL = form.attr("action");

                    var formData = new FormData(form[0]);

                    $.ajax( {
                        url: formURL,
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        fail: function(result) {
                            form.find('.message').addClass('form__error').html('<h2>Ocurrió un problema y el mensaje no fue enviado.</h2><p>Por favor intenta de nuevo.</p>').slideDown().delay(3000).slideUp(300, function() {
                                $(this).removeClass('form__error');
                            });
                        },
                        success: function(result) {
                            var obj = result;
                            if (obj.exito === 'exito') {
                                $this.find('.loading').fadeOut();
                                $this.find('.message').html('<h2>El mensaje fue enviado exitosamente.</h2><p>Gracias por contactarnos.</p>').slideDown().delay(3000).slideUp();
                                form.find('.form__valid').removeClass('form__valid');
                                form[0].reset();
                                formSubmit.prop('disabled', false);
                                formSubmit.val('Enviar');
                            } else {
                                form.find('.message').html('<p class="warning-msg">'+obj.message+'</p>').slideDown().delay(3000).slideUp();
                            }
                        }
                    } );
                    return false;
                }
            });
        });
    }
    validacionFormulario();
}(jQuery));

