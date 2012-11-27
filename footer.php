<?php
/**
 * Default Footer
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 */
?>
<!-- End Template Content.  Begin Footer. -->
<footer>
    <div class="container">
        <p>&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?></p>
        <?php
        if (function_exists('dynamic_sidebar')) {
            dynamic_sidebar("footer-content");
        }
        ?>
    </div>
    <!-- /container -->
</footer>
<?php wp_footer(); ?>
</body>
</html>