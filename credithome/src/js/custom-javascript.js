jQuery(document).ready(function($) {
    // Función para cambiar entre formularios
    function handleForms() {
        $('.btn-form').on('click', function() {
            $('.btn-form').removeClass('active');
            $(this).addClass('active');
            
            const formType = $(this).data('form');
            $('.form-section').removeClass('active');
            $(`#form-${formType}`).addClass('active');
            
            if(formType === 'compra') {
                $('#img-compra').removeClass('d-none');
                $('#img-venta').addClass('d-none');
            } else {
                $('#img-venta').removeClass('d-none');
                $('#img-compra').addClass('d-none');
            }
        });
    }

    // Función para animación de números
    function handleNumberAnimations() {
        function animateNumber($element, end) {
            if ($element.length === 0) return; // Verificar si el elemento existe
            
            $({ Counter: 0 }).animate({
                Counter: end
            }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $element.text(Math.ceil(this.Counter));
                },
                complete: function() {
                    $element.text(end);
                }
            });
        }

        function isElementInViewport(el) {
            if (!el || el.length === 0) return false; // Verificar si el elemento existe
            const rect = el[0].getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        function startCounters() {
            const $nums = $('.nums');
            if ($nums.length && isElementInViewport($nums)) {
                const elements = {
                    exp: $('#num-exp'),
                    prop: $('#num-prop'),
                    cli: $('#num-cli')
                };

                if (elements.exp.length) animateNumber(elements.exp, 20);
                if (elements.prop.length) animateNumber(elements.prop, 470);
                if (elements.cli.length) animateNumber(elements.cli, 1000);
                
                $(window).off('scroll', startCounters);
            }
        }

        // Solo inicializar si existe el elemento .nums
        if ($('.nums').length) {
            startCounters();
            $(window).on('scroll', startCounters);
        }
    }

    // Función para smooth scroll
    function handleSmoothScroll() {
        $('.nums .btn').on('click', function(e) {
            e.preventDefault();
            
            const href = $(this).attr('href');
            const idMap = {
                '/servicios': '#servicios-home',
                '/propiedades': '#viviendas',
                '/opiniones': '#opiniones'
            };
            
            const targetId = idMap[href];
            
            if (targetId && $(targetId).length) {
                $('html, body').animate({
                    scrollTop: $(targetId).offset().top - 20
                }, 1000);
            }
        });
    }

    // Función para manejar FAQs
    function handleFAQs() {
        $('.faq-item .faq-header').on('click', function() {
            const $faqItem = $(this).closest('.faq-item');
            const $content = $faqItem.find('.faq-content');
            const $icon = $(this).find('i');
            
            // Cerrar otros FAQs
            $('.faq-item').not($faqItem).removeClass('active')
                .find('.faq-content').slideUp();
            $('.faq-item').not($faqItem).find('i')
                .css('transform', 'rotate(0deg)');
            
            // Toggle actual FAQ
            $faqItem.toggleClass('active');
            if ($faqItem.hasClass('active')) {
                $content.slideDown();
                $icon.css('transform', 'rotate(180deg)');
            } else {
                $content.slideUp();
                $icon.css('transform', 'rotate(0deg)');
            }
        });
    }

    function handleNavbar() {
        const $navbar = $('#main-nav');

        if ($navbar.hasClass('transparent')) {
            $(window).scroll(function () {
                if ($(window).scrollTop() > 0) {
                    $navbar.removeClass('transparent');
                } else {
                    $navbar.addClass('transparent');
                }
            });
        }
    }

    function handleHamburgerMenu() {
        var $hamburger = $(".hamburger");
        var $navbar = $('#main-nav');

        $hamburger.on("click", function(e) {
            $hamburger.toggleClass("is-active");

            if ($hamburger.hasClass("is-active")) {
                $('#myNav').css("width", "100%");
                $('body').css('overflow', 'hidden');
                $navbar.removeClass('transparent');
            } else {
                $('#myNav').css("width", "0%");
                $('body').css('overflow', 'auto');
            }
        });
    }

    // Función para calcular el width de .left
    function handleLeftSize() {
        $('.parent').each(function() {
          var alturaPadre = $(this).outerHeight();
          $(this).find('.left').css('width', alturaPadre + 'px');
        });
      }

    // Inicializar todas las funcionalidades
    handleForms();
    handleNumberAnimations();
    handleSmoothScroll();
    handleFAQs();
    handleNavbar();
    handleHamburgerMenu();
    handleLeftSize();
});
