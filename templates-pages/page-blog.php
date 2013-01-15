<?php
/**
 * Template Name: Page - Blog Template
 * Description: Displays blog posts with pagination and featured image.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

    <div class="container">
        <div class="row">
            <div class="span12">
                <?php if (function_exists('bootstrapwp_breadcrumbs')) {
                    bootstrapwp_breadcrumbs();
                } ?>
            </div><!--/.span12 -->
        </div><!--/.row -->

        <header class="page-title">
            <h1><?php the_title();?></h1>
        </header>

      <div class="row content">
        <div class="span8">
            <?php the_content(); ?>
            <?php endwhile;
                // reset the loop
                wp_reset_query(); ?>
            <hr/>

            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                // Blog post query
                query_posts(array('post_type' => 'post', 'paged' => $paged, 'showposts' => 0));
                if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div <?php post_class(); ?>>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                        <h3><?php the_title();?></h3></a>
                    <p class="meta">
                        <?php echo bootstrapwp_posted_on();?>
                    </p>

                    <div class="row">
                        <div class="span2">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php echo bootstrapwp_autoset_featured_img(); ?></a>
                        </div><!-- /.span2 -->
                        <div class="span6">
                            <?php the_excerpt();?>
                        </div><!-- /.span6 -->
                    </div><!-- /.row -->
                    <hr/>
                </div><!-- /.post_class -->
            <?php endwhile; endif; ?>
                <?php bootstrapwp_content_nav('nav-below'); ?>
        </div><!-- /.span8 -->

    <?php get_sidebar('blog'); ?>
    <?php get_footer(); ?>