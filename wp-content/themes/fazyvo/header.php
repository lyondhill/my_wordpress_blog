<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
?>

<?php 
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } 
      else { $$value['id'] = get_settings( $value['id'] ); } 
} ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
		
		
		
		
		
		.header_container {
			background:#000  <?php if($theme_header_bg==4 || $theme_header_bg==5 || $theme_header_bg==6 ){ ?>url(<?php bloginfo('stylesheet_directory'); ?>/images/header_<?php if(isset($theme_header_bg)){ echo $theme_header_bg; } else{echo"1";} ?>.jpg)<?php } ?>;
		}
		
		#header {
			background: url(<?php bloginfo('stylesheet_directory'); ?>/images/header_<?php if(isset($theme_header_bg)){ echo $theme_header_bg; } else{echo"1";} ?>.jpg) no-repeat <?php if($theme_header_bg==4 || $theme_header_bg==5 || $theme_header_bg==6 ){ ?> 0px -151px<?php } ?>;
		}
		
		
		<?php
			if($theme_colours=="2"){
			$colors = array("21759B", "21759B", "D54E21", "DFDFDF"); // WordPress
			} elseif($theme_colours=="3") {
			$colors = array("111", "555", "222"); // Grey
			} elseif($theme_colours=="4") {
			$colors = array("1693A5", "00CDAC", "02AAB0", "C3FF68"); // Green Blue - http://www.colourlovers.com/palette/437077/gemtone_sea__shore
			} elseif($theme_colours=="5") {
			$colors = array("8F8B1D", "8bb829", "8F8B1D"); // Green http://www.colourlovers.com/palette/785908/Starlight_Theatre
			} else {
			$colors = array("094364", "2f83b2", "0c5985"); // Default Blue
			} 
		?>
		
		.content h1 a, .sidebar  h2, .sidebar h2 a, #footer p span a.content, #pagesmenu .current_page_item a {
			color:#<?php echo $colors[0] ?>;
		}
	
		.content a, .content th, .sidebar a:hover, #footer a:hover, .content #pagesmenu a:hover {
			color:#<?php echo $colors[1] ?>;
		}
		
		.content a:hover {
			color:#<?php echo $colors[2] ?>;
		}
			
		<?php if(isset($colors[3])) { ?>
		
		.content a, .sidebar a, #footer a, .content #pagesmenu a:hover { 
			text-decoration:none;
			border-bottom:1px solid #<?php echo $colors[3] ?>;
		}
		
		.content a:hover { 
			text-decoration:none;
			border-bottom:1px solid #<?php echo $colors[2] ?>;
		}
		
		.content h1 a, .content h1 a:hover {
			border-bottom:none;
			
		}
		
		<?php } ?>
		
		
		
		
		<?php if ( $user_ID ) :?>

/* Logged-in */
.logged-in {
	height:46px;
	padding:0; margin:0;
	background:#464646 url(<?php echo get_option('home'); ?>/wp-admin/images/wp-logo.gif) no-repeat 16px 7px;
	color:#999;
}

.logged-in h1 {
	height:36px;
        margin:0; padding:10px 0 0 55px;
}

</style>

<!--[if lt IE 8]>
<style type="text/css" media="screen">
.logged-in h1{
	height:44px;
	padding-top:2px;
}
</style>
<![endif]-->

<style type="text/css" media="screen">

.logged-in h1 a {
        margin:0; padding:0;
        color:#fff; font:22px Georgia,"Times New Roman","Bitstream Charter",Times,serif; font-weight:normal; text-decoration:none;
}

.logged-in h1 a:hover {
        text-decoration:underline;
}

.logged-in h1 a span {
        font-size:50%;
}

