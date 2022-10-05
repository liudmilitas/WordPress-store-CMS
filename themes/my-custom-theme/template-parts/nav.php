<header>
        <nav class="blog-nav">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'left-main-menu'
            )
        );
        ?>
        </nav>

        <div class="title-nav">
            <a href="<?php echo get_bloginfo( 'wpurl' );?>"><h1><?= get_bloginfo('name'); ?></h1></a>
        </div>

</header>