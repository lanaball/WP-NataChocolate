<?php get_header(); ?>

<!-- basic loop start -->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post();  ?>

        <h1> <?php the_title(); ?> </h1>
        <?php the_content(); ?>


    <?php endwhile; ?>
<?php endif; ?>
<!-- basic loop end -->

<?php get_footer(); ?>