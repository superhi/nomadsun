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

				<!-- here we have our header -->
				<div class="flex">
					
					<!-- our header background image -->
					<div class="w-60 min-vh-100 cover bg-center" style="<?php if( get_field('hero_image') ): ?>background-image: url(<?php the_field('hero_image'); ?>); <?php endif; ?>"></div>
					
					<!-- our header content -->
					<div class="w-40 flex items-center justify-center ph4">
						<div class="tc">
							<p class="f6 archivo mt0 mb5 ttu tracked">
								<?php echo date("F Y", strtotime(get_field('date'))); ?>
							</p>
							<!-- standard wordpress data -->
							<h1 class="f1 archivo mt0 mb3 ttu">
								<?php the_title(); ?>
							</h1>
							<p class="f1 tenor mt0 mb4 ttu">
								<?php the_field('subhead'); ?>
							</p>
							<!-- specific to this component -->
							<p class="f4 cardo i measure center">
								<?php the_sub_field('header_intro'); ?>
							</p>
						</div>
					</div>

				</div>

			<!-- if it’s a text component, show us the data -->
			<?php elseif( get_row_layout() == 'text_block' ): ?>
				<!-- this is our text block  -->
				<div class="pv6 measure-wide center text-block f4">
					<?php the_sub_field('text_content'); ?>
				</div>

				
			<?php endif; 
		endwhile; endif; ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //nomadsun_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
