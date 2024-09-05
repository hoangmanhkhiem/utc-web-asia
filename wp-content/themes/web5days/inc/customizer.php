<?php
function faci_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport          = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport   = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport  = 'postMessage';

    $wp_customize->selective_refresh->add_partial('blogname', array(
        'selector' => '.site-title a',
        'render_callback' => 'faci_customize_partial_blogname',
    ));
    $wp_customize->selective_refresh->add_partial('blogdescription', array(
        'selector' => '.site-description',
        'render_callback' => 'faci_customize_partial_blogdescription',
    ));



    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'colorscheme_hue', array(
        'mode' => 'hue',
        'section'  => 'colors',
        'priority' => 6,
    )));

    /**
     * Theme options.
     */
    $wp_customize->add_section('theme_options', array(
        'title'    => __('W5D theme', 'faci'),
        'priority' => 130,
    ));
    //logo
    $wp_customize->add_setting('img_logo', array(
        'default'     => '',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'img_logo_control',
        array(
            'label'      => 'Ảnh Logo',
            'section'    => 'theme_options',
            'settings'   => 'img_logo',
        )
    ));

    //  //logo
    // $wp_customize->add_setting( 'img_logo_footer' , array(
    //     'default'     => '',
    // ) );
    // $wp_customize->add_control( new WP_Customize_Image_Control( 
    // 	$wp_customize, 
    // 	'img_logo_footer_control', 
    // 	array(
    // 		'label'      => 'Image Logo Footer',
    // 		'section'    => 'theme_options',
    // 		'settings'   => 'img_logo_footer',
    // 	)
    // ));

    // // back top
    // $wp_customize->add_setting( 'img_backtop' , array(
    //     'default'     => '',
    // ) );
    // $wp_customize->add_control( new WP_Customize_Image_Control( 
    // 	$wp_customize, 
    // 	'img_backtop_control', 
    // 	array(
    // 		'label'      => 'Image back to top',
    // 		'section'    => 'theme_options',
    // 		'settings'   => 'img_backtop',

    // 	)
    // ));

    // image eror
    $wp_customize->add_setting('img_error', array(
        'default'     => '',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'img_notfound_control',
        array(
            'label'      => 'Ảnh 404',
            'section'    => 'theme_options',
            'settings'   => 'img_error',
        )
    ));

    // image banner
    $wp_customize->add_setting('img_banner', array(
        'default'     => '',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'img_banner_control',
        array(
            'label'      => 'Ảnh banner',
            'section'    => 'theme_options',
            'settings'   => 'img_banner',
        )
    ));

    $wp_customize->add_setting('txt_hotline', array(
        'default'     => ''
    ));
    $wp_customize->add_control(
        'txt_hotline_control',
        array(
            'label'    => 'Hotline',
            'section'  => 'theme_options',
            'settings' => 'txt_hotline',
            'type'     => 'text',
        )
    );

    /**
     * Social options.
     */
    $wp_customize->add_section('social_options', array(
        'title'    => __('Social Options', 'faci'),
        'priority' => 130,
    ));

    // Link-in
    // $wp_customize->add_setting( 'img_linkin' , array(
    //     'default'     => '',
    // ) );
    // $wp_customize->add_control( new WP_Customize_Image_Control( 
    // 	$wp_customize, 
    // 	'img_linkin_control', 
    // 	array(
    // 		'label'      => 'Icon Linked In',
    // 		'section'    => 'social_options',
    // 		'settings'   => 'img_linkin',
    // 	)
    // ));
    $wp_customize->add_setting('txt_linkin', array(
        'default'     => ''
    ));
    $wp_customize->add_control(
        'txt_linkin_control',
        array(
            'label'    => 'Link Linked In',
            'section'  => 'social_options',
            'settings' => 'txt_linkin',
            'type'     => 'text',
        )
    );

    // Twitter
    // $wp_customize->add_setting( 'img_twitter' , array(
    //     'default'     => '',
    // ) );
    // $wp_customize->add_control( new WP_Customize_Image_Control( 
    // 	$wp_customize, 
    // 	'img_twitter_control', 
    // 	array(
    // 		'label'      => 'Icon twitter',
    // 		'section'    => 'social_options',
    // 		'settings'   => 'img_twitter',
    // 	)
    // ));
    $wp_customize->add_setting('txt_twitter', array(
        'default'     => ''
    ));
    $wp_customize->add_control(
        'txt_twitter_control',
        array(
            'label'    => 'Link twitter',
            'section'  => 'social_options',
            'settings' => 'txt_twitter',
            'type'     => 'text',
        )
    );
}
add_action('customize_register', 'faci_customize_register');


/**
 * Render the site title for the selective refresh partial.
 *
 * @since faci-2017 1.0
 * @see faci_customize_register()
 *
 * @return void
 */
function faci_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since faci-2017 1.0
 * @see faci_customize_register()
 *
 * @return void
 */
function faci_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Return whether we're previewing the front page and it's a static page.
 */
function faci_is_static_front_page()
{
    return (is_front_page() && !is_home());
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function faci_is_view_with_layout_option()
{
    // This option is available on all pages. It's also available on archives when there isn't a sidebar.
    return (is_page() || (is_archive() && !is_active_sidebar('sidebar-1')));
}

/**
 * Bind JS handlers to instantly live-preview changes.
 */
function faci_customize_preview_js()
{
    wp_enqueue_script('faci-customize-preview', get_theme_file_uri('/assets/js/customize-preview.js'), array('customize-preview'), '1.0', true);
}
add_action('customize_preview_init', 'faci_customize_preview_js');

/**
 * Load dynamic logic for the customizer controls area.
 */
function faci_panels_js()
{
    wp_enqueue_script('faci-customize-controls', get_theme_file_uri('/assets/js/customize-controls.js'), array(), '1.0', true);
}
add_action('customize_controls_enqueue_scripts', 'faci_panels_js');
