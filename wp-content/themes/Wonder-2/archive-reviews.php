<?php get_header(); ?>

<div>
    <h1 class="title_about">Overview</h1>
</div>


<div class="container ">

    <?php
    $args = array(
        'post_type' => 'reviews',
        'order' => 'DESC',
        'post_status' => 'publish',
    );
    $the_query = new WP_Query($args);
    ?>
    <div class="align_posts_archive">
        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="the_title_archive">
                    <h1><?php the_title(); ?></h1>
                </div>

                <?php if (has_post_thumbnail()) :  ?>
                    <img src="<?php the_post_thumbnail_url('smallest'); ?>">

                <?php endif; ?>

                <div class="the_exerpt_archive">
                    <?php the_excerpt(); ?>
                </div>

                <li class="the_permalink_achive"><a href="<?php the_permalink(); ?>">Meer lezen...</a></li>
            <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>

    <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

</div>


<?php get_footer(); ?>