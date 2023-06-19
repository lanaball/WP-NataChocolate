<div class="chocolate-card">
    <img class="chocolate_image" src="<?php the_field('chocolate_image'); ?>" alt="chocolate <?php the_title(); ?>">
    <hr>
    <h4 class="title"> <?php the_title(); ?> </h4>
    <hr>
    <p class="description center-text"><?php the_field('description'); ?></p>
    
    <div>
    <p class="price">From $<?php the_field('price'); ?></p>
      </div>  
</div>