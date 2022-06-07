<?php get_header(); ?>


<div class="image-banner">
    <img class="image-banner" src="/wp-content/themes/Wonder/assets/images/Wonder reviews.png" alt="">
</div>
<div class="style-link">
    <a class="style-link-buttons" href="<?php echo get_permalink(23); ?>">About Us</a>
    <a class="style-link-buttons" href="<?php echo get_tag_link(4); ?>">Overview</a>
</div>
<hr>
<div>
    <h2 class="last-reviews">Last reviews:</h2>
</div>

<div class="container reviews">


    <?php $wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>

    <?php if ($wpb_all_query->have_posts()) : ?>

        <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
            <h1><?php the_title(); ?></h1>

            <?php if (has_post_thumbnail()) : ?>

                <img src="<?php the_post_thumbnail_url('smallest'); ?>">

            <?php endif; ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; ?>



        <?php wp_reset_postdata(); ?>

    <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>


</div>


<?php get_footer(); ?>