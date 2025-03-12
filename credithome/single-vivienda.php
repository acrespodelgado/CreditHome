<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper-vivienda">

	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'loop-templates/content', 'vivienda-single' );
		//understrap_post_nav();
	endwhile;
	?>

</div><!-- #single-wrapper -->

<?php
get_footer();
