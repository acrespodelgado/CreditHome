<?php
    // Incluir el archivo de oficinas
    require_once(get_stylesheet_directory() . '/components/oficinas.php');
    $oficinas = get_oficinas();
    
    // Dividir las oficinas en dos grupos
    $mitad = ceil(count($oficinas) / 2);
    $oficinas_columna1 = array_slice($oficinas, 0, $mitad);
    $oficinas_columna2 = array_slice($oficinas, $mitad);
?>

<section id="contacto-oficinas">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 mb-5">
                <h2>Nuestras oficinas</h2>
                <h3>Puedes visitar nuestras oficinas en cualquiera de nuestras sedes. Encuentra la más cercana.</h3>
            </div>
            
            <div class="col-12 col-md-5">
                <ul class="list-unstyled list-group">
                    <?php 
                    foreach($oficinas_columna1 as $oficina) :
                        mostrar_oficina($oficina);
                    endforeach;
                    ?>
                </ul>
            </div>

            <div class="col-12 col-md-2 d-none d-md-flex">
                <img src="<?php echo site_url('/img/separator.png'); ?>" alt="Separator" class="separator" />
            </div>

            <div class="col-12 col-md-5">
                <ul class="list-unstyled list-group">
                    <?php 
                    foreach($oficinas_columna2 as $oficina) :
                        mostrar_oficina($oficina);
                    endforeach;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>
