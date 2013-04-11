<?php global $link; ?>
<?php
	echo stylesheet_tag("plugins/article_toolbar/toolbar.css");
	print_user_stylesheet($link)
?>

			<button  class="button_nav" title="Subscribe To Feed" onclick="quickMenuGo('qmcAddFeed')">
			<img src="plugins/article_toolbar/images/feed.png" alt="Subscribe To Feed"></button>
			
			<button class="button_nav" title="Toggle Expanded View" onclick="toggle_cdm_expanded()">
			<img src="plugins/article_toolbar/images/list.png" alt="Toggle Expanded View"></button>

			<button class="button_nav" title="Mark feed as read" onclick="catchupCurrentFeed()">
			<img src="plugins/article_toolbar/images/read.png" alt="Mark as read"></button>

			<button class="button_nav" title="Refresh Feed" onclick="viewCurrentFeed()">
			<img src="plugins/article_toolbar/images/refresh.png" alt="Refresh Feed"></button>
			
			<button class="button_nav" title="Previous Post" onclick="moveToPost('prev',true)">
			<img src="plugins/article_toolbar/images/up.png"></button>
			
			<button class="button_nav" title="Next Post" onclick="moveToPost('next',true)">
			<img src="plugins/article_toolbar/images/down.png"></button>

