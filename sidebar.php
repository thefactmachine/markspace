<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<div id="secondary" class="widget-area" role="complementary">
	<?php
		require_once('sidebar-share.php');
		require_once('sidebar-recent.php');
		require_once('sidebar-cc.php');
		require_once('sidebar-github.php');
	?>
</div><!-- #secondary -->





