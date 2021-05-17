<?php 

/**
 * Plugin Name:     Mr & Mrs Video
 * Description:     Categorise and display YouTube Videos. Add videos using the video id.
 * Version:         1.0.0
 * Author:          Mr & Mrs 
 */
defined('ABSPATH') or die('Ooops...you\re not meant to be here!');

  //methods
  
//Our custom post type function
function create_posttype_mnm_video() {
    register_post_type( 'video',
   // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Video' ),
                'singular_name' => __( 'Video' )
            ),
            'public' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
            'rewrite' => array('slug' => 'video'),
            'show_in_rest' => true
 
        )
    );
}
add_action( 'init', 'create_posttype_mnm_video' );




