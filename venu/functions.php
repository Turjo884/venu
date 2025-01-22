<?php

if ( ! function_exists( 'venu_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @since Twenty Fifteen 1.0
     */
    function venu_setup() {
    
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Venu, use a find and replace
         * to change 'venu' to the name of your theme in all the template files
         */
        load_theme_textdomain( 'venu', get_template_directory() . '/languages' );
    
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
    
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded  tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );
    
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support( 'post-thumbnails' );
        // set_post_thumbnail_size( 825, 510, true );
    
        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'main-menu' => __( 'Main Menu', 'venu' ),
        ) );
    
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );
    
        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support( 'post-formats', array(
            'image', 'video', 'quote', 'gallery', 'audio'
        ) );

        remove_theme_support('widgets-block-editor');

    }
    endif; // venu_setup
    add_action( 'after_setup_theme', 'venu_setup' );


    // start register sidebar

        /**
     * footer widget.
     */
    function venu_register_widget_sidebar() {
        register_sidebar( array(
            'name'          => __( 'Footer 1', 'textdomain' ),
            'id'            => 'footer-1',
            'description'   => __( 'Widgets in this area will be shown on footer 1 widget', 'textdomain' ),
            'before_widget' => '<div id="%1$s" class="about-veno %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="footer-heading">',
            'after_title'   => '</h4>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer 2', 'textdomain' ),
            'id'            => 'footer-2',
            'description'   => __( 'Widgets in this area will be shown on footer 2 widget', 'textdomain' ),
            'before_widget' => '<div id="%1$s" class="useful-links %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="footer-heading">',
            'after_title'   => '</h4>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer 3', 'textdomain' ),
            'id'            => 'footer-3',
            'description'   => __( 'Widgets in this area will be shown on footer 3 widget', 'textdomain' ),
            'before_widget' => '<div id="%1$s" class="contact-info %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="footer-heading">',
            'after_title'   => '</h4>',
        ) );
    }
    add_action( 'widgets_init', 'venu_register_widget_sidebar' );

    // end register sidebar




    // venu css and js
    function venu_scripts() {
    
        // css file
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '3.3.1', 'all' );

        wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/assets/css/bootstrap-theme.min.css', array(), '3.3.1', 'all' );

        wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/assets/css/bootstrap-theme.css', array(), '3.3.1', 'all' );

        wp_enqueue_style( 'fontAwesome', get_template_directory_uri() . '/assets/css/fontAwesome.css', array(), '4.7.0', 'all' );

        wp_enqueue_style( 'hero-slider', get_template_directory_uri() . '/assets/css/hero-slider.css', array(), '1.0.0', 'all' );

        wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl-carousel.css', array(), '2.3.1', 'all' );

        wp_enqueue_style( 'datepicker', get_template_directory_uri() . '/assets/css/datepicker.css', array(), '1.7.1', 'all' );

        wp_enqueue_style( 'templatemo-style', get_template_directory_uri() . '/assets/css/templatemo-style.css', array(), '1.0.0', 'all' );

        wp_enqueue_style( 'style', get_stylesheet_uri() );
    

        // js file
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '3.3.1', true );

        wp_enqueue_script( 'datepicker', get_template_directory_uri() . '/assets/js/datepicker.js', array( 'jquery' ), '1.7.1', true );

        wp_enqueue_script( 'plugins', get_template_directory_uri() . '/assets/js/plugins.js', array( 'jquery' ), '2.3.1', true );

        wp_enqueue_script( 'datepicker', get_template_directory_uri() . 'js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', array( 'jquery' ), '1.7.1', true );

        wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '2.3.1', true );
    
    
    
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'venu_scripts' );


    include_once('inc/nav-walker.php');
    include_once('inc/template-function.php');
    include_once('inc/venu-kirki.php');