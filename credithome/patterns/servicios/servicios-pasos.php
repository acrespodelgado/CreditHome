<?php
    $contador = 1;
    $pasos = [
        [
            'titulo' => 'Seleccione la propriedad y acordar el precio final',
            'descripcion' => 'Después de elegir la propiedad deseada, ambas partes negocian y acuerdan el precio final de compra.'
        ],
        [
            'titulo' => 'Pagar un depósito para asegurar la propiedad',
            'descripcion' => 'Se paga un depósito para retirar la propiedad del mercado, asegurando que esté reservada para usted mientras se realizan las comprobaciones legales.'
        ],
        [
            'titulo' => 'Realizar una revisión legal de la propiedad',
            'descripcion' => 'Los abogados examinan los documentos de la propiedad para verificar que está libre de deudas y asegurar que se cumplen todos los requisitos legales, como el registro y la condición de propiedad.'
        ],
        [
            'titulo' => 'Recibir aprobación legal',
            'descripcion' => 'Una vez que la revisión legal se completa, usted recibe la aprobación de sus abogados que todo está en orden, permitiendo que la venta avance.'
        ],
        [
            'titulo' => 'Firmar el contrato de compra privado',
            'descripcion' => 'En esta etapa, usted firma el contrato PPC, que formaliza la compra, y paga el 10% del precio de compra, menos el depósito ya dado.'
        ],
        [
            'titulo' => 'Completar la compra en el notario',
            'descripcion' => 'En la fecha de finalización, el saldo restante se transfiere y en la oficina del notario, las llaves se entregan, oficialmente haciéndole el propietario.'
        ]
    ];
?>

<section id="pasos">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 mb-5">
                <h2>Pasos para comprar tu propiedad<br><span class="gold">con Credit Home Real Estate</span></h2>
                <p>Contáctanos, tenemos la solución. Nuestro equipo se asegura de ofrecerte la tranquilidad y seguridad que buscas en tu hipoteca. Entendemos que es algo que preocupa a muchas personas, por eso desde Credit Home Real Estate nos comprometemos con el propósito de ofrecerle la opción a la medida de sus necesidades.</h3>
            </div>
            <div class="w-100"></div>
        </div>
        <?php 
        // Dividir los pasos en grupos de 3
        $pasos_chunks = array_chunk($pasos, 3);
        foreach($pasos_chunks as $chunk): ?>
        <div class="row">
            <?php foreach($chunk as $paso): ?>
            <div class="col-12 col-md-4 mb-3 paso">
                <img src="<?php echo site_url('/img/paso').'-'.$contador.'.png'; ?>" alt="Paso <?php echo $contador; ?>" class="img-responsive zoom">
                <h3>PASO 0<?php echo $contador; ?></h3>
                <h4><?php echo htmlspecialchars($paso['titulo']); ?></h4>
                <p><?php echo htmlspecialchars($paso['descripcion']); ?></p>
            </div>
            <?php 
                    $contador++;
                endforeach; 
            ?>
        </div>
        <?php endforeach; ?>
    </div>
</section>