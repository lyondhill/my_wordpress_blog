<div  class="content">
<?php 	/* Widgetized sidebar, if you have the plugin installed. */
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
<li><h2>Author</h2>
<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
</li>-->

<?php if ( is_404() || is_category() || is_day() || is_month() || is_year() || is_search() || is_paged() ) { ?> <li>

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php home_url(); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>You are currently browsing the <a href="<?php home_url(); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <?php the_time('F, Y'); ?>.</p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php home_url(); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the year <?php the_time('Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p>You have searched the <a href="<?php echo home_url(); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo home_url(); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p>

			<?php } ?>

			</li>
		<?php }?>
		</ul>

<div class="widget"><ul><?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?></ul></div>
        
<div class="widget"><ul><li><h2>Archives</h2><ul><?php wp_get_archives('type=monthly'); ?></ul></li></ul></div>

<div class="widget">

				<li><h2>Meta</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>

			
</div>

<div class="widget"><h2>Search</h2><?php get_search_form(); ?><p>If you can't find something you may want to try searching for it using the box above.</p></div>
<?php endif; ?>

<div class="right"><div class="widget"><h2><a href="#title">Back to Top</a></h2></div></div>

<div id="notfooter">
<p><?php home_url('name'); ?> is proudly powered by <a href="http://wordpress.org/">WordPress</a>, Theme <a href="http://schwarttzy.com/?page_id=752">Mammoth designed by Eric Schwarz</a>
<br /><a href="<?php home_url('rss2_url'); ?>">Entries (RSS)</a> and <a href="<?php home_url('comments_rss2_url'); ?>">Comments (RSS)</a>.
<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
</p>
</div>
</div>