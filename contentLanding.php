<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	

	<li id="post-<?php the_ID(); ?>" <?php post_class(); ?> >


					
				<a href="<?php the_permalink(); ?>" >			
					<?php
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
					
					if ($image) : ?>
	    				<img src="<?php echo $image[0]; ?>" alt="" />
					<?php endif; ?> 






					<h3 class="entry-landing">
						<?php the_title(); ?>
					</h3>
					<?php the_excerpt(); ?>
				</a> 			
	</li>
