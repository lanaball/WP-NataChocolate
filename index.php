<?php get_header();      ?>

<div id="main-body" class="site-body">


   <!-- basic loop start -->
   <?php if (have_posts()) : ?>
        <?php
         the_archive_title('<h1 class="page-title">', '</h1>');
         the_archive_description('<div class="archive-description">', '</div>');
         ?>
      <?php while (have_posts()) : the_post();  ?>
       
      <?php endwhile; ?>
   <?php endif; ?>

   <?php wp_reset_postdata();  ?>

   <section class="chocolate-container chocolate-container__index">
      <?php if (have_posts()) : ?>
         <?php while (have_posts()) : the_post();  ?>

            <?php get_template_part('template-parts/content', 'chocolate-card'); ?>


         <?php endwhile; ?>
      <?php endif; ?>
      <!-- basic loop end -->
</div>
</section>

<?php get_footer();     ?>