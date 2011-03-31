<?php get_header(); ?>

	<div id="menuz">
    	<div id="title"><h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1><h2><?php bloginfo('description');?></h2></div>
        <ul id="menulist">
        <?php if ( has_nav_menu( 'menu' ) ) : wp_nav_menu(); else : ?>
		<?php wp_list_pages( 'title_li=&depth=-0' ); ?>
        <?php endif; ?>
		</ul>
    </div>

<div id="center">
<div class="content">
<div id="404 Error">
<div class="label1">404 Error</div><!--End label-->
		<p>Sorry, but you are looking for something that isn&#8217;t located here.</p>
        <p>The 404 or Not Found error message is a HTTP standard response code indicating that the client was able to communicate with the server, but the server could not find what was requested. 404 errors should not be confused with "server not found" or similar errors, in which a connection to the destination server could not be made at all. A 404 error indicates that the requested resource may be available again in the future.</p>
        <p>Try searching for what you where looking for using the search box below.</p>
		<?php get_search_form(); ?>
</div><!--End post-->
</div><!--End content-->


<?php get_sidebar(); ?>

<div id="endspacer">
</div>

</div><!--End center-->

<?php get_footer(); ?>