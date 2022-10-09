<?php /* Template Name: Stores*/ ?>

<?php get_header(); ?>

<div class="page-title">
    <h2>
        <?php the_title(); ?>
    </h2>
</div>

<div class="stores-container">
 

<?php $args = array(  
        'post_type' => 'stores',
        'post_status' => 'publish',
        'posts_per_page' => 10, 
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="store-wrapper">
        <?php print the_title();
        the_content(); ?>
</div>
    <?php endwhile;

    wp_reset_postdata(); ?>

</div>



<?php get_footer(); ?>