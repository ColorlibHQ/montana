<?php 
/**
 * @Packge     : Montana
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'montana_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'montana' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'montana_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'montana' ),
            'panel'    => 'montana_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'montana_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'montana' ),
            'panel'    => 'montana_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'montana_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'montana' ),
            'panel'    => 'montana_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'montana_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'montana' ),
            'panel'    => 'montana_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'montana_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'montana' ),
            'panel'    => 'montana_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'montana_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'montana' ),
            'panel'    => 'montana_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'montana_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'montana' ),
            'panel'    => 'montana_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'montana_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'montana' ),
            'panel'    => 'montana_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>