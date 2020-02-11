<?php get_header(); ?>




<div class="container">

    <div id="content-area">




    <div id="mainpage" <?php if(get_theme_mod('home_sidebar') == true) : ?>class="fullwidth"<?php endif; ?>>

        <ul class="ct_grid_view">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php get_template_part('content-area', 'grid'); ?>

            <?php endwhile; ?>

        </ul>

        <?php my_pagination(); ?>

        <?php endif; ?>

    </div>

<?php if(get_theme_mod('home_sidebar')) : else : ?><?php get_sidebar(); ?><?php endif; ?>
<?php get_footer(); ?>