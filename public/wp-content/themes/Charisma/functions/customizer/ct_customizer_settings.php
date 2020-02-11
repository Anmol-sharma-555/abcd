<?php

//////////////////////////////////////////////////////////////////
// Customizer - Add Custom Styling
//////////////////////////////////////////////////////////////////
function chickthemes_customizer_style()
{
    wp_enqueue_style('customizer-css', get_stylesheet_directory_uri() . '/functions/customizer/css/customizer.css');
}
add_action('customize_controls_print_styles', 'chickthemes_customizer_style');

//////////////////////////////////////////////////////////////////
// Customizer - Add Settings
//////////////////////////////////////////////////////////////////
function chickthemes_register_theme_customizer( $wp_customize ) {

    // Add Sections

    $wp_customize->add_section( 'chickthemes_new_section_custom_css' , array(
        'title'      => 'Custom CSS',
        'description'=> 'Add your custom CSS which will overwrite the theme CSS',
        'priority'   => 105,
    ) );

    $wp_customize->add_section( 'chickthemes_new_section_color_accent' , array(
        'title'      => 'Colors: Main Color',
        'description'=> '',
        'priority'   => 106,
    ) );

    $wp_customize->add_section( 'chickthemes_new_section_color_post_color' , array(
        'title'      => 'Colors: Posts',
        'description'=> '',
        'priority'   => 102,
    ) );

    $wp_customize->add_section( 'chickthemes_new_section_color_footer' , array(
        'title'      => 'Colors: Footer',
        'description'=> '',
        'priority'   => 101,
    ) );

    $wp_customize->add_section( 'chickthemes_new_section_color_sidebar' , array(
        'title'      => 'Colors: Sidebar',
        'description'=> '',
        'priority'   => 104,
    ) );

    $wp_customize->add_section( 'chickthemes_new_section_mobile' , array(
        'title'      => 'Colors: Mobile Menu',
        'description'=> '',
        'priority'   => 103,
    ) );

    $wp_customize->add_section( 'chickthemes_new_section_color_topbar' , array(
        'title'      => 'Colors (Only available in Premium Version)',
        'description'=> '',
        'priority'   => 100,
    ) );

    $wp_customize->add_section( 'chickthemes_new_section_footer' , array(
        'title'      => 'Footer Settings',
        'description'=> '',
        'priority'   => 99,
    ) );

    $wp_customize->add_section( 'chickthemes_new_section_social' , array(
        'title'      => 'Social Media Settings',
        'description'=> 'Enter your social media usernames. Icons will not show if left blank.',
        'priority'   => 98,
    ) );

    $wp_customize->add_section( 'chickthemes_new_section_page' , array(
        'title'      => 'Page Settings',
        'description'=> '',
        'priority'   => 97,
    ) );

    $wp_customize->add_section( 'chickthemes_new_section_post' , array(
        'title'      => 'Post Settings',
        'description'=> '',
        'priority'   => 96,
    ) );

    $wp_customize->add_section( 'chickthemes_new_section_featured' , array(
        'title'      => 'Slider Area Settings',
        'description'=> '',
        'priority'   => 94,
    ) );

    $wp_customize->add_section( 'chickthemes_new_section_topbar' , array(
        'title'      => 'Top Bar Settings',
        'description'=> '',
        'priority'   => 92,
    ) );

    $wp_customize->add_section( 'chickthemes_new_section_logo_header' , array(
        'title'      => 'Logo and Header Settings',
        'description'=> '',
        'priority'   => 91,
    ) );

    $wp_customize->add_section( 'chickthemes_new_section_general' , array(
        'title'      => 'General Settings',
        'description'=> '',
        'priority'   => 90,
    ) );

    $wp_customize->add_section( 'chickthemes_new_upgrade' , array(
        'title'      => 'Upgrade to Premium',
        'description'=> '',
        'priority'   => 89,
    ) );
    // Add Setting

    $wp_customize->add_setting(
        'upgradetopro'
    );


    // General

    $wp_customize->add_setting(
        'ct_favicon'
    );

    $wp_customize->add_setting(
        'ct_responsive'
    );

    $wp_customize->add_setting(
        'home_style',
        array(
            'default'     => 'grid'
        )
    );

    $wp_customize->add_setting(
        'archive_style',
        array(
            'default'     => 'grid'
        )
    );

    $wp_customize->add_setting(
        'home_sidebar',
        array(
            'default'     => false
        )
    );

    $wp_customize->add_setting(
        'ct_sidebar_post',
        array(
            'default'     => false
        )
    );
    $wp_customize->add_setting(
        'archive_sidebar',
        array(
            'default'     => false
        )
    );
    $wp_customize->add_setting(
        'article_post_summary',
        array(
            'default'     => 'full'
        )
    );

    // Header & Logo
    $wp_customize->add_setting(
        'ct_logo'
    );
    $wp_customize->add_setting(
        'ct_header_padding_top',
        array(
            'default'     => '56'
        )
    );
    $wp_customize->add_setting(
        'ct_header_padding_bottom',
        array(
            'default'     => '56'
        )
    );

    // Top Bar
    $wp_customize->add_setting(
        'ct_topbar_social_check',
        array(
            'default'     => false
        )
    );
    $wp_customize->add_setting(
        'ct_topbar_search_check',
        array(
            'default'     => false
        )
    );

// slider area
    $wp_customize->add_setting(
        'chick_themes_slider',
        array(
            'default'     => false
        )
    );
    $wp_customize->add_setting(
        'ct_featured_cat'
    );
    $wp_customize->add_setting(
        'ct_featured_id',
        array(
            'default'     => ''
        )
    );
    $wp_customize->add_setting(
        'ct_featured_slider_slides',
        array(
            'default'     => '5'
        )
    );

    $wp_customize->add_setting(
        'chick_themes_slider_full',
        array(
            'default'     => 'full'
        )
    );

    // Post Settings
    $wp_customize->add_setting(
        'article_tags',
        array(
            'default'     => false
        )
    );
    $wp_customize->add_setting(
        'article_author',
        array(
            'default'     => false
        )
    );
    $wp_customize->add_setting(
        'article_related_post',
        array(
            'default'     => false
        )
    );
    $wp_customize->add_setting(
        'article_social_share',
        array(
            'default'     => false
        )
    );
    $wp_customize->add_setting(
        'article_author_box',
        array(
            'default'     => false
        )
    );
    $wp_customize->add_setting(
        'article_comment_link',
        array(
            'default'     => false
        )
    );
    $wp_customize->add_setting(
        'article_thumbnail_area',
        array(
            'default'     => false
        )
    );
    $wp_customize->add_setting(
        'article_date_area',
        array(
            'default'     => false
        )
    );
    $wp_customize->add_setting(
        'post_categories',
        array(
            'default'     => false
        )
    );

    $wp_customize->add_setting(
        'post_view_counter',
        array(
            'default'     => false
        )
    );

    // Page
    $wp_customize->add_setting(
        'ct_social_share',
        array(
            'default'     => false
        )
    );

    // Social Media

    $wp_customize->add_setting(
        'ct_facebook',
        array(
            'default'     => ''
        )
    );
    $wp_customize->add_setting(
        'ct_twitter',
        array(
            'default'     => ''
        )
    );
    $wp_customize->add_setting(
        'ct_instagram',
        array(
            'default'     => ''
        )
    );
    $wp_customize->add_setting(
        'ct_pinterest',
        array(
            'default'     => ''
        )
    );
    $wp_customize->add_setting(
        'ct_tumblr',
        array(
            'default'     => ''
        )
    );
    $wp_customize->add_setting(
        'ct_bloglovin',
        array(
            'default'     => ''
        )
    );
    $wp_customize->add_setting(
        'ct_tumblr',
        array(
            'default'     => ''
        )
    );
    $wp_customize->add_setting(
        'ct_google',
        array(
            'default'     => ''
        )
    );
    $wp_customize->add_setting(
        'ct_youtube',
        array(
            'default'     => ''
        )
    );
    $wp_customize->add_setting(
        'ct_dribbble',
        array(
            'default'     => ''
        )
    );
    $wp_customize->add_setting(
        'ct_soundcloud',
        array(
            'default'     => ''
        )
    );
    $wp_customize->add_setting(
        'ct_vimeo',
        array(
            'default'     => ''
        )
    );
    $wp_customize->add_setting(
        'ct_linkedin',
        array(
            'default'     => ''
        )
    );
    $wp_customize->add_setting(
        'ct_rss',
        array(
            'default'     => ''
        )
    );

    // Footer
    $wp_customize->add_setting(
        'ct_footer_copyright',
        array(
            'default'     => '&copy; 2018 - VineThemes. Designed by <a href="http://www.vinethemes.com">VineThemes.com</a>'
        )
    );
    $wp_customize->add_setting(
        'ct_footer_share',
        array(
            'default'     => false
        )
    );

    // Colors

    // Top bar
    $wp_customize->add_setting(
        'ct_topbar_bg',
        array(
            'default'     => '#fff'
        )
    );

    $wp_customize->add_setting(
        'ct_topbar_nav_color',
        array(
            'default'     => '#000'
        )
    );
    $wp_customize->add_setting(
        'ct_topbar_nav_color_hover',
        array(
            'default'     => '#999999'
        )
    );

    $wp_customize->add_setting(
        'ct_drop_bg',
        array(
            'default'     => '#fff'
        )
    );
    $wp_customize->add_setting(
        'ct_drop_border',
        array(
            'default'     => '#f7f7f7'
        )
    );
    $wp_customize->add_setting(
        'ct_drop_text_color',
        array(
            'default'     => '#999999'
        )
    );
    $wp_customize->add_setting(
        'ct_drop_text_hover_bg',
        array(
            'default'     => '#fff'
        )
    );
    $wp_customize->add_setting(
        'ct_drop_text_hover_color',
        array(
            'default'     => '#000'
        )
    );

    $wp_customize->add_setting(
        'ct_topbar_social_color',
        array(
            'default'     => '#000'
        )
    );
    $wp_customize->add_setting(
        'ct_topbar_social_color_hover',
        array(
            'default'     => '#DDBE86'
        )
    );

    $wp_customize->add_setting(
        'ct_topbar_search_magnify',
        array(
            'default'     => '#000'
        )
    );

    // Mobile Menu colors
    $wp_customize->add_setting(
        'ct_mobile_bg',
        array(
            'default'     => '#161616'
        )
    );
    $wp_customize->add_setting(
        'ct_mobile_text',
        array(
            'default'     => '#ffffff'
        )
    );
    $wp_customize->add_setting(
        'ct_mobile_icon',
        array(
            'default'     => '#ffffff'
        )
    );

    // Sidebar
    $wp_customize->add_setting(
        'ct_sidebar_title_bg',
        array(
            'default'     => false
        )
    );
    $wp_customize->add_setting(
        'ct_sidebar_title_arrow',
        array(
            'default'     => false
        )
    );
    $wp_customize->add_setting(
        'ct_sidebar_title_text',
        array(
            'default'     => '#111'
        )
    );
    $wp_customize->add_setting(
        'ct_sidebar_social_icon',
        array(
            'default'     => '#000000'
        )
    );
    $wp_customize->add_setting(
        'ct_sidebar_social_icon_hover',
        array(
            'default'     => '#DDBE86'
        )
    );
    $wp_customize->add_setting(
        'ct_sidebar_newsletter_bg',
        array(
            'default'     => '#f1f1f1'
        )
    );
    $wp_customize->add_setting(
        'ct_sidebar_newsletter_text',
        array(
            'default'     => '#444444'
        )
    );
    $wp_customize->add_setting(
        'ct_sidebar_newsletter_button_bg',
        array(
            'default'     => '#161616'
        )
    );
    $wp_customize->add_setting(
        'ct_sidebar_newsletter_button_text',
        array(
            'default'     => '#ffffff'
        )
    );
    $wp_customize->add_setting(
        'ct_sidebar_newsletter_button_bg_hover',
        array(
            'default'     => '#DDBE86'
        )
    );
    $wp_customize->add_setting(
        'ct_sidebar_newsletter_button_text_hover',
        array(
            'default'     => '#ffffff'
        )
    );

    // Footer
    $wp_customize->add_setting(
        'ct_footer_bg',
        array(
            'default'     => '#161616'
        )
    );
    $wp_customize->add_setting(
        'ct_footer_social',
        array(
            'default'     => '#ffffff'
        )
    );
    $wp_customize->add_setting(
        'ct_footer_social_hover',
        array(
            'default'     => '#DDBE86'
        )
    );
    $wp_customize->add_setting(
        'ct_footer_social_line',
        array(
            'default'     => '#313131'
        )
    );
    $wp_customize->add_setting(
        'ct_footer_copyright_color',
        array(
            'default'     => '#888888'
        )
    );
    $wp_customize->add_setting(
        'ct_footer_copyright_link',
        array(
            'default'     => '#ffffff'
        )
    );

    // Posts
    $wp_customize->add_setting(
        'ct_post_title',
        array(
            'default'     => '#000000'
        )
    );
    $wp_customize->add_setting(
        'ct_post_title_divider',
        array(
            'default'     => '#000000'
        )
    );
    $wp_customize->add_setting(
        'ct_post_text',
        array(
            'default'     => '#242424'
        )
    );
    $wp_customize->add_setting(
        'ct_post_h',
        array(
            'default'     => '#242424'
        )
    );
    $wp_customize->add_setting(
        'ct_post_readmore_text',
        array(
            'default'     => '#000000'
        )
    );
    $wp_customize->add_setting(
        'ct_post_readmore_text_hover',
        array(
            'default'     => '#DDBE86'
        )
    );
    $wp_customize->add_setting(
        'ct_post_readmore_line',
        array(
            'default'     => '#DDBE86'
        )
    );
    $wp_customize->add_setting(
        'ct_post_readmore_line_hover',
        array(
            'default'     => '#DDBE86'
        )
    );
    $wp_customize->add_setting(
        'ct_post_share_color',
        array(
            'default'     => '#000000'
        )
    );
    $wp_customize->add_setting(
        'ct_post_share_color_hover',
        array(
            'default'     => '#DDBE86'
        )
    );

    // Main Color
    $wp_customize->add_setting(
        'ct_accent_color',
        array(
            'default'     => '#DDBE86'
        )
    );

    // Custom CSS
    $wp_customize->add_setting(
        'ct_custom_css'
    );


    // Add Control

    // Upgrade to Pro

    // Pro Version
    class Charisma_Customize_Pro_Version extends WP_Customize_Control {
        public $type = 'pro_options';

        public function render_content() {
            echo '<span>Purchase <strong></strong></span>';
            echo '<a href="'. esc_url($this->description) .'" target="_blank">';
            echo '<strong> '. esc_html__( 'Charisma Premium', 'charisma' ) .'<strong></a>';
            echo '</a>';
        }
    }


    $wp_customize->add_setting( 'pro_version_colors2', array(
        'sanitize_callback' => 'charisma_sanitize_custom_control'
    ) );
    $wp_customize->add_control( new Charisma_Customize_Pro_Version ( $wp_customize,
            'pro_version_colors2', array(
                'section'	  => 'chickthemes_new_upgrade',
                'type'		  => 'pro_options',
                'label' 	  => esc_html__( 'Upgrade', 'charisma' ),
                'description' => esc_url_raw( 'http://www.vinethemes.com/downloads/charisma-grid-wordpress-theme/' ),
                'priority'	  => 100
            )
        )
    );



    // General
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'upload_favicon',
            array(
                'label'      => 'Upload Favicon',
                'section'    => 'chickthemes_new_section_general',
                'settings'   => 'ct_favicon',
                'priority'	 => 1
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'responsive',
            array(
                'label'      => 'Disable Responsive',
                'section'    => 'chickthemes_new_section_general',
                'settings'   => 'ct_responsive',
                'type'		 => 'checkbox',
                'priority'	 => 2
            )
        )
    );



    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'sidebar_homepage',
            array(
                'label'      => 'Disable Sidebar on Homepage',
                'section'    => 'chickthemes_new_section_general',
                'settings'   => 'home_sidebar',
                'type'		 => 'checkbox',
                'priority'	 => 4
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'sidebar_post',
            array(
                'label'      => 'Disable Sidebar on Posts',
                'section'    => 'chickthemes_new_section_general',
                'settings'   => 'ct_sidebar_post',
                'type'		 => 'checkbox',
                'priority'	 => 5
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'sidebar_archive',
            array(
                'label'      => 'Disable Sidebar on Archives',
                'section'    => 'chickthemes_new_section_general',
                'settings'   => 'archive_sidebar',
                'type'		 => 'checkbox',
                'priority'	 => 6
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'post_summary',
            array(
                'label'          => 'Homepage/Archive Post Summary Type',
                'section'        => 'chickthemes_new_section_general',
                'settings'       => 'article_post_summary',
                'type'           => 'radio',
                'priority'	 => 8,
                'choices'        => array(
                    'full'   => 'Use Read More Tag',
                    'excerpt'  => 'Use Excerpt',
                )
            )
        )
    );

    // Header and Logo
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'upload_logo',
            array(
                'label'      => 'Upload Logo',
                'section'    => 'chickthemes_new_section_logo_header',
                'settings'   => 'ct_logo',
                'priority'	 => 20
            )
        )
    );

    $wp_customize->add_control(
        new Customize_Number_Control(
            $wp_customize,
            'header_padding_top',
            array(
                'label'      => 'Top Header Padding',
                'section'    => 'chickthemes_new_section_logo_header',
                'settings'   => 'ct_header_padding_top',
                'type'		 => 'number',
                'priority'	 => 22
            )
        )
    );
    $wp_customize->add_control(
        new Customize_Number_Control(
            $wp_customize,
            'header_padding_bottom',
            array(
                'label'      => 'Bottom Header Padding',
                'section'    => 'chickthemes_new_section_logo_header',
                'settings'   => 'ct_header_padding_bottom',
                'type'		 => 'number',
                'priority'	 => 23
            )
        )
    );

    // Top Bar

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'topbar_search_check',
            array(
                'label'      => 'Disable Top Bar Search',
                'section'    => 'chickthemes_new_section_topbar',
                'settings'   => 'ct_topbar_search_check',
                'type'		 => 'checkbox',
                'priority'	 => 4
            )
        )
    );

