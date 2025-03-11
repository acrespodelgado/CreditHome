<?php
    $faqs = [
        [
            'pregunta' => '¿Cuánto tiempo puedo quedarme?',
            'respuesta' => 'Ubicado en la prestigiosa urbanización de Marbesa esta impresionante villa de 751 m² se ofrece como una oportunidad única para aquellos que buscan el equilibrio perfecto entre lujo, confort y privacidad.'
        ],
        [
            'pregunta' => '¿Se puede alquilar entre varias personas?',
            'respuesta' => 'Ubicado en la prestigiosa urbanización de Marbesa esta impresionante villa de 751 m² se ofrece como una oportunidad única para aquellos que buscan el equilibrio perfecto entre lujo, confort y privacidad.'
        ],
        [
            'pregunta' => '¿Qué pasa si se rompe algo en mi vivienda?',
            'respuesta' => 'Ubicado en la prestigiosa urbanización de Marbesa esta impresionante villa de 751 m² se ofrece como una oportunidad única para aquellos que buscan el equilibrio perfecto entre lujo, confort y privacidad.'
        ],
        [
            'pregunta' => '¿Todas las viviendas tienen aparcamientos propios?',
            'respuesta' => 'Ubicado en la prestigiosa urbanización de Marbesa esta impresionante villa de 751 m² se ofrece como una oportunidad única para aquellos que buscan el equilibrio perfecto entre lujo, confort y privacidad.'
        ],
        [
            'pregunta' => '¿Qué tan lejos está el centro de mi vivienda?',
            'respuesta' => 'Ubicado en la prestigiosa urbanización de Marbesa esta impresionante villa de 751 m² se ofrece como una oportunidad única para aquellos que buscan el equilibrio perfecto entre lujo, confort y privacidad.'
        ]
    ];
?>

<section id="dudas">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-lg-7 pe-5 pb-3">
                <div class="container">
                    <div class="row">
                        <div class="col-12 my-5">
                            <h3>Resolvemos tus dudas</h3>
                            <h4>Hemos seleccionado nuestra pregunta más frecuente. Aquí encontrarás respuestas sobre la información que más te interesa</h4>
                        </div>

                        <?php foreach($faqs as $faq): ?>
                        <div class="col-12 faq-item mb-3">
                            <div class="faq-header">
                                <h5><?php echo htmlspecialchars($faq['pregunta']); ?></h5>
                                <i class="fa fa-long-arrow-up"></i>
                            </div>
                            <div class="faq-content">
                                <p><?php echo htmlspecialchars($faq['respuesta']); ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 p-0">
                <img src="<?php echo site_url('/img/servicios_dudas.png'); ?>" 
                     alt="Imagen Dudas" 
                     class="img-fluid h-100 w-100 object-fit-cover zoom">
            </div>
        </div>
    </div>
</section>
