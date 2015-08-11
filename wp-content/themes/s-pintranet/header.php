<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="MSSmartTagsPreventParsing" content="true" />
    <title><?php
    if(!is_front_page()){
        if(is_search()){
            echo 'Search';
        }else{
            the_title();
        }
        echo ' | ';
    }
    bloginfo('name');
    ?></title>
<link type="text/css" rel="stylesheet" media="all" href="<? bloginfo('url') ?>/ui/css/style.css" />
    <link type="text/plain" rel="author" href="<? bloginfo('url') ?>/authors.txt" />
    <link type="image/x-icon" rel="shortcut icon" href="<? bloginfo('url') ?>/favicon.png" />
    <script src="<? bloginfo('url') ?>/ui/js/modernizr.js"></script>
    <script src="<? bloginfo('url') ?>/ui/js/jquery.js" type="text/javascript"></script>
    <?php
		if ( is_user_logged_in() ) {

		} else {
			wp_redirect( 'http://employees.spconinc.com/wp-login.php', 301 );
		exit;
		}
	?>
</head>
<body>
    <!--[if lte IE 7]><iframe src="unsupported.html" frameborder="0" scrolling="no" id="no_ie6"></iframe><![endif]-->
    <div class="wrapper">
        <div id="header">
            <div class="wrap clearfix">
                <div class="logomargins">
                    <a href="<? bloginfo('url') ?>" class="logolink"><img src="<? bloginfo('url') ?>/ui/images/logo.png" class="logoimg" /></a>
                </div>
                <div id="usermenu">
                    <ul class"usermenuitems">
                        <li><a href="#">Hello, Jude</a></li>
                        <li><a href="#">Logout</a></li>
                        <li id='headsearch' class='headsearch' >
                            <form role="search" method="get" id="searchhead" class="headsearch" action="<?php echo esc_url( home_url( '/' ) ); ?>">

									<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
									<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />

							</form>
                        </li>
                    </ul>
                </div>
                <div id="headmenu2">
                    <div id="nav-container2">
                        <?php
                        wp_nav_menu( array(
                                    'theme_location' => 'main-menu',
                                    'container' => '',
                                    'menu_class' =>
                                    'nav',
                                    'menu_id' => '',
                                    'depth' => 2,
                                    'items_wrap' => '<ul id="%2$s">%3$s</ul>'
                                ));
                                ?>
                    </div><!-- END nav-container -->
                </div>
            </div>
            <div class="navwrap">
                <div id="headmenu">
                    <a class="mobile nav-toggle icon-menu"></a>
                    <div id="nav-container">
                        <?php
                        wp_nav_menu( array(
                                    'theme_location' => 'main-menu',
                                    'container' => '',
                                    'menu_class' =>
                                    'nav',
                                    'menu_id' => '',
                                    'depth' => 2,
                                    'items_wrap' => '<ul id="%2$s">%3$s</ul>'
                                ));
                                ?>
                    </div><!-- END nav-container -->
                </div>
            </div>
        </div>
