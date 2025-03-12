<article <?php post_class('vivienda-single'); ?> id="post-<?php the_ID(); ?>">
	<div class="w-100 banner">
		<?php if( get_the_post_thumbnail( $post->ID, 'full img-fluid' ) ) : ?>
			<?php echo get_the_post_thumbnail( $post->ID, 'full img-fluid' ); ?>
		<?php
			else : ?> 
			<div class="w-100 banner-no-image">
				<span>Sin imagen destacada</span>
			</div>
		<?php endif; ?>
	</div>
	<div class="container">
		<div class="row py-5">
			<div class="col-12 col-lg-5">
				<div class="d-flex data-container">
					<?php if(get_field('localidad')) : ?>
						<div class="location blur">
							<i class="fa fa-map-marker" aria-hidden="true"></i><span><?php the_field('localidad'); ?></span>
						</div>
					<?php endif; ?>
					<?php if(get_field('precio')) : ?>
					<div class="price blur ms-3">
						<span><?php echo number_format(get_field('precio'), 0, ',', '.') . '€' ?></span>
					</div>
				<?php endif; ?>
				</div>

				<h1 class="mt-2"><?php echo get_the_title();?></h1>
				<?php if(get_field('subtitulo')) : ?>
					<h2><?php the_field('subtitulo'); ?></h2>
				<?php endif; ?>

				<ul class="list-unstyled d-flex gap-3 my-4">
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
				<?php the_content(); ?>
			</div>

			<div class="col-12 col-lg-6 offset-lg-1">
				<div class="d-flex flex-wrap gap-3 mb-4">
					<?php $count = 1; ?>
					<?php while(get_field('imagen_adicional_' . $count)): ?>
							<div class="img-wrapper">
								<img src="<?php echo get_field('imagen_adicional_' . $count)['url']; ?>" alt="Imagen <?php echo $count; ?>">
							</div>
						<?php $count++; ?>
					<?php endwhile; ?>
				</div>
			</div>
			
			<div class="col-12 text-center mt-5">
				<a href="<?php echo site_url('/vivienda'); ?>" class="btn btn-dark">Ver todas las viviendas</a>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
