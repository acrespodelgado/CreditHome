<?php
/**
 * The template for displaying the footer
 *
 * @package Understrap
 */

defined('ABSPATH') || exit;
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<?php require_once(get_stylesheet_directory() . '/components/oficinas.php'); ?>
<?php $oficinas = get_oficinas(); ?>

<div class="wrapper" id="wrapper-footer">
    <div class="container">
        <footer class="site-footer" id="colophon">
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
                    <?php foreach($oficinas as $oficina): ?>
                        <div class="mb-2">
                            <h4><?php echo esc_html($oficina['titulo']); ?></h4>
                            <p>
                                <a href="<?php echo esc_url($oficina['enlace']); ?>" 
                                target="_blank" 
                                rel="noopener noreferrer">
                                    <?php echo esc_html($oficina['direccion']); ?>
                                </a>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="col-12 col-md-2 mb-3">
                    <h3>Links</h3>
                    <?php
                    wp_nav_menu([
                        'theme_location'  => 'footer-menu',
                        'menu_class'      => 'vertical-menu list-unstyled',
                        'container'       => 'nav',
                        'container_class' => 'footer-nav',
                        'depth'           => 1,
                        'fallback_cb'     => false
                    ]);
                    ?>
                </div>

                <div class="col-12 col-md-4 mb-3">
                    <h2>CREDIT HOME REAL ESTATE & FINANCE</h2>
                    <p>Profesionalismo y dedicación para que tu visión se convierta en realidad.</p>
                    <div class="mt-5">
                        <ul class="list-unstyled list-group list-group-horizontal d-flex align-items-center">
                            <li class="me-2">
                                <a href="#"><img src="<?php echo site_url('/img/instagram.png'); ?>" alt="Instagram"></a>
                            </li>
                            <li class="me-4">
                                <a href="#"><img src="<?php echo site_url('/img/twitter.png'); ?>" alt="Twitter"></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('/'); ?>">
                                    <img src="<?php echo site_url('/img/logo.svg'); ?>" alt="Credit Home">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row" id="copyright">
                <div class="col-12 text-center">
                    <p>Copyright <?php echo date('Y'); ?> © Credit Home. All Right Reserved. Designed and Developed by EnBloque</p>
                </div>
            </div>
        </footer>
    </div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
