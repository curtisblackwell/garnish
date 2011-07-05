<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2003 - 2011, EllisLab, Inc.
 * @license		http://expressionengine.com/user_guide/license.html
 * @link		http://expressionengine.com
 * @since		Version 2.0
 * @filesource
 */
 
// ------------------------------------------------------------------------

/**
 * cpb Garnish Plugin
 *
 * @package		ExpressionEngine
 * @subpackage	Addons
 * @category	Plugin
 * @author		Curtis Blackwell
 * @link		http://curtisblackwell.com
 */

$plugin_info = array(
	'pi_name'		=> 'cpb Garnish',
	'pi_version'	=> '0.1',
	'pi_author'		=> 'Curtis Blackwell',
	'pi_author_url'	=> 'http://curtisblackwell.com',
	'pi_description'=> 'cpb Garnish is an ExpressionEngine 2 plugin that allows you to control the case of text between its variable pairs.',
	'pi_usage'		=> Garnish::usage()
);


class Garnish {

	public $return_data;
    
	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->EE =& get_instance();
	}
	
	// ----------------------------------------------------------------
	
	/**
	 * Plugin Usage
	 */
	public static function usage()
	{
		ob_start();
?>

Installation
------------

Upload the garnish folder to system/expressionengine/third_party


Usage
-----

Simply wrap the tags around the integer or letter like so:

	{exp:steak_sauce}A{/exp:steak_sauce} returns "1"
	{exp:steak_sauce}1{/exp:steak_sauce} returns "A"

If you want to convert integers to lowercase letters you can use the case parameter:

	{exp:steak_sauce case="lowercase"}1{/exp:steak_sauce} returns "a"

### Example Usage

I'm using this to convert Matrix {row_count}s to letters on a personal project cataloguing my vinyl records (Side A, Side B, etc.).
<?php
		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
	}
}


/* End of file pi.garnish.php */
/* Location: /system/expressionengine/third_party/garnish/pi.garnish.php */