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
 * @license		http://creativecommons.org/licenses/by-sa/3.0/
 */

require_once(PATH_THIRD . 'garnish/config.php');

$plugin_info = array(
	'pi_name'		=>  ADD_ON_NAME,
	'pi_version'	=>  ADD_ON_V,
	'pi_author'		=> 'Curtis Blackwell',
	'pi_author_url'	=> 'http://curtisblackwell.com',
	'pi_description'=> 'Allows you to control the case of text between its variable pairs.',
	'pi_usage'		=> Garnish::usage()
);


class Garnish {

	public $return_data;
	public $tagdata;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->EE =& get_instance();
		$this->tagdata = $this->EE->TMPL->tagdata;
	}

	// ----------------------------------------------------------------

	/**
	 * Uppercase
	 */
	function uppercase() {
		return strtoupper($this->tagdata);
	}

	/**
	 * Sentence Case
	 */
	function sentence_case() {
		return ucfirst($this->tagdata);
	}

	/**
	 * Title Case
	 */
	function title_case() {
		return ucwords($this->tagdata);
	}

	/**
	 * Lowercase
	 */
	function lowercase() {
		return strtolower($this->tagdata);
	}

	// ----------------------------------------------------------------


	/**
	 * Plugin Usage
	 */
	public static function usage() {
		ob_start();
	?>

	http://curtisblackwell.com/expressionengine-add-ons/cpb-garnish

	<?php
		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
	}
}


/* End of file pi.garnish.php */
/* Location: /system/expressionengine/third_party/garnish/pi.garnish.php */