.logged-in p a, .comments_logged-in a { color:#ccc; border:none; }
.logged-in p a:hover, .comments_logged-in a:hover { border:none; text-decoration:underline; color:#fff; }
.logged-in p { margin:-46px 0 0 0; padding:16px 15px 0 0; text-align:right; font:12px "Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif; }

.edit a {
        margin:-5px 0 0 0; padding:4px 10px;
	background:#f2f2f2 url(<?php echo get_option('home'); ?>/wp-admin/images/white-grad.png) repeat-x scroll left top;
        border-color:#bbb; border-style:solid; border-width:1px; -moz-border-radius-bottomleft:11px; -moz-border-radius-bottomright:11px; -moz-border-radius-topleft:11px; -moz-border-radius-topright:11px; -moz-box-sizing:content-box;
        color:#464646; font-family:"Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif; font-size:11px !important; text-decoration:none; text-shadow:0 1px 0 #fff; line-height:1.2em; font-size-adjust:none; font-style:normal; font-variant:normal; font-weight:normal;
cursor:pointer; text-decoration:none !important;
}

.edit a:hover {
        border-color:#666;
	background:#f2f2f2 url(<?php echo get_option('home'); ?>/wp-admin/images/white-grad.png) repeat-x scroll left top;
        color:#000;
}

.comments_logged-in {
	padding:10px 10px 10px 15px;
	background:#333; color:#999;
	-moz-border-radius: 3px; -khtml-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px;
	font:12px "Lucida Grande","Lucida Sans Unicode",Tahoma,Verdana,sans-serif; 
  }
/* // Logged-in */

<?php endif; ?>

	</style>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon_<?php if(isset($theme_favicon)) {echo $theme_favicon;} else {echo'1';} ?>.ico" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>


<?php if($theme_cufon=="Disable") {} else { ?>	
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/cufon-yui.js" type="text/javascript"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/Droid_Sans_400.font.js" type="text/javascript"></script>

	<script type="text/javascript">
	
		Cufon.DOM.ready(function() {
			Cufon.replace(document.getElementById('header').getElementsByTagName('a'), {color: '-linear-gradient(#fff, 0.50=#eee, 0.50=#ccc, #fff)'});
			Cufon.replace(document.getElementById('footer').getElementsByTagName('span'), {color: '-linear-gradient(#<?php echo $colors[0] ?>, 0.50=#<?php echo $colors[1] ?>, 0.50=#<?php echo $colors[0] ?>, #<?php echo $colors[0] ?>)'});
			Cufon.replace(document.getElementById('content').getElementsByTagName('h1'), {color: '-linear-gradient(#<?php echo $colors[0] ?>, 0.55=#<?php echo $colors[1] ?>, 0.55=#<?php echo $colors[0] ?>, #<?php echo $colors[0] ?>)'});
			Cufon.replace('h2')('h3')('h4')('h5')('h6');
		});

	</script>
<?php } ?>

</head>

<body>


<?php if ( $user_ID ) :

		global $userdata;
		get_currentuserinfo();
		?>

			<div class="logged-in">
				<h1>
					<a class="dashboard" href="<?php echo get_option('home'); ?>/wp-admin/"><?php bloginfo('name'); ?> <span>&rarr; Dashboard</span></a>
				</h1>
				<p>
					Howdy, <a href="<?php echo get_option('home'); ?>/wp-admin/profile.php"> <?php echo($userdata->user_login); ?></a> |
					<?php wp_loginout(); ?>
				</p>
			</div>
<?php endif; ?>


<div class="header_container">
	
	<div id="header">
		
		<h1>
			
			<a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a>
			
		</h1>
			
		<?php if($theme_header_tagline_onoff=="Disable") {  } else { ?>
			
		<blockquote>
		<a href="<?php bloginfo('url'); ?>/"><?php bloginfo('description'); ?></a>
		</blockquote>
			
		<?php } ?>
		
	</div>

</div>

<hr/>

<div class="rap">

<div class="content" id="content">
	<?php if($theme_pagesmenu=="Disable") { } else { ?>
	<div id="pagesmenu">
		<ul>
			<?php wp_list_pages('title_li=&depth=1'); ?>
		</ul>
	</div>
	<?php } ?>