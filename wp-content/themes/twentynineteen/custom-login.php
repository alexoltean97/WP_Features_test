<?php
/* Template Name: Custom login template */
wp_head();

global $user_ID;
global $wpdb;

if(!$user_ID){
    // user in logged out state

    if($_POST){

        $username = $wpdb->escape($_POST['username']);
        $password = $wpdb->escape($_POST['password']);

        $login_array = array();
        $login_array['user_login'] = $username;
        $login_array['user_password'] = $password;

        $verify_user = wp_signon($login_array,true);

        if(!is_wp_error($verify_user)){

            echo "<script>window.location='".site_url()."'</script>";

        } else{
            echo "<p>Invalid Credentials</p>";
        }

    } else { ?>

        <div class="container">
            <form id="login" name="form" action="" method="post">
                <input id="username" type="text" placeholder="Username" name="username">
                <input id="password" type="password" placeholder="Password" name="password">
                <input id="submit" type="submit" value="submit">
            </form>
        </div>

   <?php }

    ?>



<?php

} else{
    // user is logged in
}
?>

<?php wp_footer(); ?>
