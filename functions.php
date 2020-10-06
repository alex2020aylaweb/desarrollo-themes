<?php 
add_theme_support( 'post-thumbnails' );


add_theme_support( 'custom-header' );



// imagen de fondo al jumbo
//function image_custom_header()


// Registramos un nueva (o nuevas) zona de widgets simple denominada 'sidebar'
function agregar_soporte_widgets() {
    register_sidebar( array(
                    'name'          => 'Sidebar',
                    'id'            => 'sidebar',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
    ) );
}
// Hook o gancho del widget para que se inicie
add_action( 'widgets_init', 'agregar_soporte_widgets' );


// agregar un nuevo menu
function agregar_menu(){
register_nav_menu('principal', __('principal'));
}

//enganchamos el menu a wordpress
add_action('init','agregar_menu');
// function mostrar menu

function mostrar_menu(){
wp_nav_menu([
    'theme_location'=>'principal',
    'container'=>'ul',
    'container_class'=>'nav-link',
     'container_id'=>'principal'   
 ]);
}









