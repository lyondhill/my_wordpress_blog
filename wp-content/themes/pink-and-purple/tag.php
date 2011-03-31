<?php

get_header(); ?>

    <div id="content">
      <div class="edge-top"></div>
      <div class="middle">
        <div id="column-primary">

				<h1 class="page-title"><?php
					printf( __( 'Tags archive: %s'), '<span>' . single_tag_title( '', false ) . '</span>' );
				?></h1>

<?php

 get_template_part( 'loop', 'tag' );
?>

		<div class="prevnext">
<?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>
       </div>	

        </div>
        <?php get_sidebar(); ?>
        <div class="clear"></div>
      </div>
      <div class="edge-bottom"></div>
<?php get_footer(); ?>
