<li>
<article id="post-<?php the_ID(); ?>" <?php post_class('grid-item'); ?>>
    <div class="entry_article_header">

        <?php if(!get_theme_mod('post_categories')) : ?>
            <span class="category"><?php



                $the_cat = get_the_category();
                $category_name = $the_cat[0]->cat_name;
                $category_link = get_category_link( $the_cat[0]->cat_ID );
                ?>

                In <a href="<?php echo $category_link; ?>" class="category_logo">
<?php echo $category_name; ?>
            </a>




            </span>
        <?php endif; ?>

        <?php if(is_single()) : ?>
            <h1><?php the_title(); ?></h1>
        <?php else : ?>
            <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php endif; ?>


    </div>
	<?php if(has_post_thumbnail()) : ?>
	<div class="article_image1">




		<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('random-thumb'); ?></a>
        <?php $pin_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
        <a class="pinhome" data-pin-do="skipLink" target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo $pin_image; ?>&description=<?php the_title(); ?>"><i class="fa fa-pinterest"></i></a>

	</div>
	<?php endif; ?>
	









	<div class="post-entry">
						
		<p><?php echo ct_string_limit_words(get_the_excerpt(), 31); ?>&hellip;</p>

	</div>

<div class="pully"><a class="read-more" href="<?php echo get_permalink(); ?>">Read More</a></div>

    <div class="metawrap">
    <span class="post-share">
        <div class="social-share-wrapper">
            <div class="share"><i class="fa fa-share-alt"></i></div>
            <div class="social-share">
                <div class="facebook share-icon">
                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a></div>
                <div class="twitter share-icon">
                <a target="_blank" href="https://twitter.com/home?status=Check%20out%20this%20article:%20<?php print chickthemes_social_title( get_the_title() ); ?>%20-%20<?php echo urlencode(the_permalink()); ?>"><i class="fa fa-twitter"></i></a>
                    <?php $pin_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
                </div>
                <div class="pinterest share-icon">
                <a data-pin-do="skipLink" target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo $pin_image; ?>&description=<?php the_title(); ?>"><i class="fa fa-pinterest"></i></a></div>
                <div class="google share-icon">
                <a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i></a></div>
            </div>
        </div>
</span>
    <div class="meta-container">


        <?php if(!get_theme_mod('post_view_counter')) : ?>
            <span class="CT_view_counter_home">
        <?php
        echo getCTcounterViews(get_the_ID());
        ?>
        </span>

        <?php endif; ?>

    </div>
    </div>


</article>
</li>