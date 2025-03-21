<?php
/**
 * Template Name: Page - Servicios
 *
 * Template for Servicios page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}

$wrapper_id = 'full-width-page-wrapper';
if ( is_page_template( 'page-templates/no-title.php' ) ) {
	$wrapper_id = 'no-title-page-wrapper';
}
?>

<div class="wrapper" id="<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?>">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area p-0" id="primary">

				<main class="site-main" id="main" role="main">
				<?php echo do_shortcode('[smartslider3 slider="8"]'); ?>
				<?php include get_stylesheet_directory() . '/patterns/servicios/servicios-clientes.php'; ?>
				<?php echo do_shortcode('[smartslider3 slider="9"]'); ?>
				<?php include get_stylesheet_directory() . '/patterns/servicios/servicios-pasos.php'; ?>
				<?php include get_stylesheet_directory() . '/patterns/servicios/servicios-dudas.php'; ?>
				</main>

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?> -->

<?php
get_footer();
