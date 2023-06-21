<?php get_header();      ?>

<div id="main-body" class="site-body">

   <section class="chocolate-container chocolate-container__index">
      <!-- basic loop start -->
      <?php if (have_posts()) : ?>
         <?php while (have_posts()) : the_post();  ?>


            <?php get_template_part('template-parts/content', 'chocolate-card'); ?>


         <?php endwhile; ?>
      <?php endif; ?>
      <!-- basic loop end -->
</div>
</section>

<?php get_footer();     ?>