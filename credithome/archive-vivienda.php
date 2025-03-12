<?php
/**
 * The template for displaying vivienda archive
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper-viviendas">
    <div class="container" id="content" tabindex="-1">
        <div class="row">
            <div class="col-12">
            <?php echo do_shortcode('[smartslider3 slider="12"]'); ?>
                <?php if ( have_posts() ) : ?>
                    <?php require_once(get_stylesheet_directory() . '/patterns/housing.php'); ?>
                <?php else : ?>
                    <?php get_template_part( 'loop-templates/content', 'none' ); ?>
                <?php endif; ?>
            </div>
        </div><!-- .row -->
    </div><!-- #content -->
</div><!-- #archive-wrapper -->

<?php
get_footer();
