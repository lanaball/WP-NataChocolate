<?php get_header(); ?>



<section class="chocolate-container">
    <!-- Custom primary loop -->
    <?php
    $collection = new WP_Query(array(
        'chocolate_types' => 'collections',
        'posts_per_page' => 3,
    ));

    if ($collection->have_posts()) :
        while ($collection->have_posts()) : $collection->the_post(); ?>

            <?php get_template_part('template-parts/content', 'chocolate-card'); ?>

        <?php endwhile; ?>
    <?php endif;

    wp_reset_postdata();
    ?>
</section>

<section class="chocolate-container">
    <!-- Custom primary loop -->
    <?php
    $flavours = new WP_Query(array(
        'slug' => 'flavours',
        'posts_per_page' => 3,
    ));

    if ($flavours->have_posts()) :
        while ($flavours->have_posts()) : $flavours->the_post(); ?>

            <?php get_template_part('template-parts/content', 'chocolate-card'); ?>

        <?php endwhile; ?>
    <?php endif;

    wp_reset_postdata();
    ?>
</section>

<section class="chocolate-container">
    <!-- Custom primary loop -->
    <?php
    $occassions = new WP_Query(array(
        'slug' => 'occassions',
        'posts_per_page' => 3,
    ));

    if ($occassions->have_posts()) :
        while ($occassions->have_posts()) : $occassions->the_post(); ?>

            <?php get_template_part('template-parts/content', 'chocolate-card'); ?>

        <?php endwhile; ?>
    <?php endif;

    wp_reset_postdata();
    ?>
</section>

<?php get_footer(); ?>