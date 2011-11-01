<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Page Fluid Right Sidebar
 *
 * Page template with a fluid container and right sidebar layout
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>
<div class="container-fluid">
  <?php get_sidebar(); ?>
    <section id="page">
    <?php while ( have_posts() ) : the_post(); ?>
   <div class="page-header">
    <h2><?php the_title();?></h2>
   </div>
      <div class="content">



          <div class="row">
          <div class="span12">

            <?php the_content();?>
            <?php comments_template( '', true ); ?>

        <?php endwhile; // end of the loop. ?>
          </div><!-- /.span12 -->







</div><!-- /.row -->
</section><!-- /#page -->


</div><!-- /.content -->

<?php get_footer(); ?>