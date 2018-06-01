<!-- using the_permalink() gives us a link to the post -->

<!-- <h1>
  <a href="<?php the_permalink(); ?>">
    Check out <?php the_title(); ?>!
  </a>
</h1> -->

<!-- here we used an inline style attribute to attach our
hero image as a css background directly onto the element -->

<!-- here we make the hero have a min-height of 100vh, cover 
the background, center it, add flexbox and make the content 
center vertically and horinztally -->
<a class="db link hero min-vh-100 cover bg-center flex items-center justify-center" style="<?php nice_background('hero_image'); ?>" href="<?php the_permalink(); ?>">
  <!-- make the text white and center it -->
  <div class="hero-content white tc ph3 ph4-l">

    <!-- our location title -->
    <!-- here we make it bold, have 0 margin and uppercase letters -->
    <h1 class="hero-heading f2 f1-l archivo b mt0 mb3 ttu lh-title">
      <?php the_title(); ?>
    </h1>

    <!-- our subheading -->
    <?php if( get_field('subhead') ): ?>
      <!-- here we do a similar thing but with a big margin on the bottom -->
      <p class="hero-subhead f2 f1-l tenor mb5 mb6-l mt0 ttu lh-title">
        <?php the_field('subhead'); ?>
      </p>
    <?php endif; ?>

    <!-- our formatted date -->
    <?php if( get_field('date') ): ?>
      <!-- here we use the f6 small font size, uppercase text and track
      the date with some subtle spacing -->
      <p class="f6 date archivo ma0 ttu tracked">
        <?php
          // here we convert our date into format that php can
          // work with, and then we format it to be nice + readable
          nice_date(get_field('date'));
        ?>
      </p>
    <?php endif; ?>

  </div>
</a>
