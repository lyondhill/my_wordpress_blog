<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
get_header();
?>



 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="info">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="info">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="info">Archive for <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="info">Archive for <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="info">Archive for <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="info">Author Archive</h2>
	  <?php } elseif (is_404()) { ?>
		<h2 class="info">Error 404 - Page not found...</h2>
	  <?php } elseif (is_search()) { ?>
		<h2 class="info">You are searching on "<?php echo $_GET["s"]; ?>".</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="info">Blog Archives</h2>
 	  <?php } ?>
	  

<?php 
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } 
      else { $$value['id'] = get_settings( $value['id'] ); } 
} ?>

<?php if(is_home() && $theme_home_welcome_select=="Enable") { $str = stripslashes($theme_home_welcome);    echo '<h2 class="info">'. $str .'</h2>'; } ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">

	 <h1 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	 
	 <?php if ( is_page() ) { } else { ?>
		  <p class="meta">
		  <?php if($theme_author=="Enable") { ?> <?php the_author(); ?> | <?php } the_date('','',''); ?> in <?php if ( is_page() ) { echo "A Page"; } else { ?> <?php the_category(',') ?> <?php }?> | <a href="<?php the_permalink() ?>#respond" rel="bookmark"><?php comments_number(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')) . '</a>'; ?></a>
		  </p>
		  
		  <?php the_tags(__('<p class="meta">Tags: '), ', ', '</p>'); ?>
	 <?php }?>
	 
      <?php edit_post_link(__('Edit Post'), '<p><strong class="edit">', '</strong></p>'); ?> 
	    

	 <div class="storycontent">
		  
		<?php the_content(__('(more...)')); ?>
		
	 </div>


	 <div class="feedback">
		<?php wp_link_pages(); ?>
      </div>

</div>

<hr/>

<?php comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<div class="post">
	<h3 class="info"><?php _e('Sorry, no posts matched your criteria. You might want to search (again)?'); ?></h3>
</div>
<?php endif; ?>


<?php if (is_single() || is_page()) {} else {?>
<p class="nav_link">
	<?php posts_nav_link(' &nbsp; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>
</p>
<?php } ?>

<?php get_footer(); ?>
