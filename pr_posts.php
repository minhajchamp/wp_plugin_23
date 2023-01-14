<?php
/*
Plugin Name: Pr Posts
Author: Minhaj Uddin
Description: Prioritize your WP Using JS Calendar & Kanban
Version: 1.0.0
*/
ob_clean();

ob_start();

define('PR_POSTS_DIRECTORY', plugin_dir_path(__FILE__));

require_once(PR_POSTS_DIRECTORY.'class.prgeneral.php');
require_once(PR_POSTS_DIRECTORY.'class.prposts.php');
register_activation_hook(__FILE__,array('PR_Posts','active_plugin'));

?>