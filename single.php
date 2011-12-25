<?php
/**
 * The template for displaying all posts.
 *
 * Template Name: Default Posts
 *
 * Page template with a fixed 940px container and right sidebar layout
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="row">
  <div class="container">
   <?php if (function_exists('bootstrapwp_breadcrumbs')) bootstrapwp_breadcrumbs(); ?>
   </div><!--/.container -->
   </div><!--/.row -->
   <div class="container">
<header class="jumbotron subhead" id="overview">
        <h1><?php the_title();?></h1>
      </header>
      <div class="row content">
<div class="span8">
            <?php the_content();?>
<?php endwhile; // end of the loop. ?>
 <?php comments_template(); ?>

 <?php bootstrapwp_content_nav('nav-below');?>

          </div><!-- /.span8 -->
          <?php get_sidebar('blog'); ?>


<?php get_footer(); ?>