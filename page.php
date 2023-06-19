<?php get_header(); ?>

<main id="primary" class="site-main">

    <div class="container ">

        <!-- basic loop start -->
   <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post();  ?>

         <h1> <?php the_title(); ?> </h1>
         <?php the_content(); ?>


      <?php endwhile; ?>
   <?php endif; ?>
   <!-- basic loop end -->
    </div>
</main><!-- #main -->

<?php get_footer(); ?>