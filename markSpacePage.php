<?php
/*
Template Name: markSpacePage

 */

 // This code snippet based on page.php.

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		<h2>This is a test for markSpacePage</h2>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<!-- comments section deleted -->
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>