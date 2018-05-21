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

	<!-- here we used an inline style attribute to attach our
	hero image as a css background directly onto the element -->

	<!-- here we make the hero have a min-height of 100vh, cover 
	the background, center it, add flexbox and make the content 
	center vertically and horinztally -->
	<section class="hero min-vh-100 cover bg-center flex items-center justify-center" style="<?php if( get_field('hero_image') ): ?>
    background-image: url(<?php the_field('hero_image'); ?>);
	<?php endif; ?>">
		<!-- make the text white and center it -->
		<div class="hero-content white tc">

			<!-- here we use the_permalink() template tag to link
			to our post -->
			<!-- <h1>
				<a href="<?php the_permalink(); ?>" class="white link">
					Go and see <?php the_title(); ?>
				</a>
			</h1> -->

			<!-- our location title -->
			<!-- here we make it bold, have 0 margin and uppercase letters -->
			<h1 class="hero-heading archivo b mt0 mb3 ttu"><?php the_title(); ?></h1>

			<!-- our subheading -->
			<?php if( get_field('subhead') ): ?>
				<!-- here we do a similar thing but with a big margin on the bottom -->
    		<p class="hero-subhead tenor mb6 mt0 ttu"><?php the_field('subhead'); ?></p>
			<?php endif; ?>

			<!-- our formatted date -->
			<?php if( get_field('date') ): ?>
				<!-- here we use the f6 small font size, uppercase text and track
				the date with some subtle spacing -->
				<p class="f6 date archivo ma0 ttu tracked">
					<?php
						// here we convert our date into format that php can
						// work with, and then we format it to be nice + readable
						echo date("F Y", strtotime(get_field('date')));
					?>
				</p>
			<?php endif; ?>

		</div>
	</section>

	<?php
		// if we have some flexible content, let’s loop through it
		if( have_rows('content') ): while ( have_rows('content') ) : the_row();
			// if it’s a header, go through the data
			if( get_row_layout() == 'header' ):
				// share data between the hero and header
			?>

			<header class="entry-header flex">
				<!-- our header image goes in here -->
				<!-- w-60 makes our hero image 60% width -->
				<div class="w-60">
					<div class="aspect-ratio--4x3 cover bg-right" style="<?php if( get_field('hero_image') ): ?>background-image: url(<?php the_field('hero_image'); ?>);<?php endif; ?>"></div>
				</div>
				<!-- our header content goes in here -->
				<div class="w-40 ph4 flex items-center justify-center">
					<div class="tc">
						<p class="f6 archivo ma0 ttu tracked mb5">
							<?php echo date("F Y", strtotime(get_field('date'))); ?>
						</p>

						<h1 class="f1 archivo b mt0 mb3 ttu">
							<?php the_title(); ?>
						</h1>

						<p class="f1 tenor mb4 mt0 ttu">
							<?php the_field('subhead'); ?>
						</p>

						<p class="cardo i ma0 lh-copy measure">
							<?php the_sub_field('header_intro'); ?>
						</p>

					</div>

				</div>
			</header>

			<?php
			// if it’s a text component, show us the data
			elseif( get_row_layout() == 'text_block' ): ?> 
				<!-- the_sub_field('text_content'); -->

				<div class="entry-content pv6 ph3 measure-wide center lh-copy">
					<?php the_sub_field('text_content'); ?>
				</div>

			<?php endif;
		endwhile; endif;
	?> -->

	<footer class="entry-footer">
		<?php //nomadsun_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
