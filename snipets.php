<?php

// php start
[php]

// after_setup_theme_function with parametter
[afc]

/*
 * Demo Theme Bootstraping
 */

function demoTheme_bootstraping()
{

    load_theme_textdomain("demoThem");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support("custom-header");


}
add_action("after_setup_theme", "demoTheme_bootstraping");

// cssand and js add korar sinpites
[cssjs]


/*
 * Demo Theme style and scripts enquee
 */

function demoTheme_assets_list()
{

    wp_enqueue_style("demoThemcss", get_stylesheet_uri());


}
add_action("wp_enqueue_scripts", "demoTheme_assets_list");



// defeault loop
[lp]
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <h2>post ace</h2>

    <?php endwhile;
    else : ?>

        <h2>post nai</h2>

<?php endif;


// wp_inlne fucntion
[wpinline_fun]


/*
 * wp head e inline style
 */

function demoTheme_inlinestyle()
{
    if (is_home()) {
        ?>
        <style>
            body{
                background: #ccc;
            }
        </style>
 <?php

}
if (is_front_page()) {
    ?>
        <style>
            .site-header{
                background-image: url(<?php echo header_image(); ?>);
                height: 50vh;
                background-size: cover;
                background-position: center center;

            }
        </style>

        <?php

    }
}
add_action("wp_head", "demoTheme_inlinestyle");