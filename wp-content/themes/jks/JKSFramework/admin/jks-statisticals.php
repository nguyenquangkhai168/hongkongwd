<?php
/********************************************************************
// Add Menu - Options Page
********************************************************************/
// add_action( 'admin_menu', 'jks_statistical' );
function jks_statistical() {
	add_menu_page( 'Thống kê', 'Thống kê', 'manage_options', 'jks_statistical', 'jks_func_statistical', JKS_CHILD_URI."/JKSFramework/admin/images/status.png");

}



function jks_func_statistical() {
	
}
?>