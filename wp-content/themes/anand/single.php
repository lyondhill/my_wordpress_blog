<?php get_header();?>
<div id="main">
	<div id="content">
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	        <div class="post" id="post-<?php the_ID(); ?>">
           
            <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            
			      <div class="entry">
				<?php the_content(__('Continue Reading &#187;')); ?>
				<?php wp_link_pages(); ?>
<p class="date"><span class="month"><?php the_time('M') ?></span><span class="day"><?php the_time('d') ?>
</span><span class="year"><?php the_time('Y') ?> </span>
</p>
<div class="meta">
<p>Published by <?php the_author_posts_link() ?> at <?php the_time();?> under <?php the_category(',') ?> <?php edit_post_link(); ?></p>
</div>
              <p class="post-tags">
                <?php if (function_exists('the_tags')) the_tags('Tags: ', ', ', '<br/>'); ?>
              </p>
      			</div>
				<?php if (function_exists('wp_tag_cloud')) {?>
				<h2> <?php _e('Tags'); ?></h2>
				<p><?php wp_tag_cloud(); ?></p>
				<?php } ?>
            <p class="comments">
              <?php comments_popup_link(__('No responses yet'), __('One response so far'), __('% responses so far')); ?>
            </p>
	          <?php comments_template(); // Get wp-comments.php template ?>
	        </div>
      <?php endwhile; else: ?>
          <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
      <p align="center"><?php posts_nav_link(' - ','&#171; Prev','Next &#187;') ?></p>
	</div>
  <?php get_sidebar();?>
  <?php get_footer();?>