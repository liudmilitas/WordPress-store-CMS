<?php /* Template Name: News Template */ ?>

<?php get_header(); ?>

<div class="page-title">
    <h2>
        <?php the_title(); ?>
    </h2>
</div>

<?php the_content(); ?>

<div class="template-news-wrap">
    <?php
    $query = new WP_Query(array(
        'posts_per_page' => 999,
    )); ?>

    <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="news-wrapper">
                <a class="permalink" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <div class="thumbnail"> <?php the_post_thumbnail('thumbnail'); ?></div>
                </a>
                <h3 class="newspage-title"><?php the_title(); ?> </h3>
                <span class="date"> <?php the_time(get_option('date_format')); ?></span>
                <p><?php the_excerpt() ?></p>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>


<?php wp_reset_postdata(); ?>


<?php get_footer(); ?>