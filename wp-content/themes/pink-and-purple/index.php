<?php

get_header(); ?>

    <div id="content">
      <div class="edge-top"></div>
      <div class="middle">
        <div id="column-primary">

			<?php get_template_part( 'loop', 'index' ); ?>
			
		<div class="prevnext">
<?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>
       </div>	
        </div>
        <?php get_sidebar(); ?>
        <div class="clear"></div>
      </div>
      <div class="edge-bottom"></div>
    </div>
<?php get_footer(); ?>
