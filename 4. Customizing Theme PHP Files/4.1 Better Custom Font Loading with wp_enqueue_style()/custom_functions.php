<?php

function enqueue_styles_scripts() { 
	wp_enqueue_style('gfonts', '//fonts.googleapis.com/css?family=Raleway:300,400,700,900');
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
} 

add_action('wp_enqueue_scripts', 'enqueue_styles_scripts');

?>