<?php
$jks_disable = get_option('jks_disable');
if (($jks_disable['jks_disable_system'] == "") or ($jks_disable['jks_disable_system'] == "on")) {

	/********************************************************************
// Change Admin Title
	 ********************************************************************/
	function jks_change_admin_title($admin_title, $title)
	{
		return $title . ' - ' . get_bloginfo('name');
	}
	add_filter('admin_title', 'jks_change_admin_title', 10, 2);


	/********************************************************************
// Change Admin Footer
	 ********************************************************************/
	function jks_change_admin_footer_copyright()
	{
		echo '<a target="_blank" href="https://jks.vn/">#JKS</a>';
	}
	add_filter('admin_footer_text', 'jks_change_admin_footer_copyright');

	function jks_remove_admin_footer_version()
	{
		remove_filter('update_footer', 'core_update_footer');
	}
	add_action('admin_menu', 'jks_remove_admin_footer_version');


	/********************************************************************
// Remove Admin Dashboard Widgets
	 ********************************************************************/
	function jks_remove_dashboard_widgets()
	{
		remove_action('welcome_panel', 'wp_welcome_panel');
		/** Welcome **/
		remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
		/** Right Now **/
		remove_meta_box('dashboard_activity', 'dashboard', 'normal');
		/** Activity **/
		remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
		/** Recent Comments **/
		remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
		/** Incoming Links **/
		remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
		/** Plugins **/
		remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
		/** Quick Press **/
		remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');
		/** Recent Drafts **/
		remove_meta_box('dashboard_primary', 'dashboard', 'side');
		/** WordPress blog **/
		remove_meta_box('dashboard_secondary', 'dashboard', 'side');
		/** Other WordPress News **/
		remove_meta_box('dashboard_site_health', 'dashboard', 'normal');
		/** Tinh trang website */
        remove_meta_box( 'wc_admin_dashboard_setup', 'dashboard', 'normal');
        remove_meta_box( 'e-dashboard-overview', 'dashboard', 'normal');
        /** Disable setup widget in WooCommerce */
		/**use 'dashboard-network' as the second parameter to remove widgets from a network dashboard.**/

		remove_menu_page( 'edit.php?post_type=acf-field-group' );
		
	}
	add_action('admin_init', 'jks_remove_dashboard_widgets');


	/********************************************************************
// Remove Admin Meta Boxes
	 ********************************************************************/
	function jks_remove_meta_boxes()
	{
		/* POST */
		remove_meta_box('commentstatusdiv', 'post', 'normal');
		/** Comments status **/
		remove_meta_box('commentsdiv', 'post', 'normal');
		/** Comments **/
		remove_meta_box('trackbacksdiv', 'post', 'normal');
		/** Trackback **/
		remove_meta_box('tagsdiv-post_tag', 'post', 'normal');
		/** Tag **/
		remove_meta_box('slugdiv', 'post', 'normal');
		/** Slug **/

		/* PAGE */
		remove_meta_box('commentstatusdiv', 'page', 'normal');
		/** Comments status **/
		remove_meta_box('commentsdiv', 'page', 'normal');
		/** Comments **/
		remove_meta_box('trackbacksdiv', 'page', 'normal');
		/** Trackback **/
		remove_meta_box('slugdiv', 'page', 'normal');
		/** Slug **/

		//remove_meta_box( 'revisionsdiv', 'post', 'normal' );			/** Revisions **/
		//remove_meta_box( 'authordiv', 'post', 'normal' );					/** Author **/
		//remove_meta_box( 'postcustom', 'post', 'normal' );				/** Custom fields **/
		//remove_meta_box( 'postexcerpt', 'post', 'normal' );				/** Excerpt **/
	}
	add_action('admin_menu', 'jks_remove_meta_boxes');

	/********************************************************************
// Remove Front-end Display Toolset Plugin
	 ********************************************************************/
	add_filter('types_information_table', '__return_false');

	/********************************************************************
// Remove Admin Bar Links
	 ********************************************************************/
	function jks_remove_admin_bar_links()
	{
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu('wp-logo');
		/** Remove the WordPress logo **/
		$wp_admin_bar->remove_menu('about');
		/** Remove the about WordPress link **/
		$wp_admin_bar->remove_menu('wporg');
		/** Remove the WordPress.org link **/
		$wp_admin_bar->remove_menu('documentation');
		/** Remove the WordPress documentation link **/
		$wp_admin_bar->remove_menu('support-forums');
		/** Remove the support forums link **/
		$wp_admin_bar->remove_menu('feedback');
		/** Remove the feedback link **/
		$wp_admin_bar->remove_menu('view-site');
		/** Remove the view site link **/
		$wp_admin_bar->remove_menu('updates');
		/** Remove the updates link **/
		$wp_admin_bar->remove_menu('comments');
		/** Remove the comments link **/
		$wp_admin_bar->remove_menu('w3tc');
		/** If you use w3 total cache remove the performance link **/
		$wp_admin_bar->remove_menu('new-content');
		/** Remove the content link **/
		//$wp_admin_bar->remove_menu('site-name');      /** Remove the site name menu **/    
		//$wp_admin_bar->remove_menu('my-account');     /** Remove the user details tab **/
	}
	add_action('wp_before_admin_bar_render', 'jks_remove_admin_bar_links');


	/********************************************************************
// Remove Admin Menu
	 ********************************************************************/
	function jks_remove_menu()
	{
		remove_menu_page('jks_disable');
		remove_menu_page('tools.php');
		remove_menu_page('edit-comments.php');
		remove_menu_page('plugins.php');


		//remove_submenu_page( 'themes.php', 'themes.php' );
		remove_submenu_page('themes.php', 'theme-editor.php');
		remove_submenu_page('index.php', 'update-core.php');
		remove_submenu_page('options-general.php', 'options-writing.php');
		remove_submenu_page('options-general.php', 'options-discussion.php');
		remove_submenu_page('options-general.php', 'options-reading.php');
		remove_submenu_page('options-general.php', 'options-media.php');
		remove_submenu_page('options-general.php', 'options-permalink.php');
		remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');

		remove_menu_page('wpcf7');
		remove_menu_page('toolset-dashboard');
		remove_menu_page('litespeed');
		remove_menu_page('wpfastestcacheoptions');


	}
	add_action('admin_menu', 'jks_remove_menu', 999);


	/********************************************************************
// Remove Customize Page
	 ********************************************************************/
	// function jks_remove_customize_page() {
	//   global $submenu;
	//   unset($submenu['themes.php'][6]);
	// }
	// add_filter('admin_menu', 'jks_remove_customize_page');


	/********************************************************************
// Remove Widgets
	 ********************************************************************/
	function jks_unregister_widgets()
	{
		unregister_widget('WP_Widget_Pages');
		unregister_widget('WP_Widget_Archives');
		unregister_widget('WP_Widget_Links');
		unregister_widget('WP_Widget_Meta');
		unregister_widget('WP_Widget_Search');
		unregister_widget('WP_Widget_Categories');
		unregister_widget('WP_Widget_Recent_Posts');
		unregister_widget('WP_Widget_Recent_Comments');
		unregister_widget('WP_Widget_RSS');
		unregister_widget('WP_Widget_Tag_Cloud');
		//unregister_widget('WP_Widget_Calendar');
		//unregister_widget('WP_Nav_Menu_Widget');
		//unregister_widget('WP_Widget_Text');
	}
	add_action('widgets_init', 'jks_unregister_widgets');


	/********************************************************************
// Hidden Admin Bar
	 ********************************************************************/
	// add_filter('show_admin_bar', '__return_false');


	/********************************************************************
// Hidden Super Admin User in AdminCP
	 ********************************************************************/
	function jks_hidden_admin()
	{
		echo '<style>tr#user-1{display:none;}</style>';
	}
	add_filter('admin_footer', 'jks_hidden_admin');


	/********************************************************************
// Hidden/Disable AdminCP Setting Fields
	 ********************************************************************/
	function jks_admincp_setting_fields_disable()
	{
		global $pagenow;
		/** Apply only to user profile or user edit pages **/
		if ($pagenow !== 'options-general.php' && $pagenow !== 'profile.php' && $pagenow !== 'user-edit.php' && $pagenow !== 'user-new.php') {
			return;
		}

		add_action('admin_footer', 'jks_admincp_setting_fields_disable_js');
	}

	/** Disables selected fields in AdminCP Setting Fields **/
	function jks_admincp_setting_fields_disable_js()
	{
?>
		<script>
			jQuery(document).ready(function($) {
				var options_general_fields_to_disable = ['siteurl', 'home', 'users_can_register', 'default_role'];
				for (i = 0; i < options_general_fields_to_disable.length; i++) {
					if ($('#' + options_general_fields_to_disable[i]).length) {
						$('#' + options_general_fields_to_disable[i]).parents('tr').css('display', 'none');
					}
				}

				var profile_fields_to_disable = ['user-rich-editing-wrap', 'user-comment-shortcuts-wrap', 'user-admin-bar-front-wrap', 'user-language-wrap', 'user-first-name-wrap', 'user-last-name-wrap', 'user-capabilities-wrap', 'user-url-wrap', 'user-description-wrap'];
				for (i = 0; i < profile_fields_to_disable.length; i++) {
					if ($('.' + profile_fields_to_disable[i]).length) {
						$('.' + profile_fields_to_disable[i]).css('display', 'none');
					}
				}

				var user_new_fields_to_disable = ['first_name', 'last_name', 'url'];
				for (i = 0; i < user_new_fields_to_disable.length; i++) {
					if ($('#' + user_new_fields_to_disable[i]).length) {
						$('#' + user_new_fields_to_disable[i]).parents('tr').css('display', 'none');
					}
				}
			});
		</script>
	<?php
	}
	add_action('admin_init', 'jks_admincp_setting_fields_disable');


	/********************************************************************
// Change Login Header Url
	 ********************************************************************/
	function jks_change_login_header_url()
	{
		return get_bloginfo('url');
	}
	add_filter('login_headerurl', 'jks_change_login_header_url');


	/********************************************************************
    // Change Login Style
	 ********************************************************************/
	function jks_change_login_style()
	{
		wp_enqueue_style('jks_change_login_style', JKS_CHILD_URI . '/JKSFramework/admin/css/admin-login.css');
	}
	add_action('login_head', 'jks_change_login_style');

    /********************************************************************
    // Remove all notices
     *********************************************************************/
    add_action('in_admin_header', function () {
        remove_all_actions('admin_notices');
        remove_all_actions('all_admin_notices');
    }, 1000);

}

