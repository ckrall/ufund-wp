<?php
/**
 * UFund theme
 *
 * @package ufund-wp
 */


/**
 * Required WordPress variable.
 */
if (!isset($content_width)) {
    $content_width = 1170;
}


if (!function_exists('bootstrapBasicSetup')) {
    /**
     * Setup theme and register support wp features.
     */
    function bootstrapBasicSetup()
    {
        /**
         * Make theme available for translation
         * Translations can be filed in the /languages/ directory
         *
         * copy from underscores theme
         */
        load_theme_textdomain('bootstrap-basic', get_template_directory() . '/languages');

        // add theme support title-tag
        add_theme_support('title-tag');

        // add theme support post and comment automatic feed links
        add_theme_support('automatic-feed-links');

        // enable support for post thumbnail or feature image on posts and pages
        add_theme_support('post-thumbnails');

        // allow the use of html5 markup
        // @link https://codex.wordpress.org/Theme_Markup
        add_theme_support('html5', array('caption', 'comment-form', 'comment-list', 'gallery', 'search-form'));

        // add support menu
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'bootstrap-basic'),
        ));

        // add post formats support
        add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link'));

        // add support custom background
        add_theme_support(
            'custom-background',
            apply_filters(
                'bootstrap_basic_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => ''
                )
            )
        );
    }// bootstrapBasicSetup
}
add_action('after_setup_theme', 'bootstrapBasicSetup');


if (!function_exists('bootstrapBasicWidgetsInit')) {
    /**
     * Register widget areas
     */
    function bootstrapBasicWidgetsInit()
    {
        register_sidebar(array(
            'name' => __('Sidebar right', 'bootstrap-basic'),
            'id' => 'sidebar-right',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));

        register_sidebar(array(
            'name' => __('Sidebar left', 'bootstrap-basic'),
            'id' => 'sidebar-left',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));

        register_sidebar(array(
            'name' => __('Header right', 'bootstrap-basic'),
            'id' => 'header-right',
            'description' => __('Header widget area on the right side next to site title.', 'bootstrap-basic'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));

        register_sidebar(array(
            'name' => __('Navigation bar right', 'bootstrap-basic'),
            'id' => 'navbar-right',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        ));

        register_sidebar(array(
            'name' => __('Footer left', 'bootstrap-basic'),
            'id' => 'footer-left',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));

        register_sidebar(array(
            'name' => __('Footer right', 'bootstrap-basic'),
            'id' => 'footer-right',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));
    }// bootstrapBasicWidgetsInit
}
add_action('widgets_init', 'bootstrapBasicWidgetsInit');


if (!function_exists('bootstrapBasicEnqueueScripts')) {
    /**
     * Enqueue scripts & styles
     */
    function bootstrapBasicEnqueueScripts()
    {
        global $wp_scripts;

        wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7');
        wp_enqueue_style('bootstrap-theme-style', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(), '3.3.7');
        wp_enqueue_style('fontawesome-style', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0');
        wp_enqueue_style('main-style', get_template_directory_uri() . '/css/main.css');

        wp_enqueue_script('modernizr-script', get_template_directory_uri() . '/js/vendor/modernizr.min.js', array(), '3.3.1');
        wp_register_script('respond-script', get_template_directory_uri() . '/js/vendor/respond.min.js', array(), '1.4.2');
        $wp_scripts->add_data('respond-script', 'conditional', 'lt IE 9');
        wp_enqueue_script('respond-script');
        wp_register_script('html5-shiv-script', get_template_directory_uri() . '/js/vendor/html5shiv.min.js', array(), '3.7.3');
        $wp_scripts->add_data('html5-shiv-script', 'conditional', 'lte IE 9');
        wp_enqueue_script('html5-shiv-script');
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array(), '3.3.7', true);
        wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array(), false, true);
        wp_enqueue_style('bootstrap-basic-style', get_stylesheet_uri());
    }// bootstrapBasicEnqueueScripts
}
add_action('wp_enqueue_scripts', 'bootstrapBasicEnqueueScripts');


/**
 * admin page displaying help.
 */
if (is_admin()) {
    require get_template_directory() . '/inc/BootstrapBasicAdminHelp.php';
    $bbsc_adminhelp = new BootstrapBasicAdminHelp();
    add_action('admin_menu', array($bbsc_adminhelp, 'themeHelpMenu'));
    unset($bbsc_adminhelp);
}


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 * Custom dropdown menu and navbar in walker class
 */
require get_template_directory() . '/inc/BootstrapBasicMyWalkerNavMenu.php';


/**
 * Template functions
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * --------------------------------------------------------------
 * Theme widget & widget hooks
 * --------------------------------------------------------------
 */
