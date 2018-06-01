<div class="flex flex-wrap container center ph4-l">
<?php 
  global $hero_post;
  $args = array(
    'posts_per_page' => 4,
    // this will make sure it doesn’t show us the hero post
    'post__not_in' => array($hero_post),
    'orderby' => 'rand',
  );

  $the_query = new WP_Query($args);
  if ($the_query->have_posts()): while ($the_query->have_posts()):     $the_query->the_post(); 
?>

  <a class="db link w-100 w-50-m w-50-l mb4 ph3" href="<?php the_permalink();?>">
    <div class="aspect-ratio aspect-ratio--1x1 aspect-ratio--16x9-ns">
      <div class="aspect-ratio--object cover bg-center flex items-center justify-center " style="<?php nice_background('hero_image');?>">
        <p class="archivo white ma0 ttu tracked f5 f4-l ph4 tc lh-title">
          <?php the_title();?>
        </p>
      </div>
    </div>
  </a>

<?php endwhile; endif; ?>
</div>
