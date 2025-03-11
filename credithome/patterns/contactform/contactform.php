<section id="contact-form">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex d-inline-flex my-5">
                                <h3 class="me-3">¿Comprar o vender?</h3>
                                <button class="btn-form active mx-1" data-form="compra">Quieres encontrar tu vivienda</button>
                                <button class="btn-form mx-1" data-form="venta">Quieres vender tu vivienda</button>
                            </div>
                            
                            <div id="form-compra" class="form-section active">
                                <h4 class="mb-3">En Credit Home Real Estate encontramos tu casa, por eso, cuéntanos dónde te gustaría vivir.</h4>
                                <?php echo do_shortcode('[contact-form-7 id="9b5490b" title="Formulario de compra"]'); ?>
                            </div>
                            <div id="form-venta" class="form-section">
                                <h4 class="mb-3">En Credit Home Real Estate tenemos al comprador de tu vivienda, cuéntanos sus características para que podamos ayudarte.</h4>
                                <?php echo do_shortcode('[contact-form-7 id="ca6379f" title="Formulario de venta"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-5 p-0">
                <img src="<?php echo site_url('/img/comprar_contact_form.png'); ?>" alt="Imagen Compra" id="img-compra" class="img-fluid h-100 w-100 object-fit-cover zoom">
                <img src="<?php echo site_url('/img/vender_contact_form.png'); ?>" alt="Imagen Venta" id="img-venta" class="d-none img-fluid h-100 w-100 object-fit-cover zoom">
            </div>
        </div>
    </div>
</section>
