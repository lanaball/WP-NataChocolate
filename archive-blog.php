<?php get_header(); ?>

<main>

    <article class="quote center-text">
        <hr>
        <h5> "Cacao vs. Cocoa. While cacao refers to cacao beans that have not been roasted, cocoa is made of beans that have been roasted. So, a product that is labeled cacao is the raw bean and is often packaged as vegan chocolate that has been minimally processed with no additives." </h5>
        <hr>
    </article>

    <h1 class="blog-title">Recent Articles</h1>
    <div class="blog-container">

        <!-- Custom primary loop -->
        <?php
        $latestPost = new WP_Query(array(
            'post_type' => 'blog',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC'
        ));

        if ($latestPost->have_posts()) :
            while ($latestPost->have_posts()) : $latestPost->the_post(); ?>

                <div class="blog-head">
                    <div class="blog-head__image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="blog-head__content">
                        <hr>
                        <h3 class="blog-head__subtitle"> <?php the_title(); ?> </h3>
                        <hr>
                        <p>
                            <?php the_content(); ?>
                        </p>
                        <a href="<?php echo get_post_permalink(); ?>"><button>Read More</button> </a>
                    </div>

                </div>


            <?php endwhile; ?>
        <?php endif;

        wp_reset_postdata();
        ?>

        <!-- custom secondary loop -->
        <?php $blog = new WP_Query(array(
            'post_type' => 'blog',
            'posts_per_page' => 6,
            'orderby', 'date',
            'order', 'ASC'
        ));

        if ($blog->have_posts()) : ?>
            <?php while ($blog->have_posts()) : $blog->the_post(); ?>

                <?php get_template_part('template-parts/content', 'blog-card'); ?>

            <?php endwhile; ?>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>




    </div>

</main><!-- #main -->



<?php get_footer(); ?>