<?php

get_header(); ?>

    <div id="content">
      <div class="edge-top"></div>
      <div class="middle">
        <div id="column-primary">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>

					<div class="entry-meta">
						<?php pink_and_purple_posted_on(); ?>
					</div>

					<div class="entry-content">
						<?php the_content(); ?>
						<div class="clear"></div>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'pink_and_purple' ), 'after' => '</div>' ) ); ?>
					</div>

<?php if ( get_the_author_meta( 'description' ) ) : ?>
					<div id="entry-author-info">
						<div id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'pink_and_purple_author_bio_avatar_size', 60 ) ); ?>
						</div>
						<div id="author-description">
							<h2><?php printf( esc_attr__( 'About %s', 'pink_and_purple' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
							<div id="author-link">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
									<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'pink_and_purple' ), get_the_author() ); ?>
								</a>
							</div>
						</div>
					</div>
<?php endif; ?>

					<div class="entry-utility">
						<?php pink_and_purple_posted_in(); ?>
						<?php edit_post_link( __( 'Edit', 'pink_and_purple' ), '<span class="edit-link">', '</span>' ); ?>
					</div>
				</div>

				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'pink_and_purple' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'pink_and_purple' ) . '</span>' ); ?></div>
				</div>

				<?php comments_template( '', true ); ?>

<?php endwhile; ?>

        </div>
        <?php get_sidebar(); ?>
        <div class="clear"></div>
      </div>
      <div class="edge-bottom"></div>
    </div>
<?php get_footer(); ?>
