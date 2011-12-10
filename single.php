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
   <div class="container">
<header class="jumbotron subhead" id="overview">
        <h1><?php the_title();?></h1>
      </header>
      <div class="content">
      <div class="row">
          <div class="span8">

            <?php the_content();?>
<?php endwhile; // end of the loop. ?>
          </div><!-- /.span8 -->
          <?php get_sidebar('blog'); ?>


<?php get_footer(); ?>