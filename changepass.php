<?php
    require( dirname(__FILE__) . '/wp-load.php' );
    $u = $_POST['uid'];
    if(get_current_user_id() == $u){
        $p = $_POST['pass'];
        wp_set_password($p,$u);
        update_user_meta($u,'has_changed_password',1);
        wp_redirect(get_bloginfo('url') . '?changed=true',301);
        exit();
    }else{
        echo "An error has occurred.";
    };
