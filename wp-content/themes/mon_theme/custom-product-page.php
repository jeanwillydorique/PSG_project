<?php
 /* Template Name: ProductPage Template */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();?>

		<section>
			<div class=contenue>
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
