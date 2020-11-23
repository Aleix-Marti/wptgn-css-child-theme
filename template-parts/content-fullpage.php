<?php
/**
 * Template part for displaying full-page pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
	<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
	<header class="entry-header fullpage-header">
		<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>
	<?php endif; ?>

	<div class="entry-content full-container">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Post title. Only visible to screen readers. */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);
		// wp_link_pages(
		// 	array(
		// 		'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
		// 		'after'  => '</div>',
		// 	)
		// );
		?>
	</div><!-- .entry-content.full-container -->

	<footer class="entry-footer">
		<img src="<?php echo get_stylesheet_directory_uri().'/assets/WPTarragona-logo_small.png' ?>">
	</footer>
	<!-- .entry-footer -->


</article><!-- #post-<?php the_ID(); ?> -->