<?php

/**
 * cpb Garnish
 *
 * An ExpressionEngine 2 plugin.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Creative Commons Attribution-ShareAlike 3.0 Unported License
 *
 * @package		ExpressionEngine
 * @subpackage	Addons
 * @category	Plugin
 * @author		Curtis Blackwell
 * @copyright   Copyright (c) 2011, Curtis Blackwell (http://curtisblackwell.com)
 * @link        http://curtisblackwell.com/expressionengine-add-ons/cpb-garnish
 * @license		http://creativecommons.org/licenses/by-sa/3.0/
 * @since       Version 0.1
 */

if (! defined('GARNISH_V')) {
	define('GARNISH_NAME', 'cpb Garnish');
	define('GARNISH_V', '0.1.1');
}

$config['name']									= GARNISH_NAME;
$config['version']								= GARNISH_V;
$config['nsm_addon_updater']['versions_xml']	= 'http://curtisblackwell.com/expressionengine-add-ons/rss_garnish';
?>