<?php
    $faqs = [
        [
            'pregunta' => '¿Qué gastos debo asumir para llevar a cabo la compraventa?',
            'respuesta' => 'El coste de compraventa incluye la notaría, la inscripción registral, la gestoría, el IVA o el ITP, dependiendo de si se trata de una vivienda nueva o de segunda mano.'
        ],
        [
            'pregunta' => '¿De cuánto tiempo dispongo para firmar la hipoteca una vez que la tengo aprobada?',
            'respuesta' => 'Una vez que la entidad financiera ha aprobado la operación, elegiremos la notaría para agendar el día de la firma. Debes tener en cuenta que, por ley, una vez firmada la FEIN (documento vinculante que contiene las condiciones de la hipoteca) y sus anexos, dispondrás de 10 días naturales para poder reflexionar y revisar las condiciones de la hipoteca, antes de la firma ante notario.'
        ],
        [
            'pregunta' => '¿Qué pasos importantes debo dar para comprar una vivienda? ',
            'respuesta' => 'Después de reservar tu vivienda, debes solicitar una nota simple. Es el documento en el que se encuentra toda la información relacionada con el inmueble, incluido si tiene cargas o deudas. Lo siguiente es firmar un contrato de arras. En la firma se entrega una paga y señal que suele ser del 10 % y que luego se descontará del precio final de compraventa. En este contrato se detallan las obligaciones de cada una de las partes y las consecuencias en caso de incumplimiento. El siguiente paso es buscar financiación, si la necesitas.'
        ],
        [
            'pregunta' => '¿Cuánto debería pagar de hipoteca al mes?',
            'respuesta' => 'La respuesta a esta cuestión depende del precio de la vivienda y del importe de la hipoteca, así como del plazo de contratación del préstamo. Para no poner en riesgo tu salud financiera, te aconsejamos que hagas una estimación de tus ingresos menos los gastos mensuales de los titulares que compraréis el nuevo hogar. En éste cálculo los costes de la hipoteca no deben superar el 35 – 40 %.'
        ],
        [
            'pregunta' => '¿Puedo vender mi VPO?',
            'respuesta' => 'Sí es posible vender un piso de protección oficial, normalmente, se puede vender una VPO pasados 10 o 30 años (el plazo tras el cual el piso puede convertirse en una vivienda libre). No obstante también se podría vender antes de ese tiempo, aunque siga protegida. En este caso, habría que cumplir unas condiciones específicas o pedir la descalificación voluntaria.'
        ],
        [
            'pregunta' => '¿Qué gastos tengo si vendo mi vivienda?',
            'respuesta' => 'A grandes rasgos, quien vende su vivienda debe pagar la plusvalía de Hacienda (IRPF), el impuesto o plusvalía municipal, la cancelación de la hipoteca (si existe una carga sobre la vivienda) y los gastos de notaría.'
        ]
    ];
?>

<section id="dudas">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-lg-7 pe-lg-5 pb-3">
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
