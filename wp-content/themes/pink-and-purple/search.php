<?php

get_header(); ?>

    <div id="content">
      <div class="edge-top"></div>
      <div class="middle">
        <div id="column-primary">


<?php if ( have_posts() ) : ?>
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'pink_and_purple' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
				<div id="post-0" class="post no-results not-found">
					<h2 class="entry-title"><?php _e( 'Nothing Found', 'pink_and_purple' ); ?></h2>
					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'pink_and_purple' ); ?></p>
						<?php get_search_form(); ?>
					</div>
				</div>
<?php endif; ?>

       
        </div>
        <?php get_sidebar(); ?>
        <div class="clear"></div>
      </div>
      <div class="edge-bottom"></div>
    </div>

<?php get_footer(); ?>