require get_template_directory() . '/inc/widgets/BootstrapBasicSearchWidget.php';
require get_template_directory() . '/inc/template-widgets-hook.php';



/* -------------------------------------------------------------------------------- */
/* CUSTOM TYPES */

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_fieldgroup_homepage_jumbotron',
		'title' => 'fieldgroup_homepage_jumbotron',
		'fields' => array (
			array (
				'key' => 'field_587e2912d61ae',
				'label' => 'callout 1 icon',
				'name' => 'homepage_callout_1_icon',
				'type' => 'image',
				'instructions' => 'upload icon img (recommended SVG)',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_587e2977d61af',
				'label' => 'callout 1 button label',
				'name' => 'homepage_callout_1_button_label',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_587e29afd61b0',
				'label' => 'callout 1 button url',
				'name' => 'homepage_callout_1_button_url',
				'type' => 'page_link',
				'post_type' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_587e2a45d61b1',
				'label' => 'callout 2 icon',
				'name' => 'homepage_callout_2_icon',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_587e2a5fd61b2',
				'label' => 'callout 2 button label',
				'name' => 'homepage_callout_2_button_label',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_587e2a74d61b3',
				'label' => 'callout 2 button url',
				'name' => 'homepage_callout_2_button_url',
				'type' => 'page_link',
				'post_type' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'homepage',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 1,
	));
	register_field_group(array (
		'id' => 'acf_fieldgroup_homepage_howitworks',
		'title' => 'fieldgroup_homepage_howitworks',
		'fields' => array (
			array (
				'key' => 'field_587e2b1cb4bf9',
				'label' => 'howitworks intro',
				'name' => 'homepage_howitworks_intro',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'basic',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_587e2b4eb4bfa',
				'label' => 'howitworks step 1',
				'name' => 'howitworks_step_1',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'basic',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_587e2b63b4bfb',
				'label' => 'howitworks step 2',
				'name' => 'howitworks_step_2',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'basic',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_587e2b74b4bfc',
				'label' => 'howitworks step 3',
				'name' => 'howitworks_step_3',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'basic',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_587e2b84b4bfd',
				'label' => 'howitworks step 4',
				'name' => 'howitworks_step_4',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'basic',
				'media_upload' => 'no',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'homepage',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 2,
	));
}

function homepage() {

	/**
	 * Post Type: Homepages.
	 */

	$labels = array(
		"name" => __( 'Homepages', 'bootstrap-basic' ),
		"singular_name" => __( 'Homepage', 'bootstrap-basic' ),
		"menu_name" => __( 'Homepage', 'bootstrap-basic' ),
		"all_items" => __( 'homepages', 'bootstrap-basic' ),
		"add_new" => __( 'add new', 'bootstrap-basic' ),
		"add_new_item" => __( 'add new homepage', 'bootstrap-basic' ),
		"edit_item" => __( 'edit homepage', 'bootstrap-basic' ),
		"new_item" => __( 'new homepage', 'bootstrap-basic' ),
		"view_item" => __( 'view homepage', 'bootstrap-basic' ),
		"view_items" => __( 'view homepages', 'bootstrap-basic' ),
		"search_items" => __( 'search homepage', 'bootstrap-basic' ),
		"not_found" => __( 'homepage not found', 'bootstrap-basic' ),
		"not_found_in_trash" => __( 'no homepages in trash', 'bootstrap-basic' ),
		"featured_image" => __( 'homepage feature image', 'bootstrap-basic' ),
		"set_featured_image" => __( 'set homepage feature image', 'bootstrap-basic' ),
		"remove_featured_image" => __( 'remove homepage feature image', 'bootstrap-basic' ),
		"use_featured_image" => __( 'use feature image for homepage', 'bootstrap-basic' ),
		"uploaded_to_this_item" => __( 'uploaded to homepage', 'bootstrap-basic' ),
		"attributes" => __( 'homepage attributes', 'bootstrap-basic' ),
	);

	$args = array(
		"label" => __( 'Homepages', 'bootstrap-basic' ),
		"labels" => $labels,
		"description" => __( 'homepage type', 'bootstrap-basic' ),
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"menu_position" => null,
		"show_in_admin_bar" => true,
		"show_in_nav_menus" => true,
		"has_archive" => false,
		"exclude_from_search" => false,
		"capability_type" => "page",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => true,
		/*"rewrite" => array( "slug" => "homepage", "with_front" => true ),*/
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "revisions", "author", "page-attributes", "post-formats" ),
	);

	register_post_type( "homepage", $args );
	flush_rewrite_rules();
}

add_action( 'init', 'homepage' );

