<?php get_header(); ?>

<!-- basic loop start -->

<section class="chocolate-container">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post();  ?>

       <?php get_template_part('template-parts/content', 'chocolate-card'); ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- basic loop end -->

</section>

<?php get_footer(); ?>