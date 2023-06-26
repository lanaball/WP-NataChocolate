<?php get_header(); ?>



<section class="container">
   
    <div class="latest-post">
        <hr>
        <h2 class="event-title"><?php the_title(); ?></h2>
        <hr>
        <div>
            <h4><?php the_field('date'); ?> <span>,
                    <?php the_field('time'); ?>
                </span></h4>


        </div>


        <div class="entry-content">
            <p class="subtitle">
                <?php the_field('event_description'); ?>
            </p>
            <?php the_content(); ?>
        </div>
       
    </div>

</section>


<?php get_footer(); ?>