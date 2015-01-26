<?php
/**
 * @package My Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( has_post_thumbnail() ) { ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail( ); ?>
			</div>
		<?php } ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php my_theme_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			if ( $post->post_excerpt ) {
				the_excerpt();
				echo sprintf( '<div class="continue_btn"><a href="%s" class="more-link" rel="bookmark">Continue Reading'.the_title( '<span class="screen-reader-text">"', '"</span>', false ).'</a></div>', esc_url(get_permalink()) );
			} else {
				the_content( sprintf(
					__( 'Continue Reading %s', 'testtheme' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			}
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'my-theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php my_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->