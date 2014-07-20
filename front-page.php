<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>


		
	
			<div id="landing-four-columns" class="landing-grid-container">
				<ul class="landing-rig landing-columns-4">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'contentLanding', 'page' ); ?>
					<?php endwhile; // end of the loop. ?>
				</ul>
			</div>



<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>