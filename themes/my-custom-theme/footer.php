<?php wp_footer(); ?>

<div class="footer-container">

    <div class="footer-nav footer-column">
        <div class="footer-menu-title"><strong>Navigate</strong></div>
        <?php

        wp_nav_menu(
            array(
                'theme_location' => 'footer-nav'
            )
        );
        ?>
    </div>


    <div class="footer-info footer-column">
        <div class="footer-menu-title">
            <strong>Information</strong></div>
            <ul>
                <li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Terms & Agreement</a></li>
                <li><a href="#">Affiliates</a></li>
            </ul>

        
    </div>

    <div class="footer-menu-title"><a href="<?php echo get_bloginfo('wpurl'); ?>"><h3><?= get_bloginfo('name'); ?></h3></a></div>


</div>

</body>

</html>