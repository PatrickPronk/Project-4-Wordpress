<?php get_header(); ?>

<div>
    <h1 class="title_about"><?php the_title(); ?></h1>
</div>
<div>
    <h1 class="s-title_reviews">Wonder Reviews</h1>
</div>
<div>
    <h1 class="t-title_reviews">“Inspirational quote somwhere in here”</h1>
</div>
<div>
    <div class="desc_about"><?php the_content(); ?></div>
    <img class="img_about" src="/wp-content/themes/Wonder/assets/images/image_about.png" alt="">
</div>

<?php get_footer(); ?>