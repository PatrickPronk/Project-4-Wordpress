<?php get_header(); ?>

<div>
	<h1 class="title_about">Overview</h1>
</div>


<div class="container ">

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