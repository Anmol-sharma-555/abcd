<div class="slider-area <?php if(!get_theme_mod('featured_box')) : ?>feat-box<?php endif; ?>">
			
	<div class="ct_slides_area">
	
		<div class="<?php if(get_theme_mod('chick_themes_slider_full')=='full') : ?> ct_slider <?php elseif(get_theme_mod('chick_themes_slider_full')=='car') : ?> ct_slider_car<?php else: ?> ct_slider<?php endif; ?> "    <?php if(get_theme_mod('chick_themes_slider_full')=='car') : ?> data-space="7"<?php endif; ?>>
		
			<?php
				
				$featured_cat = get_theme_mod( 'ct_featured_cat' );
				$get_featured_posts = get_theme_mod('ct_featured_id');
				$number = get_theme_mod( 'ct_featured_slider_slides' );
				
				if($get_featured_posts) {
					$featured_posts = explode(',', $get_featured_posts);
					$args = array( 'showposts' => $number, 'post_type' => array('post', 'page'), 'post__in' => $featured_posts, 'orderby' => 'post__in' );
				} else {
					$args = array( 'cat' => $featured_cat, 'showposts' => $number );
				}
				
			?>
			
               <?php
            $image_size = "slider-thumb";
$the_cat = get_the_category();
$category_name = $the_cat[0]->cat_name;
$category_description = $the_cat[0]->category_description;
$category_link = get_category_link( $the_cat[0]->cat_ID );
?>
            
			<?php $feat_query = new WP_Query( $args ); ?>
		
			<?php if ($feat_query->have_posts()) : while ($feat_query->have_posts()) : $feat_query->the_post(); ?>
            
             <?php 
            
            
            
            if(get_theme_mod('chick_themes_slider_full')=='car'){$image_size="car-thumb"; }
            
            elseif(get_theme_mod('chick_themes_slider_full')=='full'){$image_size="full-thumb";}
            
            ?>
            <div class="item-slide">
			<div class="image-slide">
                
                <?php $pin_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
                <a class="pinhome" data-pin-do="skipLink" target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo $pin_image; ?>&description=<?php the_title(); ?>"><i class="fa fa-pinterest"></i></a>

             <a href="<?php echo get_permalink(); ?>">
                 <div class="feat-item" style="background-image:url(<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $image_size ); if(!$image) { echo get_template_directory_uri() . '/img/slider-default.png'; } else { echo $image[0]; } ?>);"></div>
             </a>
                
                <?php if(get_theme_mod('chick_themes_slider_full')=='car') : ?> 
                       <span class="category"><a href="<?php echo $category_link; ?>"><?php
echo $category_name;?></a></span>
                        
                        
                        <?php endif; ?>
                
                </div>
				<div class="feat-item-wrapper"><div class="feat-overlay">
					<div class="feat-inner">
                        
                        
						<span class="category">

                            <div class="post-category">
					      <span class="front-post-category">

     <?php

     // SHOW YOAST PRIMARY CATEGORY, OR FIRST CATEGORY
     $category = get_the_category();
     $useCatLink = true;
     // If post has a category assigned.
     if ($category){
         $category_display = '';
         $category_link = '';
         if ( class_exists('WPSEO_Primary_Term') )
         {
             // Show the post's 'Primary' category, if this Yoast feature is available, & one is set
             $wpseo_primary_term = new WPSEO_Primary_Term( 'category', get_the_id() );
             $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
             $term = get_term( $wpseo_primary_term );
             if (is_wp_error($term)) {
                 // Default to first category (not Yoast) if an error is returned
                 $category_display = $category[0]->name;
                 $category_link = get_category_link( $category[0]->term_id );
             } else {
                 // Yoast Primary category
                 $category_display = $term->name;
                 $category_link = get_category_link( $term->term_id );
             }
         }
         else {
             // Default, display the first category in WP's list of assigned categories
             $category_display = $category[0]->name;
             $category_link = get_category_link( $category[0]->term_id );
         }

         // Display category
         if ( !empty($category_display) ){
             if ( $useCatLink == true && !empty($category_link) ){
                 echo '<span class="post-category">';
                 echo '<a href="'.$category_link.'">'.htmlspecialchars($category_display).'</a>';
                 echo '</span>';
             } else {
                 echo '<span class="post-category">'.htmlspecialchars($category_display).'</span>';
             }
         }

     }
     ?>

            </span>

				</div>


                        </span>
                        

                        
						<h2 class="feat-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                        
						

                        
                        <?php if(get_theme_mod('chick_themes_slider_full')=='car') : ?> 
                        <span class="feat-author"><?php _e( 'By', 'elegance' ); ?> <?php the_author_posts_link(); ?></span>
                         <span class="feat-date"><?php _e( '', 'elegance' ); ?> <?php the_time( get_option('date_format') ); ?></span>
                        
                        <?php endif; ?>
                        
                        
					</div>
				</div></div>
				
        </div>
			
			<?php endwhile; endif; ?>
			
		</div>
	
	</div>
	
</div>