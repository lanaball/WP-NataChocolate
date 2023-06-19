<?php



// ------------------- adds style sheet and scripts -------------------
function add_my_assets()
{
    // links style and javascript
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);

    // material UI icons
    wp_enqueue_style('material-icons', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,200,0,200');

}
add_action('wp_enqueue_scripts', 'add_my_assets');

// wp_enqueue_ is the hook then add it to add_my_assets is the function, spelling important, no s on the single script



/**
 * ------------------- Custom Fonts -------------------
 * font-family: 'Montserrat', sans-serif;
 * font-family: 'Raleway', sans-serif;
 */
function enqueue_custom_fonts()
{
    if (!is_admin()) {
        wp_register_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');
        wp_register_style('raleway', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Raleway:wght@400;500;600&display=swap');
       
        wp_enqueue_style('montserrat');
        wp_enqueue_style('raleway');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');



// ------------------- navigation custom function -------------------
function add_my_menus()
{
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu'),
            'secondary-menu' => __('Secondary Menu'),
        )
    );
}
add_action('init', 'add_my_menus');




// -------------------    adds theme supports   -------------------
function add_my_theme_supports()
{
  
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tags');
    add_theme_support('html5', array('search-form'));

    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );

}
add_action('after_setup_theme', 'add_my_theme_supports');




// -------------------  custom post type   -------------------
function add_chocolate_post_type()
{
    register_post_type('chocolate', array(
        'labels' => array(
            'name' => __('Chocolates'),
            'singular_name' => __('chocolate'),
            'add_new_item' => 'Add New chocolate',
            'edit_item' => 'Edit chocolate',
            'all_items' => 'All chocolates',
            'view_item' => 'View chocolate',
            'search_items' => 'Search chocolates',
            'not_found' => 'No chocolates Found',
            'not_found_in_trash' => 'No chocolates Found in Trash',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'taxonomies' => array('chocolate-type'),
    ));
}
add_action('init', 'add_chocolate_post_type');




// -------------------  custom taxonomy   -------------------
function add_chocolate_taxonomy()
{
    register_taxonomy('chocolate-type', 'chocolate', array(
        'labels' => array(
            'name' => __('Chocolate Types'),
            'singular_name' => __('Chocolate Type'),
            'add_new_item' => 'Add New Chocolate Type',
            'edit_item' => 'Edit Chocolate Type',
            'all_items' => 'All Chocolate Types',
            'view_item' => 'View Chocolate Type',
            'search_items' => 'Search Chocolate Types',
            'not_found' => 'No Chocolate Types Found',
            'not_found_in_trash' => 'No Chocolate Types Found in Trash',
        ),
        'public' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
    ));
}
add_action('init', 'add_chocolate_taxonomy');



// -------------------  function to disable gutenberg   -------------------
function my_disable_gutenberg($current_status, $post_type) 
{

    // Disabled post types
    $disabled_post_types = array('chocolate');
    // Change $can_edit to false for any post types in the disabled post types array
    if (in_array($post_type, $disabled_post_types, true)) {
        $current_status = false;
    }

    return $current_status;
}
add_filter('use_block_editor_for_post_type', 'my_disable_gutenberg', 10, 2);



// ------------------- theme customizer for user -------------------
// notes: you must add parameter, industry standard is to call it $wp_customize, then add variables and arrays. This is the customizer manager setting class

function theme_customize_register($wp_customize)
{
    // Add a new SECTION for background color, this adds the section in the dashboard
    $wp_customize->add_section('background_color_section', array(
        'title' => __('Background Color', 'your-theme'),
        'description' => 'change the background color of the website',
        'priority' => 30,
    ));

    // Add the background color SETTING, this adds the hex to the code and will store it. add_setting is the container that holds the values and you can target this in code with 'background_color_setting'
    $wp_customize->add_setting('background_color_setting', array(
        'default' => '#ffffff', // Set the default background color (white)
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    // Add the background color CONTROL, color picker built into wordpress
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_color_control', array(
        'label' => __('Background Color'),
        'section' => 'background_color_section',
        'settings' => 'background_color_setting',
    )));


    $wp_customize->add_setting('my_setting', array(
        'default' => 'hello',
    ));
    $wp_customize->add_control('my_setting_control', array(
        'label' => 'Add date',
        'section' => 'background_color_section',
        'settings' => 'my_setting',
        'type' => 'date',
    ));
}
add_action('customize_register', 'theme_customize_register');