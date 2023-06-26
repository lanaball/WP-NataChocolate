<?php get_header(); ?>

<main class="hero">
    <div class="hero-head">
        <h1>Next generation chocolate, created for sustainability</h1>
        <p>Nata is a creator of sustainable craft cacao from Costa Rica. Focused on top flavour profiles and showcasing Costa Rica’s high quality cacao.</p>
        <a href="http://nata-craft-cacao.local/about-us/"><button>See More</button></a>
    </div>

    <img class="hero-image" src=" <?php echo get_template_directory_uri(); ?>./images/cacaohandssmll.jpg" alt="cacao hands">


    <div class="hero-body">
        <div class="hero-body__icons">
            <img src=" <?php echo get_template_directory_uri(); ?>./images/Vegan.png" alt="vegan">
            <img src=" <?php echo get_template_directory_uri(); ?>./images/gluten1.png" alt="gluten">
            <img src=" <?php echo get_template_directory_uri(); ?>./images/organic.png" alt="organic">
        </div>
        <hr class="hero-body__hr">
        <div class="hero-body__about">
            <h2 class="hero-body__subtitle">Founded by Natalia Quirōs and Brian Ham. </h2>
            <p>Nata is committed to sustainable and ethical chocolate making. Working closely with farmers in Costa Rica to source the best quality cacao.</p>
        </div>
        <hr class="hero-body__hr">
    </div>
</main>

<section class="fp">
    <h2 class="fp-title">Our Products</h2>

    <div class="fp-container">

        <!-- custom secondary loop -->
        <?php $chocolates = new WP_Query(array(
            'post_type' => 'chocolate',
            'posts_per_page' => 3,
        ));

        if ($chocolates->have_posts()) : ?>
            <?php while ($chocolates->have_posts()) : $chocolates->the_post(); ?>

                <?php get_template_part('template-parts/content', 'chocolate-card'); ?>

            <?php endwhile; ?>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

    </div>
    <div >
        <a  href="http://nata-craft-cacao.local/chocolate/">  <button class="fp-btn">See More</button>
    </a>  
    </div>
  
</section>


<section class="fp">
    <h2 class="fp-title">Recent Articles</h2>

    <div class="fp-container">
        <!-- custom secondary loop -->
        <?php $blog = new WP_Query(array(
            'post_type' => 'blog',
            'posts_per_page' => 3,
        ));

        if ($blog->have_posts()) : ?>
            <?php while ($blog->have_posts()) : $blog->the_post(); ?>

                <?php get_template_part('template-parts/content', 'blog-card'); ?>


            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata();
        ?>
    </div>
    <div>
        <a class="" href="http://nata-craft-cacao.local/blog/">
            <button class="fp-btn ">See More</button>
        </a>
    </div>

</section>


<?php get_footer(); ?>