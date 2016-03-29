<?php
/**
 * Home Page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package morifuji
 */

?>

<article id="pagePadding post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<header class="entry-header page-heading">
		
	</header><!-- .entry-header -->

	<div class="entry-content">
		
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'morifuji' ),
				'after'  => '</div>',
			) );
		?>
		
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit page', 'morifuji' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
