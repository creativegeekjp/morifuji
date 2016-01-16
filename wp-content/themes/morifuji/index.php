<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package morifuji
 */
 
get_header(); ?>

	<div id="primary" class="content-area">

		<?php get_template_part( 'parts/breadcrumbs' ); ?>

		<main id="main" class="site-main" role="main">

		<?php
		$id=15; 
		$post = get_post($id); 
		$content = apply_filters('the_content', $post->post_content); 
		echo $content; 
		?>

		<?php if ( have_posts() ) : ?>
			
			

			<?php /* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

				<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>

			<?php endwhile; ?>
			
			</ul>
			</div>

		<?php else :

			get_template_part( 'parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->

		<?php get_template_part( 'parts/footer' ); ?>

	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
