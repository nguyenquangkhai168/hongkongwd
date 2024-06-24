<?php
/********************************************************************
// Main Admin
********************************************************************/
//Main theme get_template_directory()
//Child theme get_stylesheet_directory()

define('JKS_THEME_PATH', get_template_directory());
define('JKS_CHILD_PATH', get_stylesheet_directory());
define('JKS_THEME_URI', get_template_directory_uri());
define('JKS_CHILD_URI', get_stylesheet_directory_uri());

require_once ( JKS_CHILD_PATH . '/JKSFramework/admin/jks-options.php');
require_once ( JKS_CHILD_PATH . '/JKSFramework/admin/jks-disable-updates.php');
require_once ( JKS_CHILD_PATH . '/JKSFramework/admin/jks-disable-system.php');
//require_once ( JKS_CHILD_PATH . '/JKSFramework/admin/jks-statisticals.php');
require_once ( JKS_CHILD_PATH . '/JKSFramework/admin/jks-setting.php');

require_once ( JKS_CHILD_PATH . '/JKSFramework/plugin/class-tgm-plugin-activation.php');
require_once ( JKS_CHILD_PATH . '/JKSFramework/plugin/plugin.php');