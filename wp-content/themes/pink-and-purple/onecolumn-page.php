<?php

get_header(); ?>

		<div id="container" class="one-column">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'pink_and_purple' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'pink_and_purple' ), '<span class="edit-link">', '</span>' ); ?>
					</div>
				</div>

				<?php comments_template( '', true ); ?>

<?php endwhile; ?>

			</div>
		</div>

<?php get_footer(); ?>
