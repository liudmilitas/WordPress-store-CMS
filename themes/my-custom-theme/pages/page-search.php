<?php /* Template Name: Search Template */ ?>

<?php get_header(); ?>


<div class="search-wrapper">
    <h2 class="page-title">
        <?php the_title(); ?>
    </h2>
    <h4>What are you looking for?</h4>
    <?php get_search_form(); ?>
</div>

<?php get_footer(); ?>