<?php 
    $servicios = [
        [
            'imagen' => 'servicios_inmobiliaria.png',
            'alt' => 'Servicios Asesoría Inmobiliaria',
            'icono' => 'icono_inmobiliaria.png',
            'titulo' => 'Asesoría inmobiliaria y estudio de mercado',
            'descripcion' => 'Te ayudamos a encontrar la propiedad que mejor se ajuste a tus necesidades y presupuesto. 
            Ya sea una vivienda, una inversión o un local comercial, 
            nuestro equipo está preparado para ofrecerte las mejores opciones del mercado.'
        ],
        [
            'imagen' => 'servicios_asesoria_financiera.png',
            'alt' => 'Servicios Asesoría Financiera',
            'icono' => 'icono_financiera.png',
            'titulo' => 'Asesoría financiera para la compra',
            'descripcion' => 'financiar tu vivienda puede parecer complejo, pero con nuestro apoyo, 
            el proceso es sencillo y accesible. Te guiamos en la búsqueda de las mejores opciones de financiación, 
            adaptadas a tu perfil y tus necesidades.'
        ],
        [
            'imagen' => 'servicios_asesoria_legal.png',
            'alt' => 'Servicios Asesoría Legal',
            'icono' => 'icono_asesoramiento.png',
            'titulo' => 'Asesoría inmobiliaria y estudio de mercado',
            'descripcion' => 'Nos encargamos de todos los trámites legales necesarios para que 
            la compra de tu propiedad sea segura y sin complicaciones. Nuestro equipo de expertos 
            se ocupa de la gestión de contratos, escrituras y otros procedimientos legales.'
        ],
        [
            'imagen' => 'servicios_gestion.png',
            'alt' => 'Servicios Gestión Integral',
            'icono' => 'icono_gestion.png',
            'titulo' => 'Gestión integral del proceso',
            'descripcion' => 'Nos encargamos de todo el proceso, desde la búsqueda inicial hasta la firma final. 
            Cada paso será gestionado de manera eficiente y sin contratiempos. Tu tranquilidad es nuestra prioridad.'
        ],
    ];
?>

<section id="clientes">
    <div class="left"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 mb-3">
                <h3>Nuestros servicios al<br><span class="dark-gold">servicio del cliente</span></h3>
                <p>En Credit Home Real Estate, ofrecemos una gama de servicios diseñados para acompañarte en cada etapa del proceso inmobiliario, asegurando que tu experiencia sea lo más fluida y satisfactoria posible. Nuestro compromiso es hacer que el proceso de compra, venta, financiación y gestión de propiedades sea sencillo, transparente y sin sorpresas.</p>
            </div>
        </div>

        <?php foreach ($servicios as $servicio): ?>
        <div class="row align-items-center mt-5">
            <div class="col-12 col-sm-6 col-lg-5">
                <img src="<?php echo site_url('/img/' . $servicio['imagen']); ?>" 
                        alt="<?php echo $servicio['alt']; ?>" class="zoom" />
            </div>
            <div class="col-12 col-sm-6 col-lg-7 mt-3 mt-lg-0">
                <img src="<?php echo site_url('/img/' . $servicio['icono']); ?>" 
                        alt="Icono <?php echo $servicio['alt']; ?>" class="blur" />
                <h4><?php echo $servicio['titulo']; ?></h4>
                <p><?php echo $servicio['descripcion']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
