<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/1">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>
    <?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); //saumen6761 dynamic pics for photoblogging?>
</head>
  <body>
<div id="header">
	<div id="logo">
		<div style="float:left;width:400px;"><h1><a href="<?php bloginfo('siteurl'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1></div>
		<div class="description"><h2><?php bloginfo('description'); ?></h2></div>
		</div> 
		<div style="clear:both;"></div>
	<div id="menu">
		<ul>
		<li <?php if(is_home()){echo 'class="current_page_item"';}?>><a href="<?php bloginfo('siteurl'); ?>" title="Home">Home</a></li>
	     <?php wp_list_pages('title_li=&depth=1');?>
		</ul>
	</div>
</div>
<div id="headimage">
	<div id="show" class="slideshow">
			<img src="<?php bloginfo('template_directory'); ?>/img/header.jpg" alt="Himachal View theme" />
		 </div>	
</div>