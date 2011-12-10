<?php
/**
 * Template Name: Full-width, no sidebar
 * Description: A full-width template with no sidebar
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="container">
		<header class="jumbotron subhead" id="overview">
        <h1><?php the_title();?></h1>
      </header>

			
			
				<div id="content" class="full-width" role="main">
				  <?php the_content();?>
				<?php endwhile; // end of the loop. ?>
		
				</div><!-- #content -->
		
		</div><!-- /.container -->

<?php get_footer(); ?>