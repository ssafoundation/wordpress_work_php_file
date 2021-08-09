<?php
function monyr_theme_files()
{
	wp_register_style( 'Font_Awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
	wp_enqueue_style('Font_Awesome');
	wp_register_style( 'bootstrapcdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
	wp_enqueue_style('bootstrapcdn');
	wp_enqueue_style('aos', get_template_directory_uri() . '/assets/css/aos.css', array(), '1.0', 'all');
	wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0', 'all');
	wp_enqueue_style('owl.theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '1.0', 'all');
	wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), '1.0', 'all');
	wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0', 'all');
	wp_enqueue_style('bezo-temtlate-style', get_stylesheet_uri());
	wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0', 'all');

	
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/aos.js',  array('jquery'), '1.0', true);
	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js',  array('jquery'), '1.0', true);
	wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js',  array('jquery'), '1.0', true);
	wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope-v3.0.6.js',  array('jquery'), '1.0', true);
	wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js',  array('jquery'), '1.0', true);
	wp_register_script('some_scripts', 'https://code.jquery.com/jquery-1.10.2.js');
	wp_enqueue_script('some_scripts');
	wp_register_script('popper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
	wp_enqueue_script('popper_js');
	wp_register_script('bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
	wp_enqueue_script('bootstrap_js');
	wp_register_script('aos_scripts', 'https://unpkg.com/aos@next/dist/aos.js');
	wp_enqueue_script('aos_scripts');
}
add_action('wp_enqueue_scripts', 'monyr_theme_files');
function monyr_theme_supports(){
	//loading textdomain
	load_theme_textdomain( 'neuron-akhtar', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	//dynamic-title tag
	add_theme_support( 'title-tag' );

	//enaballing post thumbnail
	add_theme_support( 'post-thumbnails' );


		// register menu
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'neuron-monyr' ),
		) );

		//html5 support
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

	// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		//coustom logo
		add_theme_support( 'custom-logo', array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			) );
}
	add_action( 'after_setup_theme', 'monyr_theme_supports');

function monyr_theme_custom_post() {
    register_post_type( 'portfolio',
        array(
            'labels' => array(
                'name' => __( 'portfolio' ),
                'singular_name' => __( 'portfolio' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
	);
	register_post_type( 'client',
        array(
            'labels' => array(
                'name' => __( 'clients' ),
                'singular_name' => __( 'clients' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );
     register_post_type( 'feature',
        array(
            'labels' => array(
                'name' => __( 'Features' ),
                'singular_name' => __( 'features' )
            ),
            'supports' => array('title', 'editor','thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );
      register_post_type( 'service',
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'services' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
	);
	register_post_type( 'Profile',
	array(
		'labels' => array(
			'name' => __( 'Profile' ),
			'singular_name' => __( 'Profile' )
		),
		'supports' => array('editor', 'custom-fields', 'thumbnail', 'page-attributes'),
		'public' => false,
		'show_ui' => true
		)
	);
	register_post_type( 'Blog',
		array(
			'labels' => array(
				'name' => __( 'Blogs' ),
				'singular_name' => __( 'Blogs' )
			),
			'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
			'public' => false,
			'show_ui' => true
		)
	);
}
add_action( 'init', 'monyr_theme_custom_post' );

//registering widgets
function monyr_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'maps', 'monyr' ),
		'id'            => 'maps',
		'description'   => esc_html__( 'Add footer one widget here.', 'monyr' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'contect', 'monyr' ),
		'id'            => 'contect',
		'description'   => esc_html__( 'Add footer one widget here.', 'monyr' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'monyr_widgets_init' );

