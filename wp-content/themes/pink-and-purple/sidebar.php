				<!-- sidebar -->
				<div id="column-right">
						
	<?php 	/* Widgetized sidebar, if you have the plugin installed. */
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-widget-area') ) : ?>

				<h3><span>Category</span></h3>
				<ul>
			        <?php wp_list_categories('show_count=1&title_li='); ?>
				</ul>				
			
				<h3><span>Archives</span></h3>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
	
			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
	
				<h3><span>Meta</span></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>	
			<?php } ?>

			<?php endif; ?>
			
					
				</div>
				<!-- /sidebar -->


<div class="clear"></div>

