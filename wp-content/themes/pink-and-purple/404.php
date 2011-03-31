<?php

get_header(); ?>

    <div id="content">
      <div class="edge-top"></div>
      <div class="middle">
        <div id="column-primary">

			<div id="post-0" class="post error404 not-found">
				<h1 class="entry-title"><?php _e( 'Not Found', 'pink_and_purple' ); ?></h1>
				<div class="entry-content">
					<p><?php _e( 'Not Found', 'pink_and_purple' ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</div>

        </div>

        <div class="clear"></div>
      </div>
      <div class="edge-bottom"></div>
<?php get_footer(); ?>
