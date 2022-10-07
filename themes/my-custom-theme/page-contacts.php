<?php /* Template Name: Contacts Template */?>

<?php get_header(); ?>

<div class="page-title">
    <h2>
        <?php the_title(); ?>
    </h2>
</div>

<div class="contact-wrap">
    <?php the_content(); ?>
</div>


<?php wp_reset_postdata(); ?>


<?php get_footer();?>