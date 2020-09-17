<?php 
/**
 * @Packge     : Montana
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
Epsilon_Customizer::add_field(
    'montana_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Color', 'montana' ),
        'description' => esc_html__( 'Select the theme color.', 'montana' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'montana_general_section',
        'default'     => '#009dff',
    )
);

// Social Profiles Show/Hide
Epsilon_Customizer::add_field(
    'montana_social_profile_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Social Profiles Profile Show/Hide', 'montana' ),
        'section'     => 'montana_social_section',
        'default'     => true,
    )
);

//Social Profile links
Epsilon_Customizer::add_field(
	'montana_social_profiles',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'montana_social_section',
		'label'        => esc_html__( 'Social Profile Links', 'montana' ),
        'button_label' => esc_html__( 'Add new social link', 'montana' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'social_link_title',
		),
		'default'      => [
            [
                'social_link_title' => esc_html__( 'Facebook', 'montana' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-facebook-square',
            ],
            [
                'social_link_title' => esc_html__( 'Twitter', 'montana' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-twitter',
            ],
            [
                'social_link_title' => esc_html__( 'Instagram', 'montana' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-instagram',
            ],
        ],
		'fields'       => array(
			'social_link_title'       => array(
				'label'             => esc_html__( 'Title', 'montana' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Facebook',
			),
			'social_url' => array(
				'label'             => esc_html__( 'Social URL', 'montana' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => '#',
			),
			'social_icon'        => array(
				'label'   => esc_html__( 'Icon', 'montana' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-facebook-square',
			),
			
		),
	)
);

// Header Book Button
Epsilon_Customizer::add_field(
    'header_book_btn_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Book Button Section', 'montana' ),
        'section'     => 'montana_header_section',
        'default'     => true,

    )
);
// Header book button label
Epsilon_Customizer::add_field(
    'montana_book_btn_label',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Book Button Label', 'montana' ),
        'section'     => 'montana_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( 'Book A Room', 'montana' ),
    )
);
// Header book button url
Epsilon_Customizer::add_field(
    'montana_book_btn_url',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Book Button URL', 'montana' ),
        'section'     => 'montana_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '#',
    )
);
// Header book button bg color
Epsilon_Customizer::add_field(
    'montana_book_btn_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Book Button BG Color', 'montana' ),
        'description' => esc_html__( 'Select the background color.', 'montana' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'montana_header_section',
        'default'     => '#009dff',
    )
);
// Header book button hover color
Epsilon_Customizer::add_field(
    'montana_book_btn_hvr_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Book Button Hover Color', 'montana' ),
        'description' => esc_html__( 'Select the hover color.', 'montana' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'montana_header_section',
        'default'     => '#009dff',
    )
);


// Header color sections
Epsilon_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Color Section', 'montana' ),
        'section'     => 'montana_header_section',

    )
);
 
// Header background color field
Epsilon_Customizer::add_field(
    'montana_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'montana' ),
        'description' => esc_html__( 'Select the header background color.', 'montana' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'montana_header_section',
        'default'     => '#000000',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'montana_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'montana' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'montana_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'montana_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover border color', 'montana' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'montana_header_section',
        'default'     => '#ffffff',
    )
);

/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'montana_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'montana' ),
        'description' => esc_html__( 'Set post excerpt length.', 'montana' ),
        'section'     => 'montana_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'montana_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'montana' ),
        'section'     => 'montana_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'montana_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'montana' ),
        'section'     => 'montana_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'montana_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'montana' ),
        'section'     => 'montana_blog_section',
        'default'     => true
    )
);

/***********************************
 * Reservation Section Fields
 ***********************************/

// Reservation toggle field
Epsilon_Customizer::add_field(
    'montana_footer_reservation_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Reservation section show/hide', 'montana' ),
        'description' => esc_html__( 'Toggle to display reservation part.', 'montana' ),
        'section'     => 'montana_reservation_section',
        'default'     => true,
    )
);

 // Reservation Text
Epsilon_Customizer::add_field(
    'montana_reservation_text',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Reservation Text', 'montana' ),
        'section'           => 'montana_reservation_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'For Reservation 0r Query?', 'montana' ),
    )
);

 // Reservation Phone Number
Epsilon_Customizer::add_field(
    'montana_reservation_phone_number',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Reservation Phone Number', 'montana' ),
        'section'           => 'montana_reservation_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( '+10 576 377 4789', 'montana' ),
    )
);


/***********************************
 * Instagram Section
 ***********************************/

// Instagram toggle field
Epsilon_Customizer::add_field(
    'montana_footer_instagram_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Instagram section show/hide', 'montana' ),
        'description' => esc_html__( 'Toggle to display instagram part.', 'montana' ),
        'section'     => 'montana_instagram_section',
        'default'     => true,
    )
);
 // Instagram Userid
 Epsilon_Customizer::add_field(
    'montana_instagram_userid',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Instagram Userid', 'montana' ),
        'section'           => 'montana_instagram_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'hasanfardousrubel', 'montana' ),
    )
);

 // Instagram Gallery Item
 Epsilon_Customizer::add_field(
    'montana_instagram_gallery_item',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Instagram Gallery Item', 'montana' ),
        'section'           => 'montana_instagram_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '5',
    )
);
 
/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'montana_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'montana' ),
        'section'           => 'montana_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'montana_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'montana' ),
        'section'           => 'montana_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'montana_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'montana' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'montana_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'montana_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'montana' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'montana_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'montana_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'montana' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'montana_fof_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'montana' ),
        'section'     => 'montana_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'montana_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'montana' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'montana' ),
        'section'     => 'montana_footer_section',
        'default'     => true,
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'montana_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'montana' ),
        'section'     => 'montana_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'montana' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'montana_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'montana' ),
        'section'     => 'montana_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget background color field
Epsilon_Customizer::add_field(
    'montana_footer_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Background Color', 'montana' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'montana_footer_section',
        'default'     => '#000000',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'montana_footer_widget_heading_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Heading Color', 'montana' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'montana_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'montana_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'montana' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'montana_footer_section',
        'default'     => '#bababa',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'montana_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'montana' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'montana_footer_section',
        'default'     => '#bababa',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'montana_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'montana' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'montana_footer_section',
        'default'     => '#009dff',
    )
);

