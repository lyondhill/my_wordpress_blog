<?php

if ( ! isset( $content_width ) )
	$content_width = 620;

add_action( 'after_setup_theme', 'pink_and_purple_setup' );
add_editor_style();

if ( ! function_exists( 'pink_and_purple_setup' ) ):

function pink_and_purple_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	load_theme_textdomain( 'pink_and_purple', TEMPLATEPATH . '/languages' );

	$locale = get_locale();
	$locale_file = TEMPLATEPATH . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );


	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'pink_and_purple' ),
	) );
}
endif;

function pink_and_purple_init_method() {
    if (!is_admin()) {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js');
        wp_enqueue_script( 'jquery' );
    }


if ( !is_admin() ) {
   wp_register_script('custom_script_1',
       get_template_directory_uri() . '/js/jquery.ddmenu.js');       
   wp_enqueue_script('custom_script_1');
   }       
}

add_action('init', 'pink_and_purple_init_method');

add_action('wp_head', 'jsPngFix');
function jsPngFix() {
  echo '  <script type="text/javascript" src="'.get_template_directory_uri().'/js/jquery.pngFix.pack.js"></script>'."\n";
  echo '  <script type="text/javascript">'."\n";
  echo '      $(document).ready(function(){'."\n";
  echo '          $(document).pngFix();'."\n";
  echo '      });'."\n";
  echo '  </script>'."\n";
}

if ( ! function_exists( 'pink_and_purple_admin_header_style' ) ) :

function pink_and_purple_admin_header_style() {
?>
<style type="text/css">
/* Shows the same border as on front end */
#headimg {
	border-bottom: 1px solid #000;
	border-top: 4px solid #000;
}
</style>
<?php
}
endif;

function pink_and_purple_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'pink_and_purple_page_menu_args' );

function pink_and_purple_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'pink_and_purple_excerpt_length' );

function pink_and_purple_continue_reading_link() {
	return ' <a href="'. get_permalink() . '">' . __( 'Read more <span class="meta-nav">&rarr;</span>', 'pink_and_purple' ) . '</a>';
}

function pink_and_purple_auto_excerpt_more( $more ) {
	return ' &hellip;' . pink_and_purple_continue_reading_link();
}
add_filter( 'excerpt_more', 'pink_and_purple_auto_excerpt_more' );

function pink_and_purple_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= pink_and_purple_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'pink_and_purple_custom_excerpt_more' );

function pink_and_purple_remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
add_filter( 'gallery_style', 'pink_and_purple_remove_gallery_css' );

if ( ! function_exists( 'pink_and_purple_comment' ) ) :

function pink_and_purple_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, 40 ); ?>
			<?php printf( __( '%s <span class="says">says:</span>', 'pink_and_purple' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
		</div>
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em><?php _e( 'Your comment is awaiting moderation.', 'pink_and_purple' ); ?></em>
			<br />
		<?php endif; ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php

				printf( __( '%1$s at %2$s', 'pink_and_purple' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'pink_and_purple' ), ' ' );
			?>
		</div>

		<div class="comment-body"><?php comment_text(); ?></div>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div>
	</div>

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'pink_and_purple' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'pink_and_purple'), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;

function pink_and_purple_widgets_init() {
    register_sidebar(array(
		'name' => __( 'Sidebar Widget Area' ),
		'id' => 'sidebar-widget-area',
		'description' => __( 'The sidebar widget area' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',        
    ));
}

add_action( 'widgets_init', 'pink_and_purple_widgets_init' );

function pink_and_purple_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'pink_and_purple_remove_recent_comments_style' );

if ( ! function_exists( 'pink_and_purple_posted_on' ) ) :

function pink_and_purple_posted_on() {
	printf( __( '<span class="%1$s">Posted on</span> %2$s <span class="meta-sep">by</span> %3$s', 'pink_and_purple' ),
		'meta-prep meta-prep-author',
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'pink_and_purple' ), get_the_author() ),
			get_the_author()
		)
	);
}
endif;

function pink_and_purple_page_menu($o_args) {
  global $wpdb;
  global $post;
  $_result  = '<div class="menu-main-container">';
  $_result .= '<ul id="menu-main" class="menu">';
  $_res = $wpdb->get_results('SELECT * FROM `'.$wpdb->posts.'` WHERE `post_type` = \'page\' AND `post_parent` = \'0\' AND `post_status` = \'publish\' ORDER BY `menu_order`');
  foreach($_res as $_row) {
    $_result .= '<li id="menu-item-'.$_row->ID.'" class="menu-item';
    if(isset($post->ID)) {
    if($_row->ID == $post->ID) $_result .= ' current-menu-item';
    }
    $_result .= '">';
    $_result .= $o_args['before'];
    $_result .= '<a href="'.get_permalink($_row->ID).'">';
    $_result .= apply_filters('the_title', $_row->post_title);
    $_result .= '</a>';
    $_result .= $o_args['after'];
    $_subres = $wpdb->get_results('SELECT * FROM `'.$wpdb->posts.'` WHERE `post_type` = \'page\' AND `post_parent` = \''.$_row->ID.'\' AND `post_status` = \'publish\' ORDER BY `menu_order`');
    if( count($_subres) ) {
      $_result .= '<ul class="sub-menu">';
      foreach($_subres as $_subrow) {
        $_result .= '<li id="menu-item-'.$_subrow->ID.'" class="menu-item';
        if(isset($post->ID)) {
        if($_row->ID == $post->ID) $_result .= ' current-menu-item';
        }
        $_result .= '">';
        $_result .= $o_args['before'];
        $_result .= '<a href="'.get_permalink($_subrow->ID).'">';
        $_result .= apply_filters('the_title', $_subrow->post_title);
        $_result .= '</a>';
        $_result .= $o_args['after'];
        $_result .= '</li>';        
      }
      $_result .= '</ul>';
    }
    $_result .= '</li>';
  }
  $_result .= '</ul>';
  $_result .= '</div>';
  echo $_result;
}

if ( ! function_exists( 'pink_and_purple_posted_in' ) ) :

function pink_and_purple_posted_in() {

	$tag_list = get_the_tag_list( '', ', ' );
	if ( $tag_list ) {
		$posted_in = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'pink_and_purple' );
	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
		$posted_in = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'pink_and_purple' );
	} else {
		$posted_in = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'pink_and_purple' );
	}

	printf(
		$posted_in,
		get_the_category_list( ', ' ),
		$tag_list,
		get_permalink(),
		the_title_attribute( 'echo=0' )
	);
}

endif;

