<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Default Page
 *
 * Page template with a fixed 940px container and right sidebar layout
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
   <div class="container">

      <div class="content">

        <div class="page-header">
          <h1><?php the_title();?></h1>
        </div><!-- /.page-header -->
        <div class="row">
        <?php if (function_exists('bootstrap_breadcrumbs')) bootstrap_breadcrumbs(); ?>
          <div class="span10">

            <?php the_content();?>
<?php endwhile; // end of the loop. ?>
          </div><!-- /.span10 -->
          <?php get_sidebar(); ?>


<?php get_footer(); ?>