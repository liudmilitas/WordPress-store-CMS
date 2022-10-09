<?php ?>

<?php get_header(); ?>

<div class="stores-container">
    <p>foo</p>
    <?php

    $args = array('post_type' => 'store', 'posts_per_page ' => 10);
    $query = new WP_query($args);
    while ($query -> have_posts()) : $query->the_post();?>
        
        <div class="entry-content">
        <a class="permalink" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_content();?>
        </div>
    
        <?php    endwhile;

    ?>

</div>



<?php get_footer(); ?>