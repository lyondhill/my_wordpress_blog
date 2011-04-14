<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
?>
<!-- begin sidebar -->
<div id="sidebar" class="sidebar">


<?php 
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } 
      else { $$value['id'] = get_settings( $value['id'] ); } 
} ?>

<ul>
		<?php if($theme_sidebar_rss=="Disable") {} else { ?>
			<li>
			  <h2>
			    RSS feed
			  </h2>
			  <ul>
			    <li>
				<a class="rss"  href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('RSS'); ?></a>
			    </li>
			    <li>
				<a class="rss_comments"  href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a>
			    </li>
			  </ul>
			</li>
		<?php } ?>
		
<?php 	/* Widgetized sidebar, if you have the plugin installed. */
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	
	
<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>

 
<li id="search">
   <form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
	<div>
		<input type="text" name="s" id="s" size="15" />
		<input id="searchsubmit" type="submit" value="<?php _e('Search'); ?>" />
	</div>
	</form>
</li>

	
<li id="archives">
    <h2><?php _e('Archives:'); ?></h2>
	<ul>  
	  <?php wp_get_archives('type=monthly'); ?>
	</ul>
 </li>
<?php endif; ?>
</ul>


</div>
<!-- end sidebar -->
