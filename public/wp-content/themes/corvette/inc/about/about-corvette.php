<?php // About Corvette

// Add About Corvette Page
function corvette_about_page() {
    add_theme_page( esc_html__( 'About Corvette', 'corvette' ), esc_html__( 'About Corvette', 'corvette' ), 'edit_theme_options', 'about-corvette', 'corvette_about_page_output' );
}
add_action( 'admin_menu', 'corvette_about_page' );

// Render About corvette HTML
function corvette_about_page_output() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Welcome to Corvette!', 'corvette' ); ?></h1>
        <p class="welcome-text">
            <?php esc_html_e( 'Corvette is free personal and multi-author WordPress Blog theme. It\'s perfect for any kind of blog: personal, multi-author, food, lifestyle, etc... Is fully Responsive and Retina Display ready, clean, modern and minimal. Coded with latest WordPress\' standards.', 'corvette' ); ?>
        </p>

        <!-- Tabs -->
        <?php $active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'corvette_tab_1'; ?>

        <div class="nav-tab-wrapper">
            <a href="<?php echo esc_url('?page=about-corvette&tab=corvette_tab_1')?>" class="nav-tab <?php echo $active_tab == 'corvette_tab_1' ? 'nav-tab-active' : ''; ?>">
                <?php esc_html_e( 'Getting Started', 'corvette' ); ?>
            </a>
            <a href="<?php echo esc_url('?page=about-corvette&tab=corvette_tab_2')?>" class="nav-tab <?php echo $active_tab == 'corvette_tab_2' ? 'nav-tab-active' : ''; ?>">
                <?php esc_html_e( 'Recommended Plugins', 'corvette' ); ?>
            </a>
            <a href="<?php echo esc_url('?page=about-corvette&tab=corvette_tab_3')?>" class="nav-tab <?php echo $active_tab == 'corvette_tab_3' ? 'nav-tab-active' : ''; ?>">
                <?php esc_html_e( 'Support', 'corvette' ); ?>
            </a>
            <a href="<?php echo esc_url('?page=about-corvette&tab=corvette_tab_4')?>" class="nav-tab <?php echo $active_tab == 'corvette_tab_4' ? 'nav-tab-active' : ''; ?>">
                <?php esc_html_e( 'Free vs Premium', 'corvette' ); ?>
            </a>
        </div>

        <!-- Tab Content -->
        <?php if ( $active_tab == 'corvette_tab_1' ) : ?>

            <div class="three-columns-wrap">

                <br>

                <div class="column-wdith-3">
                    <h3><?php esc_html_e( 'Theme Documentation', 'corvette' ); ?></h3>
                    <p>
                        <?php esc_html_e( 'Highly recommended to begin with this, read the full theme documentation to understand the basics and even more details about how to use Corvette. It is worth to spend 10 minutes and know almost everything about the theme.', 'corvette' ); ?>
                    </p>
                    <a target="_blank" href="<?php echo esc_url('http://support.vinethemes.com/knowledgebase/corvette-multipurpose-wordpress-theme/'); ?>" class="button button-primary"><?php esc_html_e( 'Read Documentation', 'corvette' ); ?></a>
                </div>


                <div class="column-wdith-3">
                    <h3><?php esc_html_e( 'Theme Customizer', 'corvette' ); ?></h3>
                    <p>
                        <?php esc_html_e( 'All theme options are located here. After reading the Theme Documentation we recommend you to open the Theme Customizer and play with some options. You will enjoy it.', 'corvette' ); ?>
                    </p>
                    <a target="_blank" href="<?php echo esc_url( wp_customize_url() );?>" class="button button-primary"><?php esc_html_e( 'Customize Your Site', 'corvette' ); ?></a>
                </div>

            </div>

            <div class="four-columns-wrap">

                <h2><?php esc_html_e( 'Corvette Premium - Predefined Styles', 'corvette' ); ?></h2>
                <p>
                    <?php esc_html_e( 'Corvette Premium\'s powerful setup allows you to easily create unique looking sites. Here are a few included examples that can be installed with one click in the ', 'corvette' ); ?>
                    <a target="_blank" href="http://www.vinethemes.com/downloads/corvette-multipurpose-wordpress-theme/"><?php esc_html_e( 'Corvette Premium Theme.', 'corvette' ); ?></a>
                    <?php esc_html_e( 'More details in the theme Documentation.', 'corvette' ); ?>
                </p>

                <div class="column-wdith-4">
                    <div class="active-style"><?php esc_html_e( 'Active', 'corvette' ); ?></div>

                    <div>
                        <h2><?php esc_html_e( 'Version 1', 'corvette' ); ?></h2>
                        <a href="<?php echo esc_url('http://demo.vinethemes.com/corvette/'); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Live Preview', 'corvette' ); ?></a>
                    </div>
                </div>
                <div class="column-wdith-4">

                    <div>
                        <h2><?php esc_html_e( 'Version 2', 'corvette' ); ?></h2>
                        <a href="<?php echo esc_url('http://demo.vinethemes.com/corvette/?home=2'); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Live Preview', 'corvette' ); ?></a>
                    </div>
                </div>
                <div class="column-wdith-4">

                    <div>
                        <h2><?php esc_html_e( 'Version 3', 'corvette' ); ?></h2>
                        <a href="<?php echo esc_url('http://demo.vinethemes.com/corvette/?home=3'); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Live Preview', 'corvette' ); ?></a>
                    </div>
                </div>


            </div>

        <?php elseif ( $active_tab == 'corvette_tab_2' ) : ?>

            <div class="three-columns-wrap">

                <br>
                <p><?php esc_html_e( 'Recommended Plugins are fully supported by Corvette theme. They well build the theme by giving more and more features. These are highly recommended to install.', 'corvette' ); ?></p>
                <br>

                <?php


                // Kirki
                corvette_recommended_plugin( 'kirki', 'index', esc_html__( 'Kirki', 'corvette' ), esc_html__( 'Theme advanced customizer options.', 'corvette' ) );

                // MailChimp
                corvette_recommended_plugin( 'mailchimp-for-wp', 'mailchimp-for-wp', esc_html__( 'Mailchimp', 'corvette' ), esc_html__( 'Mail newsletters. Simple but flexible.', 'corvette' ) );

                // Instagram Widget
                corvette_recommended_plugin( 'wp-instagram-widget', 'wp-instagram-widget', esc_html__( 'WP Instagram Widget', 'corvette' ), esc_html__( 'A WordPress widget for showing your latest Instagram photos.', 'corvette' ) );



                ?>


            </div>

        <?php elseif ( $active_tab == 'corvette_tab_3' ) : ?>

            <div class="three-columns-wrap">

                <br>

                <div class="column-wdith-3">
                    <h3>
                        <span class="dashicons dashicons-sos"></span>
                        <?php esc_html_e( 'Forums', 'corvette' ); ?>
                    </h3>
                    <p>
                        <?php esc_html_e( 'Before asking a questions it\'s highly recommended to search on forums, but if you can\'t find the solution feel free to create a new topic.', 'corvette' ); ?>
                    <hr>
                    <a target="_blank" href="<?php echo esc_url('http://support.vinethemes.com/'); ?>"><?php esc_html_e( 'Go to Support Forums', 'corvette' ); ?></a>
                    </p>
                </div>

                <div class="column-wdith-3">
                    <h3>
                        <span class="dashicons dashicons-book"></span>
                        <?php esc_html_e( 'Documentation', 'corvette' ); ?>
                    </h3>
                    <p>
                        <?php esc_html_e( 'Need more details? Please check out corvette Theme Documentation for detailed information.', 'corvette' ); ?>
                    <hr>
                    <a target="_blank" href="<?php echo esc_url('http://support.vinethemes.com/knowledgebase/corvette-multipurpose-wordpress-theme/'); ?>"><?php esc_html_e( 'Read Full Documentation', 'corvette' ); ?></a>
                    </p>
                </div>


                <div class="column-wdith-3">
                    <h3>
                        <span class="dashicons dashicons-smiley"></span>
                        <?php esc_html_e( 'Donation', 'corvette' ); ?>
                    </h3>
                    <p>
                        <?php esc_html_e( 'Even a small sum can help us a lot with theme development. If the corvette theme is useful and our support is helpful, please don\'t hesitate to donate a little bit, at least buy us a Coffee or a Beer :)', 'corvette' ); ?>
                    <hr>
                    <a target="_blank" href="<?php echo esc_url('https://www.paypal.me/oddthemes'); ?>"><?php esc_html_e( 'Donate with PayPal', 'corvette' ); ?></a>
                    </p>
                </div>

            </div>

        <?php elseif ( $active_tab == 'corvette_tab_4' ) : ?>

            <br><br>

            <table class="free-vs-pro form-table">
                <thead>
                <tr>
                    <th>
                        <a href="<?php echo esc_url('http://www.vinethemes.com/downloads/corvette-multipurpose-wordpress-theme/'); ?>" target="_blank" class="button button-primary button-hero">
                            <?php esc_html_e( 'Get Corvette Premium', 'corvette' ); ?>
                        </a>

                    </th>
                    <th><?php esc_html_e( 'Corvette', 'corvette' ); ?></th>
                    <th><?php esc_html_e( 'Corvette Premium', 'corvette' ); ?></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <h3><?php esc_html_e( '100% Responsive and Retina Ready', 'corvette' ); ?></h3>
                        <p><?php esc_html_e( 'Theme adapts to any kind of device screen, from mobile phones to high resolution Retina displays.', 'corvette' ); ?></p>
                    </td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                </tr>
                <tr>
                    <td>
                        <h3><?php esc_html_e( 'Translation Ready', 'corvette' ); ?></h3>
                        <p><?php esc_html_e( 'Each hard-coded string is ready for translation, means you can translate everything. Language "corvette.pot" file included.', 'corvette' ); ?></p>
                    </td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                </tr>
                <tr>
                    <td>
                        <h3><?php esc_html_e( 'MailChimp Support', 'corvette' ); ?></h3>
                        <p><?php esc_html_e( 'The most popular email client plugin. Very simple but super flexible.', 'corvette' ); ?></p>
                    </td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                </tr>
                <tr>
                    <td>
                        <h3><?php esc_html_e( 'Image &amp; Text Logos', 'corvette' ); ?></h3>
                        <p><?php esc_html_e( 'Upload your logo image(set the size) or simply type your text logo.', 'corvette' ); ?></p>
                    </td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                </tr>
                <tr>
                    <td>
                        <h3><?php esc_html_e( 'Featured Posts Slider', 'corvette' ); ?></h3>
                        <p>
                            <?php esc_html_e( 'Showcase unlimited number of Blog Posts in header area. There are three Slider designs.', 'corvette' ); ?>
                        </p>
                    </td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                </tr>
                <tr>
                    <td>
                        <h3><?php esc_html_e( 'Background Image/Color', 'corvette' ); ?></h3>
                        <p><?php esc_html_e( 'Set the custom body Background image or Color.', 'corvette' ); ?></p>
                    </td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                </tr>
                <tr>
                <tr>
                    <td>
                        <h3><?php esc_html_e( 'Header Background Image/Color', 'corvette' ); ?></h3>
                        <p>
                            <?php esc_html_e( 'Set the custom header Background image or Color.', 'corvette' ); ?>
                        </p>
                    </td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                </tr>
                <tr>
                    <td>
                        <h3><?php esc_html_e( 'Instagram Widget Area', 'corvette' ); ?></h3>
                        <p>
                            <?php esc_html_e( 'Set your Instagram Images in the footer.', 'corvette' ); ?>
                        </p>
                    </td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                </tr>

                <tr>
                    <td>
                        <h3><?php esc_html_e( 'Post Layouts', 'corvette' ); ?></h3>
                        <p><?php esc_html_e( 'Standard, List and Grid Blog Feed layout.', 'corvette' ); ?></p>
                    </td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                </tr>
                <tr>
                    <td>
                        <h3><?php esc_html_e( 'Multi-level Sub Menu Support', 'corvette' ); ?></h3>
                        <p><?php esc_html_e( 'Unlimited level of sub menus. Add as much as you need.', 'corvette' ); ?></p>
                    </td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                </tr>
                <tr>
                    <td>
                        <h3><?php esc_html_e( 'Right Sidebar', 'corvette' ); ?></h3>
                        <p>
                            <?php esc_html_e( 'Right Widgetised area.', 'corvette' ); ?>
                        </p>
                    </td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                </tr>
                <!-- Only Pro -->
                <tr>
                    <td>
                        <h3><?php esc_html_e( 'Unlimited Colors', 'corvette' ); ?></h3>
                        <p><?php esc_html_e( 'Tons of color options. You can customize your Header, Content and Footer separately as much as possible.', 'corvette' ); ?></p>
                    </td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                </tr>
                <tr>
                    <td>
                        <h3><?php esc_html_e( '800+ Google Fonts', 'corvette' ); ?></h3>
                        <p><?php esc_html_e( 'Rich Typography options. Choose from more than 800 Google Fonts, adjust Size, Line Height, Font Weight, etc...', 'corvette' ); ?></p>
                    </td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                </tr>
                <tr>
                    <td>
                        <h3><?php esc_html_e( 'Grid Layout', 'corvette' ); ?></h3>
                        <p><?php esc_html_e( 'Choose from 1 up to 4 columns grid layout for your Blog Feed.', 'corvette' ); ?></p>
                    </td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                </tr>
                <tr>
                    <td>
                        <h3><?php esc_html_e( 'List Layout', 'corvette' ); ?></h3>
                        <p><?php esc_html_e( 'Choose from 1 up to 4 columns grid layout for your Blog Feed.', 'corvette' ); ?></p>
                    </td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                </tr>
                <tr>
                    <td>
                        <h3><?php esc_html_e( 'Advanced Footer Options', 'corvette' ); ?></h3>
                        <p><?php esc_html_e( 'Theme and Author credit links in the footer are automatically removed.', 'corvette' ); ?></p>
                    </td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-no"></span></td>
                    <td class="compare-icon"><span class="dashicons-before dashicons-yes"></span></td>
                </tr>


                <tr>
                    <td></td>
                    <td colspan="2">
                        <a href="<?php echo esc_url('http://www.vinethemes.com/downloads/corvette-multipurpose-wordpress-theme/'); ?>" target="_blank" class="button button-primary button-hero">
                            <?php esc_html_e( 'Get Corvette Premium', 'corvette' ); ?>
                        </a>
                        <br>

                    </td>
                </tr>
                </tbody>
            </table>

        <?php endif; ?>

    </div><!-- /.wrap -->
    <?php
} // end corvette_about_page_output

