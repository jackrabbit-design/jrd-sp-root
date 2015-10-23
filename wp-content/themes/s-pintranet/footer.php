

    <div class="footerwrap">
        <div id="footer">
            <div id="footmenu">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footermenu',
                    'container' => '',
                    'menu' => 'footermenu',
                    'menu_class' =>
                    'nav',
                    'menu_id' => '',
                    'depth' => 2,
                    'items_wrap' => '<ul>%3$s</ul>'
                ));
                ?>
            </div>
            <div id="companyinfo">
                <div class="footspacer"></div>
                <div class="address">
                    <strong><span class="foot1">S&amp;P World Headquarters </span></strong><span class="foot2">15 Braintree Hill Office Park, </span><span class="foot3">Suite 102, Braintree, MA 02184</span>
                </div>
                <div class="copyright">
                    <span class="foot1">&copy;<?php echo date("Y"); ?> S&amp;P Consultants All Rights Reserved.</span> <span class="jackrabbit"><a href="http://www.jumpingjackrabbit.com" title="Website Design by Jackrabbit" target="_blank">Website Design</a> by <a href="http://www.jumpingjackrabbit.com" title="Website Design by Jackrabbit" target="_blank">Jackrabbit</a></span>
                </div>
            </div>
        </div>
    </div>

    <?php if(!isset($_COOKIE['notify']) && $_COOKIE['notify'] != true && get_field('notification_text','options')){ ?>
        <div id="alert">
            <div class="wrap">
                <div class="btn-close"></div>
                <?php the_field('notification_text','options') ?>
            </div>
        </div>
    <?php } ?>

    <?php wp_footer(); ?>
</body>
</html>
