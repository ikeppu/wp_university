<?php
    // 'custom-fields'
    function university_post_types() {
        register_post_type('event', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'excerpt'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'events'), 
            'menu_icon' => 'dashicons-calendar',
            'labels' => array(
                'name' => 'Events',
                'add_new_item' => 'Add new Events', 
                'add_new' => __( 'Add New Events', 'textdomain' )
            )
        ));

        // Program Post Type
        register_post_type('program', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'programs'), 
            'menu_icon' => 'dashicons-awards',
            'labels' => array(
                'name' => 'Programs',
                'add_new_item' => 'Add new Program', 
                'add_new' => __( 'Add New Program', 'textdomain' ),
                'all_items' => 'All Programs',
                'edit_item' => 'Program',
                'singular_name' => 'Program' 
            )
        ));

        // Professor Post Type
        register_post_type('proffesor', array(
            'supports' => array('title', 'editor', 'thumbnail'),
            'public' => true,
            'menu_icon' => 'dashicons-welcome-learn-more',
            'labels' => array(
                'name' => 'Professors',
                'add_new_item' => 'Add new Professor', 
                'add_new' => __( 'Add New Professor', 'textdomain' ),
                'all_items' => 'All Professors',
                'edit_item' => 'Professor',
                'singular_name' => 'Professor' 
            )
        ));

        // Campus Post Type
        register_post_type('campus', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'excerpt'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'campuses'), 
            'menu_icon' => 'dashicons-calendar',
            'labels' => array(
                'name' => 'Campus',
                'add_new_item' => 'Add new Campus', 
                'add_new' => __( 'Add New Campus', 'textdomain' ),
                'edit_item' => 'Edit Campuses',
                "all_items" => 'All Campuses',
                'singular_name' => 'Campus'
            )
        ));
    }
    
    add_action("init", "university_post_types");
?>