<?php wp_footer(); ?>

<div class="footer-container">

    <div class="footer-nav">
        <div class="footer-menu-title"><strong>Navigate</strong></div>
        <?php

        wp_nav_menu(
            array(
                'theme_location' => 'footer-nav'
            )
        );
        ?>
    </div>


    <div class="footer-info">
        <div class="footer-menu-title"><strong>Information</strong></div>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'footer-info'
            )
        );
        ?>
        <h3><a href="/"><?= get_bloginfo('name'); ?></a></h3>
    </div>
        

</div>

</body>
</html>