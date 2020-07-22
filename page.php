<?php
/**
 * The template for displaying the blog index (latest posts)
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Chronus
 */

get_header(); ?>
	<section id="primary" class="content-archive content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

	

			echo '<div class="post-wrapper">';

			while ( have_posts() ) : the_post();

			

			endwhile;

			echo '</div>';


		else :

		
		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
<?php get_footer(); ?>
