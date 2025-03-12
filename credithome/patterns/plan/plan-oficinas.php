<?php
// Incluir el archivo de oficinas
require_once(get_stylesheet_directory() . '/components/oficinas.php');
$oficinas = get_oficinas();

// Agrupar oficinas por región
$oficinas_agrupadas = [
    'sevilla' => array_filter($oficinas, function($oficina) {
        return in_array($oficina['titulo'], ['Sevilla', 'Bormujos', 'Dos Hermanas']);
    }),
    'malaga' => array_filter($oficinas, function($oficina) {
        return strpos($oficina['titulo'], 'Marbella') !== false;
    }),
    'madrid' => array_filter($oficinas, function($oficina) {
        return $oficina['titulo'] === 'Madrid';
    })
];
?>

<section id="oficinas">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 mb-5">
                <h2>Nuestras oficinas</h2>
                <h3>Puedes visitar nuestras oficinas en cualquiera de nuestras sedes. Encuentra la más cercana.</h3>
            </div>

            <!-- Oficinas Sevilla -->
            <div class="col-12 oficina mb-5">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <img src="<?php echo site_url('/img/oficina_sevilla.png'); ?>" alt="Imagen Sevilla" class="w-100 img-responsive zoom">
                    </div>
                    <div class="col-12 col-lg-6 mt-3 mt-lg-0">
                        <ul class="list-unstyled list-group d-flex">
                            <?php foreach ($oficinas_agrupadas['sevilla'] as $oficina): ?>
                                <li>
                                    <a href="<?php echo esc_url($oficina['enlace']); ?>" target="_blank" rel="noopener noreferrer">
                                        <h4><?php echo esc_html($oficina['titulo']); ?></h4>
                                        <p><?php echo esc_html($oficina['direccion']); ?></p>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-2">
                        <ul class="list-unstyled list-group d-flex">
                            <?php foreach ($oficinas_agrupadas['sevilla'] as $oficina): ?>
                                <li>
                                    <a href="tel:" class="btn">Llamar a <?php echo esc_html($oficina['titulo']); ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>      
            </div>

            <!-- Oficinas Málaga -->
            <div class="col-12 oficina mb-5">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <img src="<?php echo site_url('/img/oficina_malaga.png'); ?>" alt="Imagen Málaga" class="w-100 img-responsive zoom">
                    </div>
                    <div class="col-12 col-lg-6 mt-3 mt-lg-0">
                        <ul class="list-unstyled list-group d-flex">
                            <?php foreach ($oficinas_agrupadas['malaga'] as $oficina): ?>
                                <li>
                                    <a href="<?php echo esc_url($oficina['enlace']); ?>" target="_blank" rel="noopener noreferrer">
                                        <h4><?php echo esc_html($oficina['titulo']); ?></h4>
                                        <p><?php echo esc_html($oficina['direccion']); ?></p>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-2">
                        <ul class="list-unstyled list-group d-flex">
                            <?php foreach ($oficinas_agrupadas['malaga'] as $oficina): ?>
                                <li>
                                    <a href="tel:" class="btn">Llamar a <?php echo esc_html($oficina['titulo']); ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>      
            </div>

            <!-- Oficinas Madrid -->
            <div class="col-12 oficina mb-5">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <img src="<?php echo site_url('/img/oficina_madrid.png'); ?>" alt="Imagen Madrid" class="w-100 img-responsive zoom">
                    </div>
                    <div class="col-12 col-lg-6 mt-3 mt-lg-0">
                        <ul class="list-unstyled list-group d-flex">
                            <?php foreach ($oficinas_agrupadas['madrid'] as $oficina): ?>
                                <li>
                                    <a href="<?php echo esc_url($oficina['enlace']); ?>" target="_blank" rel="noopener noreferrer">
                                        <h4><?php echo esc_html($oficina['titulo']); ?></h4>
                                        <p><?php echo esc_html($oficina['direccion']); ?></p>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-2">
                        <ul class="list-unstyled list-group d-flex">
                            <?php foreach ($oficinas_agrupadas['madrid'] as $oficina): ?>
                                <li>
                                    <a href="tel:" class="btn">Llamar a <?php echo esc_html($oficina['titulo']); ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>      
            </div>
        </div>
    </div>
</section>
