<?php require( dirname(__FILE__) . '/wp-load.php' ); ?>

<?php echo "<pre>"; print_r($_POST); echo "</pre>"; ?>

<?php
    $p = $_POST['pass'];
    $u = $_POST['uid'];
    wp_set_password($p,$u);
    update_user_meta($u,'has_changed_password',1);
    wp_redirect(get_bloginfo('url') . '?changed=true',301);
    exit();
?>