// slider area
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'featured_slider',
            array(
                'label'      => 'Enable Slider (Only available in Premium Version) ',
                'section'    => 'chickthemes_new_section_featured',
                'settings'   => 'chick_themes_slider',
                'type'		 => 'checkbox',
                'priority'	 => 2
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Category_Control(
            $wp_customize,
            'featured_cat',
            array(
                'label'    => 'Select slider Category',
                'settings' => 'ct_featured_cat',
                'section'  => 'chickthemes_new_section_featured',
                'priority'	 => 3
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'featured_id',
            array(
                'label'      => 'Select slider post/page IDs',
                'section'    => 'chickthemes_new_section_featured',
                'settings'   => 'ct_featured_id',
                'type'		 => 'text',
                'priority'	 => 4
            )
        )
    );

    $wp_customize->add_control(
        new Customize_Number_Control(
            $wp_customize,
            'featured_slider_slides',
            array(
                'label'      => 'Amount of Slides',
                'section'    => 'chickthemes_new_section_featured',
                'settings'   => 'ct_featured_slider_slides',
                'type'		 => 'number',
                'priority'	 => 5
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'featured_slider_full',
            array(
                'label'      => 'Select Slider Styles',
                'section'    => 'chickthemes_new_section_featured',
                'settings'   => 'chick_themes_slider_full',
                'type'		 => 'radio',
                'priority'	 => 6,
                'choices'        => array(
                    'full'   => 'Full Width Slider'
                )
            )
        )
    );

    // Post Settings
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'post_thumb',
            array(
                'label'      => 'Hide slider Image from top of Post',
                'section'    => 'chickthemes_new_section_post',
                'settings'   => 'article_thumbnail_area',
                'type'		 => 'checkbox',
                'priority'	 => 1
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'post_cat',
            array(
                'label'      => 'Hide Category',
                'section'    => 'chickthemes_new_section_post',
                'settings'   => 'post_categories',
                'type'		 => 'checkbox',
                'priority'	 => 2
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'CT_view_counter_home',
            array(
                'label'      => 'Hide Post View Count',
                'section'    => 'chickthemes_new_section_post',
                'settings'   => 'post_view_counter',
                'type'		 => 'checkbox',
                'priority'	 => 2
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'post_date',
            array(
                'label'      => 'Hide Date',
                'section'    => 'chickthemes_new_section_post',
                'settings'   => 'article_date_area',
                'type'		 => 'checkbox',
                'priority'	 => 3
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'post_tags',
            array(
                'label'      => 'Hide Tags',
                'section'    => 'chickthemes_new_section_post',
                'settings'   => 'article_tags',
                'type'		 => 'checkbox',
                'priority'	 => 4
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'post_share',
            array(
                'label'      => 'Hide Share Buttons',
                'section'    => 'chickthemes_new_section_post',
                'settings'   => 'article_social_share',
                'type'		 => 'checkbox',
                'priority'	 => 5
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'post_share_author',
            array(
                'label'      => 'Hide Author Name',
                'section'    => 'chickthemes_new_section_post',
                'settings'   => 'article_author_box',
                'type'		 => 'checkbox',
                'priority'	 => 6
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'post_comment_link',
            array(
                'label'      => 'Hide Comment Link',
                'section'    => 'chickthemes_new_section_post',
                'settings'   => 'article_comment_link',
                'type'		 => 'checkbox',
                'priority'	 => 7
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'post_author',
            array(
                'label'      => 'Hide Author Box',
                'section'    => 'chickthemes_new_section_post',
                'settings'   => 'article_author',
                'type'		 => 'checkbox',
                'priority'	 => 8
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'post_related',
            array(
                'label'      => 'Hide Related Posts Box',
                'section'    => 'chickthemes_new_section_post',
                'settings'   => 'article_related_post',
                'type'		 => 'checkbox',
                'priority'	 => 9
            )
        )
    );

    // Page
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'page_share',
            array(
                'label'      => 'Hide Share Buttons',
                'section'    => 'chickthemes_new_section_page',
                'settings'   => 'ct_social_share',
                'type'		 => 'checkbox',
                'priority'	 => 1
            )
        )
    );

    // Social Media
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'facebook',
            array(
                'label'      => 'Facebook',
                'section'    => 'chickthemes_new_section_social',
                'settings'   => 'ct_facebook',
                'type'		 => 'text',
                'priority'	 => 1
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'twitter',
            array(
                'label'      => 'Twitter',
                'section'    => 'chickthemes_new_section_social',
                'settings'   => 'ct_twitter',
                'type'		 => 'text',
                'priority'	 => 2
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'instagram',
            array(
                'label'      => 'Instagram',
                'section'    => 'chickthemes_new_section_social',
                'settings'   => 'ct_instagram',
                'type'		 => 'text',
                'priority'	 => 3
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'pinterest',
            array(
                'label'      => 'Pinterest',
                'section'    => 'chickthemes_new_section_social',
                'settings'   => 'ct_pinterest',
                'type'		 => 'text',
                'priority'	 => 4
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'bloglovin',
            array(
                'label'      => 'Bloglovin',
                'section'    => 'chickthemes_new_section_social',
                'settings'   => 'ct_bloglovin',
                'type'		 => 'text',
                'priority'	 => 5
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'google',
            array(
                'label'      => 'Google Plus',
                'section'    => 'chickthemes_new_section_social',
                'settings'   => 'ct_google',
                'type'		 => 'text',
                'priority'	 => 6
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'tumblr',
            array(
                'label'      => 'Tumblr',
                'section'    => 'chickthemes_new_section_social',
                'settings'   => 'ct_tumblr',
                'type'		 => 'text',
                'priority'	 => 7
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'youtube',
            array(
                'label'      => 'Youtube',
                'section'    => 'chickthemes_new_section_social',
                'settings'   => 'ct_youtube',
                'type'		 => 'text',
                'priority'	 => 8
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'dribbble',
            array(
                'label'      => 'Dribbble',
                'section'    => 'chickthemes_new_section_social',
                'settings'   => 'ct_dribbble',
                'type'		 => 'text',
                'priority'	 => 9
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'soundcloud',
            array(
                'label'      => 'Soundcloud',
                'section'    => 'chickthemes_new_section_social',
                'settings'   => 'ct_soundcloud',
                'type'		 => 'text',
                'priority'	 => 10
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'vimeo',
            array(
                'label'      => 'Vimeo',
                'section'    => 'chickthemes_new_section_social',
                'settings'   => 'ct_vimeo',
                'type'		 => 'text',
                'priority'	 => 11
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'linkedin',
            array(
                'label'      => 'Linkedin (Use full URL to your Linkedin profile)',
                'section'    => 'chickthemes_new_section_social',
                'settings'   => 'ct_linkedin',
                'type'		 => 'text',
                'priority'	 => 12
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'rss',
            array(
                'label'      => 'RSS Link',
                'section'    => 'chickthemes_new_section_social',
                'settings'   => 'ct_rss',
                'type'		 => 'text',
                'priority'	 => 13
            )
        )
    );

    // Footer
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'footer_copyright',
            array(
                'label'      => 'Footer Copyright Text (Only available in Premium Version)',
                'section'    => 'chickthemes_new_section_footer',
                'settings'   => 'ct_footer_copyright',
                'type'		 => 'text',
                'priority'	 => 1
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'footer_share',
            array(
                'label'      => 'Hide Footer Share Links',
                'section'    => 'chickthemes_new_section_footer',
                'settings'   => 'ct_footer_share',
                'type'		 => 'checkbox',
                'priority'	 => 2
            )
        )
    );

    // Colors

    // Top bar Colors
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'topbar_bg',
            array(
                'label'      => 'Colors Change (Only available in Premium Version)',
                'section'    => 'chickthemes_new_section_color_topbar',
                'settings'   => 'ct_topbar_bg',
                'priority'	 => 1
            )
        )
    );


    // Custom CSS
    $wp_customize->add_control(
        new Customize_CustomCss_Control(
            $wp_customize,
            'custom_css',
            array(
                'label'      => 'Custom CSS',
                'section'    => 'chickthemes_new_section_custom_css',
                'settings'   => 'ct_custom_css',
                'type'		 => 'custom_css',
                'priority'	 => 1
            )
        )
    );


    // Remove Sections
    $wp_customize->remove_section( 'title_tagline');
    $wp_customize->remove_section( 'nav');
    $wp_customize->remove_section( 'static_front_page');
    $wp_customize->remove_section( 'colors');
    $wp_customize->remove_section( 'background_image');


}

function charisma_panels_js() {
    wp_enqueue_style( 'charisma-customizer-ui-css', get_theme_file_uri( '/customizer-ui.css' ) );
}
add_action( 'customize_controls_enqueue_scripts', 'charisma_panels_js' );


add_action( 'customize_register', 'chickthemes_register_theme_customizer' );
?>