<?php function load_scripts() {
    //Bootstrap
    wp_enqueue_style("bootstrap","https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" );
    wp_enqueue_script("popper", "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js");
    wp_enqueue_script("j-query", "https://code.jquery.com/jquery-3.2.1.slim.min.js");
    wp_enqueue_script("bootstrap-js","https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" );

    //Global stylesheets
    wp_enqueue_style("cook-store-style",get_stylesheet_uri());
    wp_enqueue_style("header", get_stylesheet_directory_uri() . "/style/header.css"); 
    wp_enqueue_style("footer", get_stylesheet_directory_uri() . "/style/footer.css");
    wp_enqueue_style("navigation", get_stylesheet_directory_uri() . "/style/navigation.css");
    wp_enqueue_style("navigation-mobile", get_stylesheet_directory_uri() . "/style/navigation-mobile.css");

    //Page stylesheets
    wp_enqueue_style("front-page", get_stylesheet_directory_uri() . "/style/front-page.css");
    wp_enqueue_style("page", get_stylesheet_directory_uri() . "/style/page.css");  

    //Post stylesheets
}    

add_action("wp_enqueue_scripts","load_scripts");

//Register menus
register_nav_menus(
    //Menu locations
    array(
        'main-menu' => 'Main Menu',
        'mobile-menu' => 'Mobile Menu'
    )
) ?>