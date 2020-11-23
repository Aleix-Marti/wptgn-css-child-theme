<?php
/**
* Template Name: Full Page
*
* @package Human
* @subpackage Human
* @since Human 1.0
*
*/

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'fullpage' );


		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer('fullpage');
