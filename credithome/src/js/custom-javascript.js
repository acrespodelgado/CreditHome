jQuery(document).ready(function($) {
    $('.btn-form').on('click', function() {
        // Manejo de botones
        $('.btn-form').removeClass('active');
        $(this).addClass('active');
        
        // Manejo de formularios
        const formType = $(this).data('form');
        $('.form-section').removeClass('active');
        $(`#form-${formType}`).addClass('active');
        
        // Manejo de imágenes
        if(formType === 'compra') {
            $('#img-compra').removeClass('d-none');
            $('#img-venta').addClass('d-none');
        } else {
            $('#img-venta').removeClass('d-none');
            $('#img-compra').addClass('d-none');
        }
    });

    function animateNumber($element, end) {
        $({ Counter: 0 }).animate({
            Counter: end
        }, {
            duration: 2000, // Duración de la animación en milisegundos
            easing: 'swing',
            step: function() {
                $element.text(Math.ceil(this.Counter));
            },
            complete: function() {
                $element.text(end); // Asegura que el número final sea exacto
            }
        });
    }

    // Función para verificar si un elemento está en el viewport
    function isElementInViewport(el) {
        const rect = el[0].getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Función para iniciar las animaciones
    function startCounters() {
        if (isElementInViewport($('.nums'))) {
            animateNumber($('#num-exp'), 20);
            animateNumber($('#num-prop'), 470);
            animateNumber($('#num-cli'), 1000);
            // Removemos el evento scroll una vez que las animaciones han comenzado
            $(window).off('scroll', startCounters);
        }
    }

    // Verificar al cargar la página y en cada scroll
    startCounters();
    $(window).on('scroll', startCounters);

    // Smooth scroll para los enlaces
    $('.nums .btn').on('click', function(e) {
        e.preventDefault(); // Previene el comportamiento por defecto del enlace
        
        // Obtiene el href del enlace
        const href = $(this).attr('href');
        
        // Mapeo de URLs a IDs
        const idMap = {
            '/servicios': '#servicios-home',
            '/propiedades': '#viviendas',
            '/reseñas': '#opiniones'
        };
        
        // Obtiene el ID correspondiente
        const targetId = idMap[href];
        
        if (targetId) {
            // Realiza el scroll suave
            $('html, body').animate({
                scrollTop: $(targetId).offset().top - 20
            }, 1000); // 1000ms = 1 segundo de duración de la animación
        }
    });

});
