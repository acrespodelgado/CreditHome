<article <?php post_class('mb-3 vivienda-card'); ?> id="post-<?php the_ID(); ?>">
	<div class="row">
		<div class="col-12 d-flex flex-column">
			<a href="<?php echo get_site_url();?>/vivienda/<?php echo basename( get_permalink() ); ?>">
				<div class="img-container">
					<?php if(get_field('localidad')) : ?>
						<div class="location blur">
							<i class="fa fa-map-marker" aria-hidden="true"></i><span><?php the_field('localidad'); ?></span>
						</div>
					<?php endif; ?>
					<?php if( get_the_post_thumbnail( $post->ID, 'full' ) ) : ?>
						<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
					<?php endif; ?>
					<?php if(get_field('precio')) : ?>
						<div class="price blur">
							<span><?php echo number_format(get_field('precio'), 0, ',', '.') . '€' ?></span>
						</div>
					<?php endif; ?>
				</div>
				<div class="data d-flex flex-column">
					<h4 class="mb-2"><?php echo get_the_title();?></h4>
					<ul class="list-unstyled d-flex gap-3 mt-2 mb-0">
						<?php if(get_field('metros')) : ?>
							<li class="d-flex flex-column align-items-center">
								<div class="img-wrapper">
									<img src="<?php echo site_url('/img/icono_superficie.png'); ?>" alt="Icono superficie" class="mb-1"/>
								</div>
								<span><?php the_field('metros'); ?>m²</span>
							</li>
						<?php endif; ?>
						<?php if(get_field('habitaciones')) : ?>
							<li class="d-flex flex-column align-items-center">
								<div class="img-wrapper">
									<img src="<?php echo site_url('/img/icono_dormitorio.png'); ?>" alt="Icono dormitorio" class="mb-1"/>
								</div>
								<span><?php the_field('habitaciones'); ?></span>
							</li>
						<?php endif; ?>
						<?php if(get_field('banos')) : ?>
							<li class="d-flex flex-column align-items-center">
								<div class="img-wrapper">
									<img src="<?php echo site_url('/img/icono_bano.png'); ?>" alt="Icono baño" class="mb-1"/>
								</div>
								<span><?php the_field('banos'); ?></span>
							</li>
						<?php endif; ?>
						<?php if(get_field('piscinas')) : ?>
							<li class="d-flex flex-column align-items-center">
								<div class="img-wrapper">
									<img src="<?php echo site_url('/img/icono_piscina.png'); ?>" alt="Icono piscina" class="mb-1"/>
								</div>
								<span><?php the_field('piscinas'); ?></span>
							</li>
						<?php endif; ?>
						<?php if(get_field('parkings')) : ?>
							<li class="d-flex flex-column align-items-center">
								<div class="img-wrapper">
									<img src="<?php echo site_url('/img/icono_parking.png'); ?>" alt="Icono parking" class="mb-1"/>
								</div>
								<span><?php the_field('parkings'); ?></span>
							</li>
						<?php endif; ?>
					</ul>
					<hr class="separator">
					<?php if(get_field('subtitulo')) : ?>
						<p><?php the_field('subtitulo'); ?></p>
					<?php endif; ?>
				</div>
			</a>
		</div>
	</div>
	
</article><!-- #post-## -->
