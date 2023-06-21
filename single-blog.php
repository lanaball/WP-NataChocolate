<?php get_header(); ?>

<article class="container">

    <?php
    if (is_singular()) :
        the_title('<h1 class="entry-title">', '</h1>'); ?>
      <?php get_the_post_thumbnail(); ?>
            <?php the_content();
    endif; ?>

</article>



<?php get_footer(); ?>