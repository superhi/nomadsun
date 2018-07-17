<div class="menu-overlay fixed top-0 left-0 w-100 h-100 bg-black flex items-center justify-center z-1">
  <nav>
    <?php $args = array(
      'posts_per_page'   => -1,
      'post_type'        => 'post',
    );
    $query = new WP_Query( $args ); ?>
    <?php if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="white tc link">
        <h1 class="archivo f8 pa3 ttu ma0">
          <?php the_title(); ?>
        </h1>
      </a>
    <?php endwhile; endif; ?>
  </nav>
</div>


