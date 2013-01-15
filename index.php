<?php
/**
 * Description: Default Index template to display loop of blog posts
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="container">
        <div class="row">
            <div class="span12">
                <?php if (function_exists('bootstrapwp_breadcrumbs')) {
                    bootstrapwp_breadcrumbs();
                } ?>
            </div><!--/.span12 -->
        </div><!--/.row -->

    <div class="row content">
        <div class="span8">
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

            <?php bootstrapwp_content_nav('nav-below');?>
        </div><!-- /.span8 -->

    <?php get_sidebar('blog'); ?>
    <?php get_footer(); ?>