<?php
/**
 * Template Name: Page - Política
 *
 * Template for Política page.
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

<div class="wrapper p-0" id="wrapper-politica">

	<div class="container" id="content">

		<div class="row">

			<div class="col-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
					<?php echo do_shortcode('[smartslider3 slider="9"]'); ?>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</main>

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?> -->

<?php
get_footer();