// Check if plugin is installed
function corvette_check_installed_plugin( $slug, $filename ) {
    return file_exists( ABSPATH . 'wp-content/plugins/' . $slug . '/' . $filename . '.php' ) ? true : false;
}

// Generate Recommended Plugin HTML
function corvette_recommended_plugin( $slug, $filename, $name, $description) {

    if ( $slug === 'facebook-pagelike-widget' ) {
        $size = '128x128';
    } else {
        $size = '256x256';
    }

    ?>

    <div class="plugin-card">
        <div class="name column-name">
            <h3>
                <?php echo esc_html( $name ); ?>
                <img src="<?php echo esc_url('https://ps.w.org/'. $slug .'/assets/icon-'. $size .'.png') ?>" class="plugin-icon" alt="">
            </h3>
        </div>
        <div class="action-links">
            <?php if ( corvette_check_installed_plugin( $slug, $filename ) ) : ?>
                <button type="button" class="button button-disabled" disabled="disabled"><?php esc_html_e( 'Installed', 'corvette' ); ?></button>
            <?php else : ?>
                <a class="install-now button-primary" href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin='. $slug ), 'install-plugin_'. $slug ) ); ?>" >
                    <?php esc_html_e( 'Install Now', 'corvette' ); ?>
                </a>
            <?php endif; ?>
        </div>
        <div class="desc column-description">
            <p><?php echo esc_html( $description ); ?></p>
        </div>
    </div>

    <?php
}

// enqueue ui CSS/JS
function corvette_enqueue_about_page_scripts($hook) {

    if ( 'appearance_page_about-corvette' != $hook ) {
        return;
    }

    // enqueue CSS
    wp_enqueue_style( 'corvette-about-page-css', get_theme_file_uri( '/inc/about/css/about-corvette-page.css' ) );

}
add_action( 'admin_enqueue_scripts', 'corvette_enqueue_about_page_scripts' );