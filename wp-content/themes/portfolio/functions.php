
<?php

add_theme_support ( 'menus' );
add_theme_support ( 'custom-logo');

add_filter('nav_menu_css_class', 'add_classes_on_li', 1, 3);
function add_classes_on_li($classes, $item, $args)
{
    $classes[] = 'nav-item';

    return $classes;
}

add_filter('wp_nav_menu', 'add_classes_on_a');
function add_classes_on_a($ulclass)
{
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}


//-------------------------------------
// Gestion des sidebars
function theme_widgets_init() {
    $sidebar1 = array(
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",        
        'name'          => 'sidebar-1',  
        'id'            => 'sidebar-1',
    );
    register_sidebar($sidebar1);

    $sidebar2 = array(
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",        
        'name'          => 'sidebar-2',
        'id'            => 'sidebar-2',
    );
    register_sidebar($sidebar2);

    $sidebar3 = array(
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",        
        'name'          => 'sidebar-3',
        'id'            => 'sidebar-3',
    );
    register_sidebar($sidebar3);
}
add_action( 'widgets_init', 'theme_widgets_init' );