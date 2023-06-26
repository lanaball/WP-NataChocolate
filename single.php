<?php get_header(); ?>



<section class="container">
    <!-- basic loop start -->
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post();  ?>
            <hr>
            <h1 class="title"> <?php the_title(); ?> </h1>
            <hr>
            <?php the_content(); ?>


        <?php endwhile; ?>
    <?php endif; ?>
    <!-- basic loop end -->

</section>


<?php get_footer(); ?>