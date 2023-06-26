<?php get_header(); ?>
<hr>
<h2 class="assorted-subtitle">Collections</h2>
<hr>
<section class="chocolate-container">
    <!-- Custom primary loop -->
    <?php $collection = new WP_Query(array(
        'post_type' => 'chocolate',
        'posts_per_page' => 3,
        'tax_query' => array(
            array(
                'taxonomy' => 'chocolate-type', // Replace 'collections' with your actual taxonomy slug
                'field' => 'slug',
                'terms' => 'collections', // Replace 'your-term-slug' with the specific term slug you want to query
            ),
        ),
    ));

    if ($collection->have_posts()) :
        while ($collection->have_posts()) : $collection->the_post(); ?>

            <?php get_template_part('template-parts/content', 'chocolate-card'); ?>

    <?php endwhile;
    endif;

    wp_reset_postdata(); ?>
</section>
<hr>
<h2 class="assorted-subtitle">Flavour Profiles</h2>
<hr>
<section class="chocolate-container">

    <!-- Custom primary loop -->
    <?php
    $flavours = new WP_Query(array(
        'post_type' => 'chocolate',
        'posts_per_page' => 3,
        'tax_query' => array(
            array(
                'taxonomy' => 'chocolate-type', // Replace 'collections' with your actual taxonomy slug
                'field' => 'slug',
                'terms' => 'flavours', // Replace 'your-term-slug' with the specific term slug you want to query
            ),
        ),
    ));

    if ($flavours->have_posts()) :
        while ($flavours->have_posts()) : $flavours->the_post(); ?>

            <?php get_template_part('template-parts/content', 'chocolate-card'); ?>

        <?php endwhile; ?>
    <?php endif;

    wp_reset_postdata();
    ?>
</section>
<hr>
<h2 class="assorted-subtitle">Special Occasions</h2>
<hr>
<section class="chocolate-container">
    <!-- Custom primary loop -->
    <?php
    $occassions = new WP_Query(array(
        'post_type' => 'chocolate',
        'posts_per_page' => 3,
        'tax_query' => array(
            array(
                'taxonomy' => 'chocolate-type', // Replace 'collections' with your actual taxonomy slug
                'field' => 'slug',
                'terms' => 'occassions', // Replace 'your-term-slug' with the specific term slug you want to query
            ),
        ),
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