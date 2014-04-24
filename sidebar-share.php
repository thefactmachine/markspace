<?php

?>
<aside id="social-icons" class="widget clear">
	<h3 class="widget-title">SHARE</h3>
	<?php 
		$CurrentPageURL = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; 
		// twitter

		$twStem = "http://twitter.com/share?text=";
		$twText = "Fresh%20from%20The%20Fact%20Machine";
		$twHref = $twStem . $twText . "&url=" . $CurrentPageURL;

		// facebook
		$fbStem = "https://www.facebook.com/sharer/sharer.php?u=";
		$fbHref = $fbStem . $CurrentPageURL;

		//Linked in
		$liStem = "https://www.linkedin.com/shareArticle?mini=true&url=";
		$liSuffix = "&title=&summary=&source=";
		$liHref = $liStem . $CurrentPageURL . $liSuffix;

		//google plus
		$gpStem = "https://plus.google.com/share?url=";
		$gpHref = $gpStem . $CurrentPageURL;

	?>
	<ul>
		<li class="social-twitter">
			<a href="<?php echo $twHref;?>" target="_blank">Tweet this</a>
		</li>
		<li class="social-facebook">
			<a href="<?php echo $fbHref;?>" title="Share on Facebook" target="_blank">Share on Facebook</a>
		</li>
		<li class="social-linkedin">
			<a  href="<?php echo $liHref;?>"title="Check out Red 30's photos on Flickr" target="_blank">Share on Linked In</a>
		</li>
		<li class="social-google">
			<a href="<?php echo $gpHref;?>" title="Get in touch with Red 30" target="_blank">Share on Google +</a>
		</li>
	</ul>
</aside>