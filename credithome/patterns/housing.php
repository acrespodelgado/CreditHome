<div id="viviendas">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <h3 class="mb-0">Encuentra tu casa con nosotros,</h3>
                <h4 class="mb-0">Algunas de nuestras propiedades en venta o alquiler.</h4>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex align-items-center">
                    <img src="<?php echo site_url('/img/idealista_logo_blanco.png'); ?>" alt="Idealista logo">
                    <span class="separator mx-3">|</span><p class="mb-0">*Somos la inmobiliaria nº1 en idealista</p>
                </div>
            </div>
            <?php
                global $paged;
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $current_url = $_SERVER['REQUEST_URI'];
                $posts_number = (strpos($current_url, 'viviendas') !== false) ? -1 : 6;
                
                $args = array(
                    'post_type' => 'vivienda',
                    'posts_per_page' => $posts_number,
                    'paged' => $paged,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $query = new WP_Query( $args );

                if ( $query->have_posts() ) : ?>
                    <div class="row mt-3 row-posts">
                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                <div class="col-xs-12 col-md-4 post">
                                    <?php get_template_part( 'loop-templates/content-vivienda', get_post_format() ); ?>	
                                </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php
                    understrap_pagination( [
                        'current' => $paged,
                        'total'   => $query->max_num_pages,
                    ]);
                ?>
        </div>
    </div>
</div>