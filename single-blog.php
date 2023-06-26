<?php get_header(); ?>

<article class="container single-blog">

    <?php
    if (is_singular()) : ?>
        <hr>
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        <hr>
        <div class="single-blog__content">
            <?php get_the_post_thumbnail(); ?>
            <?php the_content('<p class="single-paragraph">', '</p>');  ?>
        </div>
    <?php
    endif; ?>

</article>



<?php get_footer(); ?>