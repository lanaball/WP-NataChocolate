<div class="blog-card">
    <div>
  
        <img class="blog-image" src="<?php the_post_thumbnail(); ?>
    </div>
     <a href="<?php echo get_post_permalink(); ?>"> 
    <hr>
     
    <h4 class=" blog-card-title"> <?php the_title(); ?> </h4>
        <hr>
        <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
</a>
    </div>