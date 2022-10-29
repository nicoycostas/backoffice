<?php

    if ( ! function_exists( 'myfirsttheme_setup' ) ) :
        /**
         * Sets up theme defaults and registers support for various WordPress features.
         *
         * Note that this function is hooked into the after_setup_theme hook, which runs
         * before the init hook. The init hook is too late for some features, such as indicating
         * support post thumbnails.
         */
        function myfirsttheme_setup() {
        
            /**
             * Make theme available for translation.
             * Translations can be placed in the /languages/ directory.
             */
            load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );
        
            /**
             * Add default posts and comments RSS feed links to <head>.
             */
            add_theme_support( 'automatic-feed-links' );
        
            /**
             * Enable support for post thumbnails and featured images.
             */
            add_theme_support( 'post-thumbnails' );
        
            /**
             * Add support for two custom navigation menus.
             */
            register_nav_menus( array(
                'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
                'secondary' => __('Secondary Menu', 'myfirsttheme' )
            ) );
        
            /**
             * Enable support for the following post formats:
             * aside, gallery, quote, image, and video
             */
            add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
        }
    endif; // myfirsttheme_setup
    add_action( 'after_setup_theme', 'myfirsttheme_setup' );

    // INCLUDING JS AND STYLESHEETS
    function add_theme_scripts() {
        // main stylesheet
        wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/assets/css/app.css' );

     
       
        // wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all');
       
        // wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
       
         
      }
      add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

    /**
     * Load post types
     */
    // include 'inc/post-types/sample_post_type.php';
    include 'inc/post-types/journal_post_type.php';
    include 'inc/post-types/decision_post_type.php';
    include 'inc/post-types/strategy_post_type.php';
    include 'inc/post-types/goal_post_type.php';
    include 'inc/post-types/note_post_type.php';
    include 'inc/post-types/centralpoint_post_type.php';

    /**
     * Load Metaboxes
     */
    // include 'inc/metaboxes/homepage_metaboxes.php';
    include 'inc/metaboxes/goal-setting_metaboxes.php';
    include 'inc/metaboxes/decision_metaboxes.php';
    include 'inc/metaboxes/strategy_metaboxes.php';
    /**
     * Load Shortcodes
     */

    /**
     * Load Widgets
     */

     /**
     * Load Taxonomies
     */
     // include 'inc/post-types/sample_post_type.php';
    include 'inc/taxonomies/note-taxonomy.php';
    include 'inc/taxonomies/goals-taxonomy.php';
    include 'inc/taxonomies/decisions-taxonomy.php';
    include 'inc/taxonomies/strategies-taxonomy.php';
    include 'inc/taxonomies/journal-taxonomy.php';


    //  PAGINATION PAGES FIX
    // journal pagination fix
    add_action( 'pre_get_posts' ,'wpse222471_query_post_type_portofolio', 1, 1 );
    function wpse222471_query_post_type_portofolio( $query )
    {
        if ( ! is_admin() && is_post_type_archive( 'journal' ) && $query->is_main_query() )
        {
            $query->set( 'posts_per_page', 6 ); //set query arg ( key, value )
        }
    }

     // strategy pagination fix
     add_action( 'pre_get_posts' ,'wpse222471_query_post_type_strategy', 1, 1 );
     function wpse222471_query_post_type_strategy( $query2 )
     {
         if ( ! is_admin() && is_post_type_archive( 'strategy' ) && $query2->is_main_query() )
         {
             $query2->set( 'posts_per_page', 6 ); //set query arg ( key, value )
         }
     }

       //decision pagination fix
       add_action( 'pre_get_posts' ,'wpse222471_query_post_type_decision', 1, 1 );
       function wpse222471_query_post_type_decision( $query3 )
       {
           if ( ! is_admin() && is_post_type_archive( 'decision' ) && $query3->is_main_query() )
           {
               $query3->set( 'posts_per_page', 6 ); //set query arg ( key, value )
           }
       }

        //goal pagination fix
        add_action( 'pre_get_posts' ,'wpse222471_query_post_type_goal', 1, 1 );
        function wpse222471_query_post_type_goal( $query4 )
        {
            if ( ! is_admin() && is_post_type_archive( 'goal' ) && $query4->is_main_query() )
            {
                $query4->set( 'posts_per_page', 6 ); //set query arg ( key, value )
            }
        }

        //note pagination fix
        add_action( 'pre_get_posts' ,'wpse222471_query_post_type_note', 1, 1 );
        function wpse222471_query_post_type_note( $query5 )
        {
            if ( ! is_admin() && is_post_type_archive( 'note' ) && $query5->is_main_query() )
            {
                $query5->set( 'posts_per_page', 6 ); //set query arg ( key, value )
            }
        }
 

    

	// remove version from head
remove_action('wp_head', 'wp_generator');

// remove version from rss
add_filter('the_generator', '__return_empty_string');

// remove version from scripts and styles
function shapeSpace_remove_version_scripts_styles($src) {
	if (strpos($src, 'ver=')) {
		$src = remove_query_arg('ver', $src);
	}
	return $src;
}
add_filter('style_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);	





?>
