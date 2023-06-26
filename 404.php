<?php get_header(); ?>

<section class="error-404 not-found">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found. Maybe try one of the links below or a search', 'nata'); ?></h1>

        

        <div class="body-404">
        <div class="search-form">
            <?php get_search_form(); ?>
        </div>


        <?php the_widget('WP_Widget_Recent_Posts');
        ?>

        <div class="widget widget_categories">
            <h2 class="widget-title"><?php esc_html_e('Most Used Categories', 'nata'); ?></h2>
            <ul>
                <?php
                wp_list_categories(
                    array(
                        'orderby'    => 'count',
                        'order'      => 'DESC',
                        'show_count' => 1,
                        'title_li'   => '',
                        'number'     => 5,
                    )
                );
                ?>
            </ul>
        </div><!-- .widget -->
</div>

    </header><!-- .page-header -->
</section>
<?php get_footer(); ?>