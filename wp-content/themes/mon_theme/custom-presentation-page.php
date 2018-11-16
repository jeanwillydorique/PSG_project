<?php
 /* Template Name: PresentationPage Template */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();?>

		<section class="presentationsection">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> 
			<div class=presentation>
				<?php
					the_content();
				?>
			</div>

		</section>
		<?php
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
