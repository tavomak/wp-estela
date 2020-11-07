$(function () {
    /* 
	------------------------------------------------------------------
		SBJS
	------------------------------------------------------------------
	*/
    function logSource(sbData) {
        console.log('Cookies are set! Your source is: ${sbData.current.src}');z
    }
    //sbjs.init();
    /* 
	------------------------------------------------------------------
		PRELOAD
	------------------------------------------------------------------
	*/

    $(window).on('load', function () {
        console.log('funca!');
        $('.cd-loader').fadeOut('slow', function () {
            $(this).remove();
        });
        setCarITems();
    });


    /* 
	------------------------------------------------------------------
		Menú Hamburguer
	------------------------------------------------------------------
	*/
    $('.hamburger').on('click', function () {
        $(this).toggleClass('is-active');
        $('.bk-primary-nav').toggleClass('loaded');
    });

    $('.bk-primary-nav__menu-item').on('click', function () {
        $('.bk-primary-nav').toggleClass('loaded');
        $('.hamburger').toggleClass('is-active');
    });
    
    $(window).scroll(function () {

        if ($(this).scrollTop() > 100) {
            $('.bk-sticky--nav').addClass('position-fixed');
        } else {
            $('.bk-sticky--nav').removeClass('position-fixed');
        }
    });

     /* 
	------------------------------------------------------------------
		Carousel
	------------------------------------------------------------------
	*/
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        items:1
    })

    /*
   ------------------------------------------------------------------
       CAR ITEM
   ------------------------------------------------------------------
   */

   if(window.sessionStorage.getItem('services') == null){
       var services =[];
   } else {
        var x = window.sessionStorage.getItem('services'),
        selectedServices = JSON.parse(x);
       var services = selectedServices;
   }

    $('.add-to-cart').on('click', function (e) {
        e.preventDefault();
        var selectedItem = $(this).data('servicio');
        
        if (services.includes(selectedItem)) {
            console.log('lo incluye')
        } else {
            console.log('no lo incluye')
            services.push(selectedItem);
            
            window.sessionStorage.setItem('services', JSON.stringify(services));
    
            setCarITems();
            
        }
    });

    $('.cotizar').on('click', function (e) {
        e.preventDefault();

        let x = window.sessionStorage.getItem('services'),
        selectedServices = JSON.parse(x);
        
        console.log(selectedServices);

        $.each(selectedServices, function(k,v){
            console.log(k , v)
            $('#kit-form-modal').find(`#${v}`).prop('checked', true);
            //$('.form-servicess--selection').append( ` ${v.replace('-', ' ')}, `)
        });


        $('#kit-form-modal').modal('show');
    });

    
    
    $('.form-check-input').on('change', function(){
        setCarITems();
    })

    function setCarITems () {
        let x = window.sessionStorage.getItem('services'),
        selectedServices = JSON.parse(x);

        if(x != null){

            $('.car-icon').removeClass('empty');
            $('.car-icon').addClass('full');
    
            
            $('.car-icon').data('before', selectedServices.length);
    
            var count = $('.car-icon').data('before');
            $('.cart-count').text(count);

        }

        $.each(selectedServices, function(k,v){
            console.log(k , v)
            $('.add-to-cart-box').find(`.add-${v}`).addClass('disabled');
            $('.add-to-cart.disabled').text('Añadido');
        });
        
    }

    /* 
	------------------------------------------------------------------
		Formularios
	------------------------------------------------------------------
    */
    var nombreProyecto = $('.nombreProyecto').text(),
        logoProyecto = $('.logoProyecto').attr('src'),
        textoProyecto = $('.textoProyecto').text(),
        imagenDestacadaUno = $('.detallesImg').attr('src'),
        imagenDestacadaDos = $('.imagenDestacada0').attr('src'),
        imagenDestacadaTres = $('.imagenDestacada1').attr('src'),
        direccionSv = $('.direccionSv').text(),
        comuna = $('.comuna').text(),
        telefonoSv = $('.telefonoSv').text(),
        emailSv = $('.emailSv ').text();
        //sbjMedio = sbjs.get.current.mdm,
        //sbjFuente = sbjs.get.current.src;

    $('#nombreProyecto').val(nombreProyecto);
    $('#logoProyecto').val(logoProyecto);
    $('#textoProyecto').val(textoProyecto);
    $('#imagenDestacadaUno').val(imagenDestacadaUno);
    $('#imagenDestacadaDos').val(imagenDestacadaDos);
    $('#imagenDestacadaTres').val(imagenDestacadaTres);
    $('#direccionSv').val(direccionSv);
    $('#comuna').val(comuna);
    $('#telefonoSv').val(telefonoSv);
    $('#emailSv').val(emailSv);
    //$('#fuenteSbj').val(sbjFuente);
    //$('#medioSbj').val(sbjMedio);

    /* 
	------------------------------------------------------------------
		Validacion de Formularios
	------------------------------------------------------------------
    */
    $(".wpcf7").on('wpcf7:mailsent', function (event) {
        $('.form-content').addClass('d-none');
        $('#form-success').removeClass('d-none');
    });

    $(".wpcf7").on('wpcf7:mailfailed', function (event) {
        console.log("Failed")
        console.log(event)
        Swal.fire({
            icon: 'error',
            title: 'Ha ocurrido un error',
            text: '"Mensaje de error impreso"'
        })
    });

    $(".wpcf7").on('wpcf7invalid', function () {
        console.log("invalid")
    });

    $(".wpcf7").on('wpcf7submit', function () {
        console.log("wpcf7submit")
    });

    /* 
	------------------------------------------------------------------
		Validacion de Formularios
	------------------------------------------------------------------
    */

    // Validador de Formulario de contacto
    $('.formulario_cotizar').validate({
        rules: {
            inputName: {
                required: true,
                lettersonly: true,
            },
            inputEmail: {
                required: true,
                email: true,
            },
            inputRut: {
                required: false,
                Rut: true,
            },
            inputTelefono: {
                required: true,
                digits: true,
                minlength: 9,
                maxlength: 9,
            }
        },
        messages: {
            inputName: "Ingresa solo letras.",
            inputEmail: {
                required: "Es necesario tu dirección de correo",
                email: "El formato de tu email debe ser similar a: name@domain.com"
            },
            inputRut: "Ingresa un RUT valido.",
            inputTelefono: {
                required: "Ingresa tu numero de telefono",
                minlength: jQuery.validator.format("Introduce al menos {0} carácteres."),
            }
        },
        submitHandler: function (form) { },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error)
        },
    });
    //Mensajes Personalizados
    jQuery.extend(jQuery.validator.messages, {
        digits: "Por favor ingresa sólo números."
    });
    //Verificación de rut desde plugin, solo muestra datos en consola
    $('#inputRut').Rut({
        on_error: function () {
            console.log('Rut invalido');
        },
        on_success: function () {
            console.log('RUT válido')
        },
        format_on: 'keyup',
        //digito_verificador: "#digito-verificador",
        //format: false,
    });

    $('.formulario_cotizar').on('keyup keypress', function (e) {
        if ($(this).valid()) {
            $('#boton_enviar').prop('disabled', false);
        } else {
            $('#boton_enviar').prop('disabled', true);
        }
    });
    //Añade metodo RUT al validador
    $.validator.addMethod("Rut", function (value, element) {
        if ($.Rut.validar(value)) {
            return true;
        } else {
            return false;
        }
    }, "Debe ser un rut valido.");

    // Validación de sólo letras y espacio
    $.validator.addMethod("lettersonly", function (value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Por favor ingresa sólo letras.");

});