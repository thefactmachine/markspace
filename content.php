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

	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">
			
			<!--  the_post_thumbnail() displays the featured image. 
			<?php the_post_thumbnail(); ?>
			-->	
			
			<?php if ( is_single() ) : ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<h3 class="markTag">Tags: &nbsp;</h3>
				<?php
					if(get_the_tag_list()) {
	    				echo get_the_tag_list('<ul class="markTag"><li class = "markTag">',
	    					'</li><li class = "markTag">','</li></ul>');
					}
				?>
			<?php else : ?>
			
				<!-- Orginally was the following (inside h1 tags):
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>-->			
				<h1 class="entry-title">
					<?php the_title(); ?>
				</h1>
				
				<!-- Added this to print the tags at the top of a post.  Got the code snippet from twentytwelve_entry_meta() -->
				

				<h3 class="markTag">Tags: &nbsp;</h3>
				<?php
					if(get_the_tag_list()) {

	    				echo get_the_tag_list('<ul class="markTag"><li class = "markTag">',
	    					'</li><li class = "markTag">','</li></ul>');
					}
				?>
				

			<?php endif; // is_single() ?>
			

			<?php if ( is_search() || is_archive() || is_category() || is_tag() ) : // Only display Excerpts for Search ?>
				<div class="index-fi" >
					<?php the_post_thumbnail(); ?>
				</div>
			<?php endif; ?>


			<?php if ( comments_open() ) : ?>
				<div class="comments-link">
					<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
				</div><!-- .comments-link -->
			<?php endif; // comments_open() ?>
		</header><!-- .entry-header -->

		<!-- displays insert for the following page types. -->
		<?php if ( is_search() || is_archive() || is_category() || is_tag() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>



		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
				<div class="author-info">
					<div class="author-avatar">
						<?php
						/** This filter is documented in author.php */
						$author_bio_avatar_size = apply_filters( 'twentytwelve_author_bio_avatar_size', 68 );
						echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
						?>
					</div><!-- .author-avatar -->
					<div class="author-description">
						<h2><?php printf( __( 'About %s', 'twentytwelve' ), get_the_author() ); ?></h2>
						<p><?php the_author_meta( 'description' ); ?></p>
						<div class="author-link">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentytwelve' ), get_the_author() ); ?>
							</a>
						</div><!-- .author-link	-->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			<?php endif; ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
