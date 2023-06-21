<?php get_header(); ?>
<main class="single">
    <hr>


    <!-- basic loop start -->
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post();  ?>

            <div class="single-chocolate">
                <div>
                    <img class="single-chocolate__image" src="<?php the_field('chocolate_image'); ?>" alt="chocolate <?php the_title(); ?>">
                </div>

                <div class="single-content">
                    <hr>
                    <h1 class="single-title"> <?php the_title(); ?> </h1>
                    <hr>


                    <div class="single-content__split">
                        <div>
                            <p class="single-description"><?php the_field('description'); ?></p>
                            <p><?php the_field('origin'); ?></p>
                        </div>   
                        
                        <div class="single-content__icons">
                            <img src=" <?php echo get_template_directory_uri(); ?>./images/Vegan.png" alt="vegan">
                            <img src=" <?php echo get_template_directory_uri(); ?>./images/gluten1.png" alt="gluten">
                            <img src=" <?php echo get_template_directory_uri(); ?>./images/organic.png" alt="organic">
                        </div>

                    </div>



                    <hr>
                    <div class="single-content__grid">
                        <p class="single-content__price center-text"><?php the_field('weight'); ?> g </p>
                        <hr class="single-content__breaker">
                        <p class="single-content__price center-text">From $<?php the_field('price'); ?></p>
                    </div>

                    <hr>
                    <button class="chocolate-btn single-btn"> Add to Cart</button>
                </div>
            </div>


        <?php endwhile; ?>
    <?php endif; ?>
    <!-- basic loop end -->
</main>
<hr class="single-footer">
<?php get_footer(); ?>