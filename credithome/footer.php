<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="container">
						<div class="row">
							<div class="col-12 col-md-3 mb-3">
								<div class="mb-5">
									<h3>Email</h3>
									<a href="mailto:info@credithomerealestate.com">info@credithomerealestate.com</a>
								</div>
								<div class="mb-5">
									<h3>Teléfono</h3>
									<a href="tel:+349554596951">(+34) 955 45 96 951</a>
								</div>
								<div class="mb-5">
									<h3>WhatsApp</h3>
									<a href="tel:+34602554701">(+34) 602 55 47 01</a>
								</div>
							</div>
							<div class="col-12 col-md-3 mb-3">
								<h3>Dirección</h3>
								<div class="mb-2">
									<h4>Sevilla</h4>
									<p><a href="" target="_blank">Av. San Francisco Javier, 9 Edificio Sevilla 2, planta 4, módulo 16</a></p>
								</div>
								<div class="mb-2">
									<h4>Madrid</h4>
									<p><a href="" target="_blank">Calle Ayala 4, 21001. Madrid</a></p>
								</div>
								<div class="mb-2">
									<h4>Marbella</h4>
									<p><a href="" target="_blank">Av. de las Naciones Unidas C.C. Cristamar 29660 Puerto Banús</a></p>
								</div>
								<div class="mb-2">
									<h4>Bormujos</h4>
									<p><a href="" target="_blank">Calle Perú, 49 Edif. Corona Center, planta baja mod. 11 (Sevilla)</a></p>
								</div>
								<div class="mb-2">
									<h4>Dos Hermanas</h4>
									<p><a href="" target="_blank">Av. Gabriel Miró, 3 Edif. Wertice, planta 5ª mod. 8B (Sevilla)</a></p>
								</div>
							</div>
							<div class="col-12 col-md-2 mb-3">
								<h3>Links</h3>
								<?php
								wp_nav_menu(array(
									'theme_location' => 'footer-menu', // Identificador del menú en tu tema
									'menu_class'     => 'vertical-menu list-unstyled', // Añadida clase de Bootstrap
									'container'      => 'nav', // Elemento contenedor
									'container_class'=> 'footer-nav', // Clase para el contenedor
									'depth'          => 1, // Profundidad del menú (1 para un solo nivel)
									'fallback_cb'    => false // No mostrar menú por defecto si no existe
								));
								?>

							</div>
							<div class="col-12 col-md-4 mb-3">
								<h2>CREDIT HOME REAL ESTATE & FINANCE</h2>
								<p>Profesionalismo y dedicación para que tu visión se convierta en realidad.</p>
								<div class="mt-5">
									<ul class="list-unstyled list-group list-group-horizontal d-flex align-items-center">
										<li class="me-2"><img src="<?php echo site_url('/img/instagram.png'); ?>" alt="Instagram"></li>
										<li class="me-2"><img src="<?php echo site_url('/img/twitter.png'); ?>" alt="Twitter"></li>
										<li><img src="<?php echo site_url('/img/logo.svg'); ?>" alt="Credit Home"></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="row" id="copyright">
							<div class="col-12 text-center">
								<p>Copyright 2025 © Credit Home. All Right Reserved. Designed and Developed by EnBloque</p>
							</div>
						</div>
					</div>

				</footer><!-- #colophon -->

			</div><!-- col -->

		</div><!-- .row -->

	</div><!-- .container(-fluid) -->

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

