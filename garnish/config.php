<?php
if (! defined('ADD_ON_V')) {
	define('ADD_ON_NAME', 'cpb Garnish');
	define('ADD_ON_V', '0.1');
}

$config['name']									= ADD_ON_NAME;
$config['version']								= ADD_ON_V;
$config['nsm_addon_updater']['versions_xml']	= 'http://curtisblackwell.com/expressionengine-add-ons/rss_garnish';
?>
