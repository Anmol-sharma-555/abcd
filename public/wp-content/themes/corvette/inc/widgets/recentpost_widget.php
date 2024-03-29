<?php
/**
 * Plugin Name: Recent Posts Widget
 */

add_action( 'widgets_init', 'corvette_recent_news_load_widget' );

function corvette_recent_news_load_widget() {
	register_widget( 'corvette_recent_news_widget' );
}

class corvette_recent_news_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	public function __construct()
    {

    /* Widget settings. */
		$widget_ops = array( 'classname' => 'corvette_recent_news_widget', 'description' => __('A widget that displays your recent posts from all categories or a certain', 'corvette') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 250, 'height' => 350, 'id_base' => 'corvette_recent_news_widget' );

		/* Create the widget. */
        parent::__construct( 'corvette_recent_news_widget', __('Corvette: Recent Posts', 'corvette'), $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
    function widget( $args, $instance ) {
        extract( $args );


        /* Our variables from the widget settings. */

        $title = apply_filters(
            'widget_title',
            empty($instance['title']) ? '' : $instance['title'],
            $instance,
            $this->id_base
        );
        $categories = $instance['categories'];
        $number = $instance['number'];


        $query = array('showposts' => $number, 'nopaging' => 0, 'post_status' => 'publish', 'ignore_sticky_posts' => 1, 'category' => $categories);

        $loop = new WP_Query($query);
        if ($loop->have_posts()) :

            /* Before widget (defined by themes). */
            echo $before_widget;

            /* Display the widget title if one was input (before and after defined by themes). */
            if ( $title )
                echo $before_title . $title . $after_title;

            ?>
            <ul class="side-newsfeed">

            <?php  while ($loop->have_posts()) : $loop->the_post(); ?>

            <li>

                <div class="side-item clearfix">

                    <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : ?>
                        <div class="side-image">
                            <a href="<?php echo esc_url(get_permalink()) ?>" rel="bookmark"><?php the_post_thumbnail('corvette-random-thumb', array('class' => 'side-item-thumb')); ?></a>
                        </div>




                    <?php endif; ?>
                    <div class="side-item-text">
                        <?php corvette_getCategory(); ?>
                        <div><a href="<?php echo esc_url(get_permalink()) ?>" rel="bookmark"><?php the_title(); ?></a></div>
                        <span class="side-item-meta"><?php the_time( get_option('date_format') ); ?></span>
                    </div>
                </div>

            </li>

        <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        <?php endif; ?>

        </ul>

        <?php

        /* After widget (defined by themes). */
        echo $after_widget;
    }

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['categories'] = $new_instance['categories'];
		$instance['number'] = strip_tags( $new_instance['number'] );

		return $instance;
	}


	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => __('Recent Posts', 'corvette'), 'number' => 5, 'categories' => '');
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e('Title:', 'corvette'); ?></label>
			<input  type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr($instance['title']); ?>"  />
		</p>

		<!-- Category -->
		

		<!-- Number of posts -->
		<p>
			<label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php esc_html_e('Number of posts to show:', 'corvette'); ?></label>
			<input  type="text" class="widefat" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" value="<?php echo absint($instance['number']); ?>" size="3" />
		</p>


	<?php
	}
}

?>