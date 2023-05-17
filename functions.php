<?php


function load_stylesheets()

{
    wp_register_style('mainc',get_template_directory_uri() . '/css/main.css', array(), time(), 'all');
    wp_enqueue_style('mainc');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');





// Load scripts

function addjs()
{
   wp_enqueue_script('js', get_stylesheet_directory_uri () . '/_javascript/main.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'addjs' );


add_theme_support('menus');

register_nav_menus(array(
    'top-menu' => __('Top Menu','theme'),
));



function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);


function arc_custom_post_type() {
	
		$args = array(
			'labels'      => array(
				'name'          => 'Case Studys',
				'singular_name' => 'Case Study',
			),
			'public'      => true,
			'has_archive' => true,
			'supports' => array('title','editor','thumbnail','excerpt', 'author' ),
			'post_type' => 'cases',
    		'posts_per_page' => -1, // get all cases
			'show_in_rest' => true,
		);
		register_post_type('case-study', $args);
	
}
add_action('init', 'arc_custom_post_type');


function arc_taxonomy_custom_post()
{
	$args = array(
		
		'public'      => true,
		'hierarchical' => true,
	);
	
	register_taxonomy('contents', array('case-study'), $args);
	
}
add_action('init', 'arc_taxonomy_custom_post'); 

add_theme_support('post-thumbnails');
?>