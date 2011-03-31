<?php

get_header(); ?>

    <div id="content">
      <div class="edge-top"></div>
      <div class="middle">
        <div id="column-primary">

				<h1 class="page-title"><?php
					printf( __( 'Category Archives: %s', 'pink_and_purple' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

				get_template_part( 'loop', 'category' );
				?>

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
