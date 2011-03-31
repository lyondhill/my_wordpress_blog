<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'pink_and_purple' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'pink_and_purple' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="post">
            <?php the_post_thumbnail('post-thumbnail', array("class" => "post-thumbnail")); ?>
            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
            <div class="bar">
              <span class="edge-left"></span>
              <span class="middle">
                <span class="created"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>"><?php the_author(); ?></a><span class="date"><a href="<?php the_permalink(); ?>"><?php the_date(); ?></a></span></span>
                <span class="tags">
                <?php $g_tags = wp_get_post_tags($post->ID); ?>
                  <?php $g_maxTags = 5; $i = 0; ?>
                  <?php foreach($g_tags as $g_tag) {
                          if($i >= $g_maxTags) break;
                          if($i > 0) echo ", ";
                          echo "<a href=\"".get_tag_link($g_tag->term_id)."\">{$g_tag->name}</a>";
                          $i++;
                        }
                  ?>
                </span>
              </span>
              <span class="edge-right"></span>
              <span class="clear"></span>
            </div>
          </div>
          <div class="spearator"></div>

<?php endwhile; ?>

<?php if (  $wp_query->max_num_pages > 1 ) : ?>
<div id="page-navi"><?php if ( function_exists("wp_pagenavi") ) wp_pagenavi(); ?></div>
<?php endif; ?>
