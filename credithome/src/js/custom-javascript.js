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
});
