		<div id="secondarymenu">
            <div class="wrap">
                <?php
                        wp_nav_menu( array(
                                    'theme_location' => 'secondarymenu', 
                                    'menu' => 'secondarymenu',
                                    'container' => '', 
                                    'menu_class' => 
                                    'nav', 
                                    'menu_id' => '', 
                                    'depth' => 2,
                                    'items_wrap' => '<ul>%3$s</ul>'
                                ));
                                ?>
            </div>
        </div>