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
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="content">
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="label1"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php if ( get_the_title() ) { the_title();} else { echo '(No Title)';} ?></a></div><!--End label-->

<?php the_content('Read the rest of this entry &raquo;'); ?>
<?php wp_link_pages(); ?>
    
<div class="clearz"><div class="tags">
<?php if ( is_home()) : ?>
<?php if ('open' == $post->comment_status) : ?>
<?php comments_popup_link('Leave A Comment', '1 Comment', '% Comments'); ?>,
<?php endif; ?><?php endif; ?>
Written on <?php the_time('F jS, Y') ?> <?php if ( is_page()) : ?><?php else : ?>, <?php the_category(', ') ?> <?php the_tags('Tags: ', ', ', '<br />'); ?><?php endif; ?>
</div><!--End tags--></div><!--End clearz-->
</div><!--End post-->
</div><!--End content-->

<?php if ('open' == $post->comment_status) : ?>
<?php comments_template(); ?>
<?php endif; ?>
<?php endwhile; ?>   

<?php if ( is_home()) : ?>
<div class="content" >
<div class="label1"><?php next_posts_link('Older <br>&lt;&lt; Entries'); ?></div>
<div class="label2"><?php previous_posts_link('Newer Entries &gt;&gt;') ?></div>
</div><?php endif; ?>

<?php if ( is_search()) : ?>
<div class="content" >
<div class="label1"><?php next_posts_link('Older <br>&lt;&lt; Entries'); ?></div>
<div class="label2"><?php previous_posts_link('Newer Entries &gt;&gt;') ?></div>
</div>
<?php endif; ?>
    
<?php else : ?>
<div class="content">
<div class="label">Not Found</div>
<p>Sorry, but you are looking for something that isn't here.</p>
<?php get_search_form(); ?>
</div>  
<?php endif; ?>

<?php get_sidebar(); ?>

<div id="endspacer">
</div>

</div><!--End center-->

<?php get_footer(); ?>