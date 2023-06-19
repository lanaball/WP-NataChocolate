<div class="blog-card">
    <div>
    <a class="link" href="<?php echo get_permalink(); ?>"> 
    <img class="blog-image" src="<?php the_post_thumbnail(); ?>">
</div>
    <hr> 
   
    <h4 class="blog-title"> <?php the_title(); ?> </h4>
    <hr>
    <p><?php the_excerpt(); ?></p>
    
</div>