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
		
		// Make everything lowercase first to fix dUmBaSs TyPiNg.
		$this->tagdata = strtolower($this->EE->TMPL->tagdata);
	}

	// ----------------------------------------------------------------

	/**
	 * Title Case
	 */
	function title_case() {
		return ucwords($this->tagdata);
	}

	/**
	 * Sentence case
	 */
	function sentence_case() {
		return ucfirst($this->tagdata);
	}

	/**
	 * UPPERCASE
	 */
	function uppercase() {
		return strtoupper($this->tagdata);
	}

	/**
	 * lowercase
	 */
	function lowercase() {
		// The constructor already made it lowercase, so all we need to do is spit it out.
		return $this->tagdata;
	}
	
	/**
	 * Name Case | Name-Case | Name O'Case
	 *
	 * Thanks to jmarois@ca.ibm.com (http://www.php.net/manual/en/function.ucwords.php#96179)
	 */
	function name_case() {
		// Capitalize all the words delimited by a space.
		$string = ucwords($this->tagdata);
		
		foreach (array('-', '\'') as $delimiter) {
			// If the string contains either a hyphen or apostrophe...
			if (strpos($string, $delimiter) !== false) {
				// ...capitalize the word after the hyphen and/or apostrophe.
				$string = implode($delimiter, array_map('ucfirst', explode($delimiter, $string)));
			}
		}
		
		return $string;
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