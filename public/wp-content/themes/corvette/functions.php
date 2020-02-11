<?php
/**
 * corvette functions, scripts and styles.
 *
 * @package corvette
 * @since corvette 1.0
 */


if ( ! function_exists( 'corvette_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 * @since corvette 1.0
 */
function corvette_setup() {


	/* Add Customizer settings */
	require( get_template_directory() . '/customizer.php' );

	/* Add default posts and comments RSS feed links to head */
	add_theme_support( 'automatic-feed-links' );
    //add_theme_support( 'custom-header' );



	/* Add editor styles */
	add_editor_style();

	/* Enable support for Post Thumbnails */
	add_theme_support( 'post-thumbnails' );


    add_image_size( 'corvette-random-thumb', 450, 450, true );
    add_image_size('corvette-thumb', 200, 120);

	set_post_thumbnail_size( 150, 150, true ); // Default Thumb
    add_theme_support( "title-tag" );
    add_image_size( 'corvette-large-image', 9999, 9999, false  );// Large Post Image
    add_image_size( 'corvette-medium-image', 900, 600, false  );// Large Post Image
    add_image_size( 'corvette-small-image', 715, 500, false  );// Large Post Image
	/* Custom Background Support */
	add_theme_support( 'custom-background' );

        $args = array(
            'width'         => 2000,
            'height'        => 250,

        );
        add_theme_support( 'custom-header', $args );


       add_theme_support('custom-logo', array(
           'size' => 'corvette-thumb'
       ));


    add_action('after_setup_theme', 'corvette_setup');



	/* Register Menu */
	register_nav_menus( array(
		'main' 		=> __( 'Main Menu', 'corvette' )
	) );

	/* Make theme available for translation */
	load_theme_textdomain( 'corvette', get_template_directory() . '/languages' );

	/* Add gallery format and custom gallery support */
	add_theme_support( 'post-formats', array( 'gallery' ) );
	add_theme_support( 'array_themes_gallery_support' );

	// Add support for legacy widgets
	add_theme_support( 'array_toolkit_legacy_widgets' );

	// Theme Activation Notice
    global $pagenow;

    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
        add_action( 'admin_notices', 'corvette_activation_notice' );
    }
}
endif; // corvette_setup
add_action( 'after_setup_theme', 'corvette_setup' );


/* Enqueue scripts and styles */
function corvette_scripts() {

	$version = wp_get_theme()->Version;

	//Main Stylesheet
	wp_enqueue_style( 'corvette-style', get_stylesheet_uri() );
    
	//Font Awesome
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . "/includes/fonts/fontawesome/font-awesome.min.css", array(), '4.0.3', 'screen' );
    //grid css

	//Fitvids
	wp_enqueue_script( 'jquery-fitvids', get_template_directory_uri() . '/includes/js/fitvid/jquery.fitvids.js', array( 'jquery' ), '1.0.3', true );

	//matchheight
    wp_enqueue_script( 'jquery-matchheight', get_template_directory_uri() . '/includes/js/matchheight/matchheight.js', array( 'jquery' ), $version, true );

    //Custom Scripts
	wp_enqueue_script( 'corvette-custom-js', get_template_directory_uri() . '/includes/js/custom/custom.js', array( 'jquery' ), $version, true );



    //Slickslider
	wp_enqueue_script( 'jquery-slickslider', get_template_directory_uri() . '/includes/js/slickslider/slick.min.js', array( 'jquery' ), '1.8.0', true );

    wp_enqueue_script( 'jquery-slicknav', get_template_directory_uri() . '/includes/js/slicknav/jquery.slicknav.min.js', array( 'jquery' ), $version, true );


    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css');

    if(!get_theme_mod('corvette_general_responsive')) {
        wp_enqueue_style('responsive');
    }
	//HTML5 IE Shiv
	wp_enqueue_script( 'jquery-htmlshiv', get_template_directory_uri() . '/includes/js/html5/html5shiv.js', array(), '3.7.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'corvette_scripts' );

function corvette_excerpt_more( $more ) {
    if ( !is_admin()) {
        return '...';
    }
}
add_filter('excerpt_more', 'corvette_excerpt_more');



// Widgets
include(get_template_directory() . '/inc/widgets/about_widget.php');
include(get_template_directory() . '/inc/widgets/social_widget.php');
include(get_template_directory() . '/inc/widgets/recentpost_widget.php');


/* Set the content width */
if ( ! isset( $content_width ) )
	$content_width = 690; /* pixels */


/* Register sidebars */
function corvette_register_sidebars() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'corvette' ),
		'id'            => 'sidebar',
		'description'   => __( 'Widgets in this area will be shown on the sidebar of all pages.', 'corvette' ),
		'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
		'after_widget'  => '</div>'
	) );
    register_sidebar( array(
        'name'          => __( 'Below Slider', 'corvette' ),
        'id'            => 'below-slider',
        'description'   => __( 'This widget area is for Newsletter, Ads, Most popular widgets, etc.', 'corvette' ),
        'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="below-slider">',
        'after_title' => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Left', 'corvette' ),
        'id'            => 'footer-left',
        'description'   => __( 'This widget area is for Footer Widgets.', 'corvette' ),
        'before_widget' => '<div id="%1$s" class="footerleft widget clearfix %2$s">',
        'after_widget' => '</div>'
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Center', 'corvette' ),
        'id'            => 'footer-center',
        'description'   => __( 'This widget area is for Footer Widgets.', 'corvette' ),
        'before_widget' => '<div id="%1$s" class="footercenter widget clearfix %2$s">',
        'after_widget' => '</div>'
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Right', 'corvette' ),
        'id'            => 'footer-right',
        'description'   => __( 'This widget area is for Footer Widgets.', 'corvette' ),
        'before_widget' => '<div id="%1$s" class="footerright widget clearfix %2$s">',
        'after_widget' => '</div>'
    ) );
    register_sidebar(array(
        'name' => 'Instagram Footer',
        'id' => 'sidebar-2',
        'before_widget' => '<div id="%1$s" class="instagram-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="instagram-title">',
        'after_title' => '</h4>',
        'description' => 'Use the "Instagram" widget here. IMPORTANT: For best result set number of photos to 8.',
    ));
}
add_action( 'widgets_init', 'corvette_register_sidebars' );


