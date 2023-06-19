<?php get_header();      ?>

<div id="main-body" class="site-body">

   <!-- basic loop start -->
   <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post();  ?>
         <a class="link" href="<?php echo get_permalink(); ?>">
            <h1> <?php the_title(); ?> </h1>
            <?php the_content(); ?>


         <?php endwhile; ?>
      <?php endif; ?>
      <!-- basic loop end -->
</div>


<?php get_footer();     ?>