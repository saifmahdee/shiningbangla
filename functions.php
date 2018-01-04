<?php
function agaminews_default_functions() {

add_theme_support('custom-header');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('custom-background');
add_theme_support('html5',array('search-form'));
add_theme_support('html5',array('calendar'));


if (function_exists('wp_nav_menu')) {
	register_nav_menus(array(
	'primary'=> __('this is primary menu', 'agaminews'),
	'secondary'=> __('this is secondary menu', 'agaminews'),
	'footer'=> __('this is footer menu', 'agaminews'),

		) );
};

function agaminews_css_js(){

	wp_enqueue_style( 'bootstarp', get_template_directory_uri().'/css/bootstrap.min.css',array(),'4.2.2','all' );
	wp_enqueue_style( 'fontawsome', get_template_directory_uri().'/css/font-awesome.min.css',array(),'4.7.0','all' );
	wp_enqueue_style( 'custome', get_template_directory_uri().'/css/style.css');

	wp_enqueue_script( 'jquery' , get_template_directory_uri().'/js/jquery.min.js',array(),'1.12.4',true );
	wp_enqueue_script( 'bootstarp-js', get_template_directory_uri().'/js/bootstrap.min.js',array(),'4.2.2',true );
    

	};

	add_action('wp_enqueue_scripts','agaminews_css_js');





function right_sidebar() {
     
    register_sidebar( array(
        'name' => 'Ad Header',
        'id' => 'header_ad',
        'description' =>'This is our header ad' ,
        'before_widget' => '<div class="col-md-6">',
		'after_widget'  =>'</div>' ,
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
    ) );


    register_sidebar( array(
        'name' => 'Ad after lead news',
        'id' => 'after_lead_ad',
        'description' =>'This is our after lead ad' ,
        'before_widget' => '<div class="col-md-12">',
        'after_widget'  =>'</div>' ,
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );


    register_sidebar( array(
        'name' => 'Side Ad-1',
        'id' => 'side_ad_1',
        'description' =>'This is our side ad one' ,
        'before_widget' => '<div class="col-md-12">',
		'after_widget'  =>'</div>' ,
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
    ) );

      register_sidebar( array(
        'name' => 'Side Ad-2',
        'id' => 'side_ad_2',
        'description' =>'This is our side ad one' ,
        'before_widget' => '<div class="col-md-12">',
        'after_widget'  =>'</div>' ,
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

       register_sidebar( array(
        'name' => 'Side Ad-3',
        'id' => 'side_ad_3',
        'description' =>'This is our side ad one' ,
        'before_widget' => '<div class="col-md-12">',
        'after_widget'  =>'</div>' ,
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name' => 'Footer Logo',
        'id' => 'footer-logo',
        'description' =>'This is our sports news' ,
        'before_widget' => '<div class="col-md-6">',
        'after_widget'  =>'</div>' ,
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

};

add_action( 'widgets_init', 'right_sidebar' );



function read_more($read){
	$postcontent=explode(" ", get_the_content());
	$komailam= array_slice($postcontent, 0, $read);
	echo implode(" ", $komailam);
};



}

add_action ('after_setup_theme','agaminews_default_functions');