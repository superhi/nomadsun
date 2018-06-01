<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomadsun
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php 
				$query = new WP_Query('posts_per_page=1&orderby=rand');
				if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
					// get the id for our current post and store it in a variable
					$hero_post = get_the_ID();
					get_template_part('template-parts/content-hero');
				endwhile; endif;

				get_template_part('template-parts/content-about');

				get_template_part('template-parts/content-navigate');

				get_template_part('template-parts/content-bio');

			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
