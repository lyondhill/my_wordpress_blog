<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
 
 
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
 
      
function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
      <cite class="comment-author time">
         <?php edit_comment_link(__('Edit Comment'), '<strong class="edit">', '</strong>'); ?> <?php echo get_avatar($comment,$size='16',$default='<path_to_url>' ); ?> 

         <?php printf(__('Comment by %s'), get_comment_author_link()) ?> &#8212;
         
         <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a> &nbsp;
         
         <?php comment_reply_link(array_merge( $args, array('reply_text' => 'Reply', 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
         
      </cite>
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
         <br />
      <?php endif; ?>

      <div class="comment-meta commentmetadata"></div>

      <?php comment_text() ?>

     </div>
<?php
        }
      
        
require_once(TEMPLATEPATH . '/controlpanel.php');


?>