/********************************************************************
// Add Custom Welcome Dashboard
 ********************************************************************/
function jks_custom_welcome_dashboard()
{
    global $wp_meta_boxes;
    wp_add_dashboard_widget('custom_support_widget', 'Giới thiệu', 'custom_dashboard_support');
}

function custom_dashboard_support()
{ ?>
    <h2>Chào mừng đến với Hệ thống Quản Trị Website</h2>
    <p><strong>THÔNG TIN CƠ QUAN CHỦ QUẢN</strong></p>
    <P><?php echo bloginfo('name'); ?></p>
    <p><strong>NHÀ PHÁT TRIỂN</strong></p>
    <p>Hệ thống được phát triển bởi <strong><a href="https://jks.vn" target="_blank">Công ty cổ phần Công Nghệ JKS</a></strong></p>
    <p>Mọi yêu cầu, hỗ trợ trong quá trình sử dụng</p>
    <p>Quý khách hàng có thể liên hệ <strong>Phòng Kỹ Thuật</strong></p>
    <p><strong>Điện thoại</strong>: <a href="tel:02363630079" c">0236.363.00.79</a></p>
    <p><strong>Email</strong>: <a href="mailto:dev@jks.vn"><strong>dev@jks.vn</strong></a></p>
    <p><strong>Website</strong>: <a href="https://jks.vn"><strong>https://jks.vn</strong></a></p>
    <p><strong>Cảm ơn quý khách hàng đã tin tưởng và sử dụng sản phẩm của chúng tôi!</strong></p>
    <?php
}
add_action('wp_dashboard_setup', 'jks_custom_welcome_dashboard');

?>