// Notice after Theme Activation
function corvette_activation_notice() {
    echo '<div class="notice notice-success is-dismissible">';
    echo '<p>'. esc_html__( 'Thank you for choosing Corvette! Now, we highly recommend you to visit our welcome page.', 'corvette' ) .'</p>';
    echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=about-corvette' ) ) .'" class="button button-primary">'. esc_html__( 'Get Started with Corvette', 'corvette' ) .'</a></p>';
    echo '</div>';
}


/* Custom Excerpt Length only for List Post on Homepage */

if(get_theme_mod('corvette_general_post_layout')=='list'){

    function corvette_custom_excerpt_length( $length ) {
        if ( !is_admin()) {
            return 40;
        }
    }
    add_filter('excerpt_length', 'corvette_custom_excerpt_length', 999);
}


/* Custom Comment Output */
function corvette_comments( $comment, $args, $depth ) {
	 ?>
	<li <?php comment_class('clearfix'); ?> id="li-comment-<?php comment_ID() ?>">

		<div class="comment-block" id="comment-<?php comment_ID(); ?>">
			<div class="comment-info">
				<div class="comment-corvette vcard clearfix">
					<?php echo get_avatar( $comment->comment_corvette_email, 75 ); ?>

					<div class="comment-meta commentmetadata">
						<?php /* translators: %s: comment author link */ printf(__('<cite class="fn">%s</cite>', 'corvette'), get_comment_author_link()) ?>
					</div>
				</div>
			</div><!-- comment info -->

			<div class="comment-text">
				<?php comment_text() ?>

				<div class="comment-bottom">
					<p class="reply">
						<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ) ?>
					</p>
					<?php edit_comment_link(__('Edit', 'corvette'),' ', '' ) ?>
					<a class="comment-time" href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php /* translators: %s: comment date */ printf(__('%1$s at %2$s', 'corvette'), get_comment_date(),  get_comment_time()) ?></a>
				</div>
			</div><!-- comment text -->

			<?php if ($comment->comment_approved == '0') : ?>
				<em class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'corvette') ?></em>
			<?php endif; ?>
		</div>
<?php
}

function corvette_cancel_comment_reply_button( $html, $link, $text ) {
    $style = isset($_GET['replytocom']) ? '' : ' style="display:none;"';
    $button = '<div id="cancel-comment-reply-link"' . $style . '>';
    return $button . '<i class="fa fa-times"></i> </div>';
}

add_action( 'cancel_comment_reply_link', 'corvette_cancel_comment_reply_button', 10, 3 );


/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */



/**
 * Sets the corvettedata global when viewing an author archive.
 *
 * It removes the need to call the_post() and rewind_posts() in an corvette
 * template to print information about the corvette.
 *
 * @global WP_Query $wp_query WordPress Query object.
 * @return void
 */
function corvette_setup_corvette() {
	global $wp_query;

	if ( $wp_query->is_corvette() && isset( $wp_query->post ) ) {
		$GLOBALS['corvettedata'] = get_userdata( $wp_query->post->post_corvette );
	}
}
add_action( 'wp', 'corvette_setup_corvette' );


/**
 * Return the Google font stylesheet URL
 */
