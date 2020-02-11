<?php
    /**
     * Theme options via the Customizer.
     *
     * @package corvette
     * @since corvette 1.0
     */

    // ------------- Theme Customizer  ------------- //

    add_action( 'customize_register', 'corvette_customizer_register' );

    function corvette_customizer_register( $wp_customize ) {

        class corvette_Customize_Textarea_Control extends WP_Customize_Control {
            public $type = 'textarea';

            public function render_content() {
                ?>
                <label>
                    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                    <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
                </label>
                <?php
            }
        }


// Pro Version
        class Corvette_Customize_Pro_Version extends WP_Customize_Control {
            public $type = 'pro_options';

            public function render_content() {
                echo '<span>Upgrade to <strong></strong></span>';
                echo '<a href="'. esc_url($this->description) .'" target="_blank">';
                echo '<strong> '. esc_html__( 'Corvette Premium', 'corvette' ) .'<strong></a>';
                echo '</a>';
            }
        }

        // Pro Version Links
        class Corvette_Customize_Pro_Version_Links extends WP_Customize_Control {
            public $type = 'pro_links';

            public function render_content() {
                ?>
                <ul>
                    <li class="customize-control">
                        <h3><?php esc_html_e( 'Upgrade', 'corvette' ); ?> <span>*</span></h3>
                        <p><?php esc_html_e( 'There are lots of reasons to upgrade to Pro version. Unlimited custom Colors, rich Typography options, multiple variation of Blog Feed layout and way much more. Also Premium Support included.', 'corvette' ); ?></p>
                        <a href="<?php echo esc_url_raw('http://www.vinethemes.com/downloads/corvette-multipurpose-wordpress-theme/'); ?>" target="_blank" class="button button-primary widefat"><?php esc_html_e( 'Get Corvette Premium', 'corvette' ); ?></a>
                    </li>
                    <li class="customize-control">
                        <h3><?php esc_html_e( 'Documentation', 'corvette' ); ?></h3>
                        <p><?php esc_html_e( 'Read how to customize the theme, set up widgets, and learn all the possible options available to you.', 'corvette' ); ?></p>
                        <a href="<?php echo esc_url_raw('http://support.vinethemes.com/knowledgebase/corvette-multipurpose-wordpress-theme/'); ?>" target="_blank" class="button button-primary widefat"><?php esc_html_e( 'Documentation', 'corvette' ); ?></a>
                    </li>
                    <li class="customize-control">
                        <h3><?php esc_html_e( 'Support', 'corvette' ); ?></h3>
                        <p><?php esc_html_e( 'For Corvette theme related questions feel free to post on our support forums.', 'corvette' ); ?></p>
                        <a href="<?php echo esc_url_raw('http://support.vinethemes.com/'); ?>" target="_blank" class="button button-primary widefat"><?php esc_html_e( 'Support', 'corvette' ); ?></a>
                    </li>

                </ul>
                <?php
            }
        }


        /*
        ** Pro Version =====
        */

        // add Colors section
        $wp_customize->add_section( 'corvette_pro' , array(
            'title'		 => esc_html__( 'About Corvette', 'corvette' ),
            'priority'	 => 1,
            'capability' => 'edit_theme_options'
        ) );

        // Pro Version
        $wp_customize->add_setting( 'pro_version_', array(
            'sanitize_callback' => 'corvette_sanitize_custom_control'
        ) );
        $wp_customize->add_control( new Corvette_Customize_Pro_Version_Links ( $wp_customize,
                'pro_version_', array(
                    'section'	=> 'corvette_pro',
                    'type'		=> 'pro_links',
                    'label' 	=> '',
                    'priority'	=> 1
                )
            )
        );





        //Slick Slider
        $wp_customize->add_section( 'corvette_customizer_slider', array(
            'title'       => __( 'Slider Options', 'corvette' ),
            'description' => __( 'Configure your Slider here.', 'corvette' ),
            'priority'    => 1
        ) );


        $wp_customize->add_setting( 'corvette_customizer_slider_disable', array(
            'default'    => 'enable',
            'section'  => 'corvette_customizer_slider',
            'capability' => 'edit_theme_options',
            'sanitize_callback'	=> 'esc_attr',
        ) );

        $wp_customize->add_control( 'corvette_slider_select_box', array(
            'settings' => 'corvette_customizer_slider_disable',
            'label'    => __( 'Homepage Slider', 'corvette' ),
            'section'  => 'corvette_customizer_slider',
            'type'     => 'select',
            'choices'  => array(
                'enable'  => __( 'Enable', 'corvette' ),
                'disable' => __( 'Disable', 'corvette' ),
                ),
            'priority' => 6
        ) );
        $wp_customize->add_setting( 'corvette_slider_category', array(
            'default' => '0',
            'sanitize_callback'	=> 'esc_attr',
            'section'  => 'corvette_customizer_slider',

        ) );
         $wp_customize->add_control(new corvette_Customize_Category_Control( $wp_customize, 'corvette_slider_category', array(
                    'label'    => __( 'Category for Slider', 'corvette' ),
                    'section'  => 'corvette_customizer_slider',
                    'settings' => 'corvette_slider_category',
                    'priority'	 => 7
                )
            )
        );

        $wp_customize->add_setting( 'corvette_slider_slides', array(
            'default' => '3',
            'sanitize_callback'	=> 'absint',
            'section'  => 'corvette_customizer_slider',
        ) );

        $wp_customize->add_control( 'corvette_slider_slides', array(
                    'label'      => __('Number of Posts for Slider','corvette'),
                    'section'    => 'corvette_customizer_slider',
                    'settings'   => 'corvette_slider_slides',
                    'type'		 => 'number',
                    'priority'	 => 8
                )
        );

        $wp_customize->add_setting( 'corvette_slider_designs', array(
            'default'    => 'Slider1',
            'section'  => 'corvette_customizer_slider',
            'capability' => 'edit_theme_options',
            'sanitize_callback'	=> 'esc_attr',
        ) );

        $wp_customize->add_control( 'corvette_slider_designs', array(
            'type' => 'radio',
            'label'    => __( 'Slider Designs', 'corvette' ),
            'section'  => 'corvette_customizer_slider',
            'choices'  => array(
                'Slider1'  => __( 'Center Focus', 'corvette' ),
                'Slider2' => __( 'Three Grid', 'corvette' ),
                'Slider3' => __( 'Single Boxed', 'corvette' ),
            ),
            'priority' => 9
        ) );






        //General Options

        $wp_customize->add_section( 'corvette_general_options', array(
            'title'       => __( 'General Options', 'corvette' ),
            'description' => __( 'Configure Your Theme Settings Here.', 'corvette' ),
            'priority'    => 2
        ) );

        $wp_customize->add_setting( 'corvette_general_search_icon', array(
            'section'  => 'corvette_general_options',
            'capability' => 'edit_theme_options',
            'sanitize_callback'	=> 'corvette_sanitize_checkbox',
        ) );

        $wp_customize->add_control( 'corvette_general_search_icon', array(
            'settings' => 'corvette_general_search_icon',
            'label'    => __( 'Hide Top Search Icon', 'corvette' ),
            'section'  => 'corvette_general_options',
            'type'     => 'checkbox',
            'priority' => 6
        ) );
        $wp_customize->add_setting( 'corvette_general_responsive', array(
            'section'  => 'corvette_general_options',
            'capability' => 'edit_theme_options',
            'sanitize_callback'	=> 'corvette_sanitize_checkbox',
        ) );

        $wp_customize->add_control( 'corvette_general_responsive', array(
            'settings' => 'corvette_general_responsive',
            'label'    => __( 'Disable Responsive', 'corvette' ),
            'section'  => 'corvette_general_options',
            'type'     => 'checkbox',
            'priority' => 6
        ) );
        $wp_customize->add_setting( 'corvette_general_sidebar_home', array(
            'section'  => 'corvette_general_options',
            'capability' => 'edit_theme_options',
            'sanitize_callback'	=> 'corvette_sanitize_checkbox',
        ) );

        $wp_customize->add_control( 'corvette_general_sidebar_home', array(
            'settings' => 'corvette_general_sidebar_home',
            'label'    => __( 'Disable Sidebar on Homepage and Archive Pages', 'corvette' ),
            'section'  => 'corvette_general_options',
            'type'     => 'checkbox',
            'priority' => 6
        ) );
        $wp_customize->add_setting( 'corvette_general_sidebar_post', array(
            'section'  => 'corvette_general_options',
            'capability' => 'edit_theme_options',
            'sanitize_callback'	=> 'corvette_sanitize_checkbox',
        ) );

        $wp_customize->add_control( 'corvette_general_sidebar_post', array(
            'settings' => 'corvette_general_sidebar_post',
            'label'    => __( 'Disable Sidebar on Posts', 'corvette' ),
            'section'  => 'corvette_general_options',
            'type'     => 'checkbox',
            'priority' => 6
        ) );
        $wp_customize->add_setting( 'corvette_general_sidebar_page', array(
            'section'  => 'corvette_general_options',
            'capability' => 'edit_theme_options',
            'sanitize_callback'	=> 'corvette_sanitize_checkbox',
        ) );

        $wp_customize->add_control( 'corvette_general_sidebar_page', array(
            'settings' => 'corvette_general_sidebar_page',
            'label'    => __( 'Disable Sidebar on Pages', 'corvette' ),
            'section'  => 'corvette_general_options',
            'type'     => 'checkbox',
            'priority' => 6
        ) );

        $wp_customize->add_setting( 'corvette_general_author_post', array(
            'section'  => 'corvette_general_options',
            'capability' => 'edit_theme_options',
            'sanitize_callback'	=> 'corvette_sanitize_checkbox',
        ) );

        $wp_customize->add_control( 'corvette_general_author_post', array(
            'settings' => 'corvette_general_author_post',
            'label'    => __( 'Disable Author Box on Posts', 'corvette' ),
            'section'  => 'corvette_general_options',
            'type'     => 'checkbox',
            'priority' => 6
        ) );

        $wp_customize->add_setting( 'corvette_general_post_summary', array(
            'default' => 'excerpt',
            'section'  => 'corvette_general_options',
            'sanitize_callback'	=> 'corvette_sanitize_radio',
        ) );

        $wp_customize->add_control( 'corvette_general_post_summary', array(
            'type' => 'radio',
            'label'    => __( 'Homepage and Archive Post Summary Type', 'corvette' ),
            'section'  => 'corvette_general_options',
            'choices'  => array(
                'excerpt'  => __( 'Use Excerpt', 'corvette' ),
                'full' => __( 'Use Full Post', 'corvette' ),
            ),
            'priority' => 9
        ) );
        $wp_customize->add_setting( 'corvette_general_post_layout', array(
            'default' => 'standard',
            'section'  => 'corvette_general_options',
            'sanitize_callback'	=> 'corvette_sanitize_radio',
        ) );
        $wp_customize->add_control( 'corvette_general_post_layout', array(
            'type' => 'radio',
            'label'    => __( 'Homepage and Archive Post Layout Type', 'corvette' ),
            'section'  => 'corvette_general_options',
            'choices'  => array(
                'grid'  => __( 'Grid Layout [Only in Premium Version]', 'corvette' ),
                'standard' => __( 'Standard Post', 'corvette' ),
                'list' => __( 'List Post [Only in Premium Version]', 'corvette' ),
            ),
            'priority' => 10
        ) );

        // Pro Version
        $wp_customize->add_setting( 'pro_version_colors2', array(
            'sanitize_callback' => 'corvette_sanitize_custom_control'
        ) );
        $wp_customize->add_control( new Corvette_Customize_Pro_Version ( $wp_customize,
                'pro_version_colors2', array(
                    'section'	  => 'corvette_general_options',
                    'type'		  => 'pro_options',
                    'label' 	  => esc_html__( 'Upgrade', 'corvette' ),
                    'description' => esc_url_raw( 'http://www.vinethemes.com/downloads/corvette-multipurpose-wordpress-theme/' ),
                    'priority'	  => 100
                )
            )
        );


        // Footer Settings
        $wp_customize->add_section( 'corvette_footer_settings', array(
            'title'       => __( 'Footer Settings', 'corvette' ),
            'description' => __( 'Configure Your Footer Here. You can\'t change our footer links in the free version of this theme.', 'corvette' ),
            'priority'    => 8
        ) );

        $wp_customize->add_setting(
            'footer_copyright',
            array(
                'default'     => 'Copyright 2018.',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );

        $wp_customize->add_control('footer_copyright', array(
                    'label'      => 'Footer Copyright Text',
                    'section'    => 'corvette_footer_settings',
                    'settings'   => 'footer_copyright',
                    'type'		 => 'text',
                    'priority'	 => 1
                )
        );


        // Pro Version
        $wp_customize->add_setting( 'pro_version_colors3', array(
            'sanitize_callback' => 'corvette_sanitize_custom_control'
        ) );
        $wp_customize->add_control( new Corvette_Customize_Pro_Version ( $wp_customize,
                'pro_version_colors3', array(
                    'section'	  => 'corvette_footer_settings',
                    'type'		  => 'pro_options',
                    'label' 	  => esc_html__( 'Upgrade', 'corvette' ),
                    'description' => esc_url_raw( 'http://www.vinethemes.com/downloads/corvette-multipurpose-wordpress-theme/' ),
                    'priority'	  => 100
                )
            )
        );


    }


// Adding controls to default customizer panel
    add_action('customize_register','corvette_customizer_options');
    /*
     * Add in our custom Main Color setting and control to be used in the Customizer in the Colors section
     *
     */
    function corvette_customizer_options( $wp_customize ) {
        $wp_customize->add_setting(
            'corvette_main_color', //give it an ID
            array(
                'default' => '#f1868a', // Give it a default
                'sanitize_callback' => 'sanitize_hex_color',
                'transport'      => 'refresh'
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'corvette_custom_main_color', //give it an ID
                array(
                    'label'      => __( 'Main Color', 'corvette' ), //set the label to appear in the Customizer
                    'section'    => 'colors', //select the section for it to appear under
                    'settings'   => 'corvette_main_color' //pick the setting it applies to
                )
            )
        );
        $wp_customize->add_setting(
            'corvette_main_text', //give it an ID
            array(
                'default' => '#f1868a', // Give it a default
                'sanitize_callback' => 'sanitize_hex_color',
                'transport'      => 'refresh'
            )
        );
        $wp_customize->add_control(
            new Corvette_Customize_Pro_Version(
                $wp_customize,
                'corvette_custom_text', //give it an ID
                array(
                    'label'      => __( 'Upgrade', 'corvette' ), //set the label to appear in the Customizer
                    'section'    => 'colors', //select the section for it to appear under
                    'settings'   => 'corvette_main_text', //pick the setting it applies to
                    'description' => esc_url_raw( 'http://www.vinethemes.com/downloads/corvette-multipurpose-wordpress-theme/' ),
                )
            )
        );



    }



    /*
    * Adding a section to manage social links
    */
    function corvette_sociallink_customizer( $wp_customize ) {
        $wp_customize->add_section( 'corvette_social_section' , array(
            'title' => __( 'Social Links', 'corvette' ),
            'priority' => 30,
            'description' => 'Setting for Social media Icons. Add a link to each of your Social Media Profiles. Leave the field empty for the icons you don\'t want to be displayed.',

        ) );

        $wp_customize->add_setting( 'corvette_facebook', array(
            'sanitize_callback'	=> 'esc_url_raw',

        ) );
        $wp_customize->add_setting( 'corvette_twitter', array(
            'sanitize_callback'	=> 'esc_url_raw',

        ) );
        $wp_customize->add_setting( 'corvette_googleplus', array(
            'sanitize_callback'	=> 'esc_url_raw',

        ) );

        $wp_customize->add_setting( 'corvette_pinterest', array(
            'sanitize_callback'	=> 'esc_url_raw',

        ) );

        $wp_customize->add_setting( 'corvette_linkedin', array(
            'sanitize_callback'	=> 'esc_url_raw',

        ) );
        $wp_customize->add_setting( 'corvette_instagram', array(
            'sanitize_callback'	=> 'esc_url_raw',

        ) );
        $wp_customize->add_setting( 'corvette_bloglovin', array(
            'sanitize_callback'	=> 'esc_url_raw',

        ) );
        $wp_customize->add_setting( 'corvette_snapchat', array(
            'sanitize_callback'	=> 'esc_url_raw',

        ) );
        $wp_customize->add_setting( 'corvette_tumblr', array(
            'sanitize_callback'	=> 'esc_url_raw',

        ) );
        $wp_customize->add_setting( 'corvette_youtube', array(
            'sanitize_callback'	=> 'esc_url_raw',

        ) );
        $wp_customize->add_setting( 'corvette_dribbble', array(
            'sanitize_callback'	=> 'esc_url_raw',

        ) );
        $wp_customize->add_setting( 'corvette_soundcloud', array(
            'sanitize_callback'	=> 'esc_url_raw',

        ) );
        $wp_customize->add_setting( 'corvette_vimeo', array(
            'sanitize_callback'	=> 'esc_url_raw',

        ) );
        $wp_customize->add_setting( 'corvette_rss', array(
            'sanitize_callback'	=> 'esc_url_raw',

        ) );


        $wp_customize->add_control( 'facebook', array(
            'type' => 'url',
            'label' => __( 'Facebook', 'corvette' ),
            'section' => 'corvette_social_section',
            'settings' => 'corvette_facebook',
        ) );
        $wp_customize->add_control( 'twitter', array(
            'type' => 'url',
            'label' => __( 'Twitter', 'corvette' ),
            'section' => 'corvette_social_section',
            'settings' => 'corvette_twitter',
        ) );
        $wp_customize->add_control( 'googleplus', array(
            'type' => 'url',
            'label' => __( 'Google Plus', 'corvette' ),
            'section' => 'corvette_social_section',
            'settings' => 'corvette_googleplus',
        ) );
        $wp_customize->add_control( 'linkedin', array(
            'type' => 'url',
            'label' => __( 'Linkedin', 'corvette' ),
            'section' => 'corvette_social_section',
            'settings' => 'corvette_linkedin',
        ) );
        $wp_customize->add_control( 'pinterest', array(
            'type' => 'url',
            'label' => __( 'Pinterest', 'corvette' ),
            'section' => 'corvette_social_section',
            'settings' => 'corvette_pinterest',
        ) );

        $wp_customize->add_control( 'instagram', array(
            'type' => 'url',
            'label' => __( 'Instagram', 'corvette' ),
            'section' => 'corvette_social_section',
            'settings' => 'corvette_instagram',
        ) );
        $wp_customize->add_control( 'bloglovin', array(
            'type' => 'url',
            'label' => __( 'Bloglovin', 'corvette' ),
            'section' => 'corvette_social_section',
            'settings' => 'corvette_bloglovin',
        ) );
        $wp_customize->add_control( 'snapchat', array(
            'type' => 'url',
            'label' => __( 'Snapchat', 'corvette' ),
            'section' => 'corvette_social_section',
            'settings' => 'corvette_snapchat',
        ) );
        $wp_customize->add_control( 'tumblr', array(
            'type' => 'url',
            'label' => __( 'Tumblr', 'corvette' ),
            'section' => 'corvette_social_section',
            'settings' => 'corvette_tumblr',
        ) );
        $wp_customize->add_control( 'youtube', array(
            'type' => 'url',
            'label' => __( 'Youtube', 'corvette' ),
            'section' => 'corvette_social_section',
            'settings' => 'corvette_youtube',
        ) );
        $wp_customize->add_control( 'dribbble', array(
            'type' => 'url',
            'label' => __( 'Dribbble', 'corvette' ),
            'section' => 'corvette_social_section',
            'settings' => 'corvette_dribbble',
        ) );
        $wp_customize->add_control( 'soundcloud', array(
            'type' => 'url',
            'label' => __( 'Soundcloud', 'corvette' ),
            'section' => 'corvette_social_section',
            'settings' => 'corvette_soundcloud',
        ) );
        $wp_customize->add_control( 'vimeo', array(
            'type' => 'url',
            'label' => __( 'Vimeo', 'corvette' ),
            'section' => 'corvette_social_section',
            'settings' => 'corvette_vimeo',
        ) );
        $wp_customize->add_control( 'rss', array(
            'type' => 'url',
            'label' => __( 'Rss', 'corvette' ),
            'section' => 'corvette_social_section',
            'settings' => 'corvette_rss',
        ) );


    }
    add_action('customize_register', 'corvette_sociallink_customizer');

    function corvette_sanitize_text( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    }

    //checkbox sanitization function
    function corvette_sanitize_checkbox( $input ){

        //returns true if checkbox is checked
        return ( isset( $input ) ? true : false );
    }

    //radio box sanitization function
    function corvette_sanitize_radio( $input, $setting ){

        //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
        $input = sanitize_key($input);

        //get the list of possible radio box options
        $choices = $setting->manager->get_control( $setting->id )->choices;

        //return input if valid or return default option
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

    }

    function corvette_panels_js() {
        wp_enqueue_style( 'corvette-customizer-ui-css', get_theme_file_uri( '/customizer-ui.css' ) );
    }
    add_action( 'customize_controls_enqueue_scripts', 'corvette_panels_js' );
