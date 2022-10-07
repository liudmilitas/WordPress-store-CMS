<?php /* Template Name: About Template */ ?>

<?php get_header(); ?>

<div class="about-content">
    <?php the_content(); ?>
    <div class="template-wrap">
        <?php get_template_part('template-parts/template-news'); ?>
    </div>
</div>



<?php get_footer(); ?>