function corvette_add_google_fonts() {
    wp_enqueue_style( 'corvette-pacifico-google-fonts', 'https://fonts.googleapis.com/css?family=Pacifico', false );
    wp_enqueue_style( 'corvette-roboto-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,500,300,600,700', false );
}
add_action( 'wp_enqueue_scripts', 'corvette_add_google_fonts' );

/* Start Category Count in Span */

add_filter('wp_list_categories', 'corvette_cat_count_span');
function corvette_cat_count_span($links) {
    $links = str_replace('</a> (', '</a> <span>', $links);
    $links = str_replace(')', '</span>', $links);
    return $links;
}

/* End Category Count in Span */


/* Start Archive Count in Span */

add_filter('get_archives_link', 'corvette_archive_count_span');
function corvette_archive_count_span($links) {
    $links = str_replace('</a>&nbsp;(', '</a> <span class="archiveCount">', $links);
    $links = str_replace(')', '</span>', $links);
    return $links;
}

/* End Archive Count in Span */

function corvette_wpb_author_info_box( $content ) {

global $post;

// Detect if it is a single post with a post author
if ( is_single() && isset( $post->post_author ) ) {

// Get author's display name 
$display_name = get_the_author_meta( 'display_name', $post->post_author );

// If display name is not available then use nickname as display name
if ( empty( $display_name ) )
$display_name = get_the_author_meta( 'nickname', $post->post_author );

// Get author's biographical information or description
$user_description = get_the_author_meta( 'user_description', $post->post_author );

// Get author's website URL 
$user_website = get_the_author_meta('url', $post->post_author);

// Get link to the corvette archive page
$user_posts = get_author_posts_url( get_the_author_meta( 'ID' , $post->post_author));
 
if ( ! empty( $display_name ) )

$author_details = '<p class="corvette_name">About <a href="'. esc_url($user_posts) .'">' . esc_html($display_name) . '</a></p>';

if ( ! empty( $user_description ) )
// author avatar and bio

$author_details .= '<p class="corvette_details">' . get_avatar( get_the_author_meta('user_email') , 90 ) . nl2br( $user_description ). '</p>';

$author_details .= '<p class="corvette_links"><a href="'. esc_url($user_posts) .'">' . esc_html__('View all posts by ','corvette') . esc_html($display_name) . '</a>';

// Check if  author has a website in their profile
if ( ! empty( $user_website ) ) {

// Display author website link
$author_details .= ' | <a href="' . esc_url($user_website) .'" target="_blank" rel="nofollow">' . esc_html__('Website','corvette') . '</a></p>';

} else { 
// if there is no author website then just close the paragraph
$author_details .= '</p>';
}

// Pass all this info to post content  
$content = $content . '<footer class="corvette_bio_section" >' . $author_details . '</footer>';
}
echo $content;
}

function corvette_getCategory()
{
    // SHOW YOAST PRIMARY CATEGORY, OR FIRST CATEGORY
    $category = get_the_category();
    $useCatLink = true;
    // If post has a category assigned.
    if ($category) {
        $category_display = '';
        $category_link = '';
        if (class_exists('WPSEO_Primary_Term')) {
            // Show the post's 'Primary' category, if this Yoast feature is available, & one is set
            $wpseo_primary_term = new WPSEO_Primary_Term('category', get_the_id());
            $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
            $term = get_term($wpseo_primary_term);
            if (is_wp_error($term)) {
                // Default to first category (not Yoast) if an error is returned
                $category_display = $category[0]->name;
                $category_link = get_category_link($category[0]->term_id);
            } else {
                // Yoast Primary category
                $category_display = $term->name;
                $category_link = get_category_link($term->term_id);
            }
        } else {
            // Default, display the first category in WP's list of assigned categories
            $category_display = $category[0]->name;
            $category_link = get_category_link($category[0]->term_id);

        }

        // Display category
        if (!empty($category_display)) {
            if ($useCatLink == true && !empty($category_link)) {
                echo '<span class="post-category">';
                echo '<a href="' . esc_url($category_link) . '">' . esc_html($category_display) . '</a>';

                echo '</span>';
            } else {
                echo '<span class="post-category">' . esc_html($category_display) . '</span>';
            }
        }

    }
}

//theme options
include(get_template_directory() . '/corvette_custom_controller.php');
include(get_template_directory() . '/customizer_style.php');
//kirki themeoptions

if (  class_exists( 'kirki' ) ) {
    include(get_template_directory() . '/theme-options.php');
}



// Add our function to the post content filter 
add_action( 'corvette_authorbox', 'corvette_wpb_author_info_box' );

require( get_template_directory() . '/tgm-plugin-activation.php' );


// About Corvette
require get_parent_theme_file_path( '/inc/about/about-corvette.php' );



