<?php get_header(); ?>

<div>

    <?php
    $image = the_post_thumbnail('large');
    ?>

    <?php
    if ($image) : echo wp_get_attachment_image($image['id'], 'large');
    endif;
    ?>
</div>


<div class="single-news-wrapper">

    <p class="date"> <?php the_time(get_option('date_format')); ?> </p>
    <h3 class="single-news-title"><?php the_title(); ?> </h3>
    <div class="single-thumbnail"> <?php the_post_thumbnail('medium') ?> </div>
    <p class="single-news-content"> <?php the_content(); ?> </p>

</div>

<?php get_footer(); ?>