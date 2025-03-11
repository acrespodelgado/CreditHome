<div id="opiniones">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-10 offset-md-1">
                <div class="left">
                    <h2>Nuestros clientes</h2>
                </div>
                <?php

                    $args = array(
                        'post_type' => 'opinion',
                        'posts_per_page' => 6,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) : ?>
                    <div id="opinionCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php 
                            $counter = 0;
                            while ($query->have_posts()) : $query->the_post(); ?>
                                <div class="carousel-item <?php echo $counter === 0 ? 'active' : ''; ?>">
                                    <div class="carousel-item-inner d-flex align-items-center">
                                        <div class="carousel-content text-center p-4 w-100">
                                            <div class="stars mb-3">
                                                <?php
                                                for ($i = 1; $i <= 5; $i++) {
                                                    echo ($i <= get_field('valoracion') 
                                                    ? '<i class="fa fa-star" aria-hidden="true"></i>'
                                                    : '<i class="fa fa-star-o" aria-hidden="true"></i>');
                                                }
                                                ?>
                                            </div>
                                            
                                            <h4 class="mb-3"><?php echo get_the_title(); ?></h4>
                                            <?php echo get_the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                                $counter++;
                            endwhile; 
                            wp_reset_postdata();
                            ?>
                        </div>

                        <!-- Controles del carousel -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#opinionCarousel" data-bs-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#opinionCarousel" data-bs-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                <?php endif; ?>
                <div class="right">
                    <span>*Todas las reseñas son reales y verificadas por Google o Idealista</span>
                </div>
            </div>
        </div>
    </div>
</div>