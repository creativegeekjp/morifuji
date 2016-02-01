<?php
/**
 * The template for displaying  Page Set C.
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package morifuji
 */
/*
Template Name: Page C
*/

get_header(); ?>

	<div id="primary" class="content-area">

	    <?php get_template_part('parts/breadcrumbs') ?>
		<main id="main" class="page-c site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'parts/content', 'page-c' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

		<?php get_template_part( 'parts/footer' ); ?>

	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
