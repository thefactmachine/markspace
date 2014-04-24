<?php

?>
<aside class="widget clear">
	<h3 class="widget-title">Recent Posts</h3>

	<ul class="recent-posts-ul">
	<?php
		$myPosts = new WP_Query();
		$myPosts->query('showposts=5');
		while ($myPosts->have_posts()) : $myPosts->the_post();
			echo "<li class=\"recent-posts-li\">";
			$permalink = get_permalink( $id );
				echo "<a href=\""   . $permalink .  "\"target=\"_blank\">";
				echo the_title() . "</a>"	;
			echo "</li>";			
		endwhile;
	?>
	</ul>
</aside>
