<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset') ?>" />
<title><?php

	global $page, $paged;

	wp_title( '|', true, 'right' );

	bloginfo( 'name' );

	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'pink_and_purple' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php

	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>
</head>

<body <?php body_class(); ?> >
  <div id="page">
    <div id="header"><a href="<?php echo home_url(); ?>/"><span id="logo-text-big"><?php bloginfo('name'); ?></span></a><span id="logo-text-small"><?php bloginfo('description'); ?></span></div>
    <?php wp_nav_menu( array( 'fallback_cb' => 'pink_and_purple_page_menu', 'menu'  => 'primary', 'depth' => 2, 'theme_location' => 'primary', 'before' => '<span class="before-menu-item"></span>', 'after' => '<span class="after-menu-item"></span>') ); ?>
    <div class="clear"></div>
