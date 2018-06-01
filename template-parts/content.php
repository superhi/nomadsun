<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomadsun
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<!-- if we have some flexible content, let’s loop through it -->
		<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row();
			// if it’s a header, go through the data
			if( get_row_layout() == 'header' ): ?>

				<!-- here we separate our header into its own component file -->
				<?php get_template_part( 'template-parts/content-header' ); ?>

			<!-- if it’s a text component, show us the data -->
			<?php elseif( get_row_layout() == 'text_block' ): ?>

				<!-- here we separate our text into its own component file -->
				<?php get_template_part( 'template-parts/content-text' ); ?>
			
			<?php elseif ( get_row_layout() == 'gallery' ): ?>

				<!-- here we put in our gallery component -->
				<?php get_template_part( 'template-parts/content-gallery' ); ?>

			<?php endif; 
		endwhile; endif; ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<!-- here we have our social link component -->
		<?php get_template_part( 'template-parts/content-share' ); ?>
		<!-- here we include our explore component -->
		<?php get_template_part( 'template-parts/content-explore' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
