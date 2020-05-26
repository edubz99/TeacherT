<?php 


     // All SVGs to media Library
     function add_file_types_to_uploads($file_types){
        $new_filetypes = array();
        $new_filetypes['svg'] = 'image/svg+xml';
        $file_types = array_merge($file_types, $new_filetypes );
        return $file_types;
        }
        add_filter('upload_mimes', 'add_file_types_to_uploads');
        
        
        /**
         * Register support for Gutenberg wide images in your theme
         */
        function mytheme_setup() {
          add_theme_support( 'align-wide' );
        }
        add_action( 'after_setup_theme', 'mytheme_setup' );
        
        //Page Slug Body Class
        add_filter( 'body_class', 'add_slug_body_class' );
        function add_slug_body_class( $classes ) {
            global $post;
            if ( isset( $post ) ) {
            $classes[] = $post->post_type . '-' . $post->post_name;
            }
            return $classes;
        }