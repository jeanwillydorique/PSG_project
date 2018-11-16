<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mon_theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


		<div class="slideshow">
		<?php 
		echo do_shortcode('[smartslider3 slider=2]');
		?>
		</div>

		<div class="productHomeDisplay">
		<?php
		echo do_shortcode('[show_productshomepage number=5]');
		?>
		<div>
		<?php /*
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );


		endwhile; // End of the loop.
		*/?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();