<?php get_header(); ?>


<!-- basic loop start -->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post();  ?>

        <div class="single-chocolate">
            <img class="chocolate_image" src="<?php the_field('chocolate_image'); ?>" alt="chocolate <?php the_title(); ?>">
            <hr>
            <h1 class="title"> <?php the_title(); ?> </h1>
            <hr>
            <p class="description center-text"><?php the_field('description'); ?></p>
            <div>

            </div>
            <p class="price">From $<?php the_field('price'); ?></p>
          <button class="chocolate-btn"> Add to Cart</button>
        </div>


    <?php endwhile; ?>
<?php endif; ?>
<!-- basic loop end -->

<?php get_footer(); ?>