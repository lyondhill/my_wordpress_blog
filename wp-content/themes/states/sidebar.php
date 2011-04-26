<div id="sidebar" class="yui-b secondary">
	<ul>
		<?php 	/* Widgetized sidebar, if you have the plugin installed. */
				if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

		<li class="widget">
			<div class="widget-container">
				<div class="widget-title">Archives</div>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</div>
		</li>

		<li class="widget">
			<ul class="widget-container">
				<?php wp_list_categories('show_count=1&title_li=<div class="widget-title">Categories</div>'); ?>
			</ul>
		</li>
		
		<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>

			<li class="widget">
				<div class="widget-container">
					<div class="widget-title">Meta</div>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<li><a href="http://mail.foplodge6.net"><abbr title="Email hosted on gmail">e-mail</abbr></a></li>
						<?php wp_meta(); ?>
					</ul>
				</div>
			</li>
		<?php } ?>

		<?php endif; ?>
	</ul>
</div>