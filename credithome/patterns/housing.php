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
        </div>
        <div class="row mt-5">
            <?php
                global $paged;
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $is_viviendas_page = (strpos($_SERVER['REQUEST_URI'], 'vivienda') !== false);
                $posts_number = $is_viviendas_page ? -1 : 6;
                
                $args = array(
                    'post_type' => 'vivienda',
                    'posts_per_page' => $posts_number,
                    'paged' => $paged,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $query = new WP_Query( $args );

                if ( $query->have_posts() ) : ?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <div class="col-xs-12 col-sm-6 col-lg-4 post">
                                <?php get_template_part( 'loop-templates/content-vivienda', get_post_format() ); ?>	
                            </div>
                    <?php endwhile; ?>
                    <?php if (!$is_viviendas_page) : ?>
                        <div class="col-12 my-5 text-center">
                            <a href="<?php echo site_url('/vivienda'); ?>" class="btn btn-dark">Ver todas las viviendas</a>
                        </div>
                    <?php endif; ?>
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