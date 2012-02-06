<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH."libraries/MX/Controller.php";

// Code here is run before ALL controllers
class MY_Controller extends MX_Controller {

	// Deprecated: No longer used globally
	protected $data;
	
	public $module;
	public $controller;
	public $method;

	public function __construct()
	{
		parent::__construct();

		$this->benchmark->mark('my_controller_start');

		defined('CURRENT_LANGUAGE') or define('CURRENT_LANGUAGE', 'en');

		$langs = $this->config->item('supported_languages');

		$y3k['lang'] = $langs[CURRENT_LANGUAGE];
		$y3k['lang']['code'] = CURRENT_LANGUAGE;

		// Set php locale time
		if (isset($langs[CURRENT_LANGUAGE]['codes']) && sizeof($locale = (array) $langs[CURRENT_LANGUAGE]['codes']) > 1)
		{
			array_unshift($locale, LC_TIME);
			call_user_func_array('setlocale', $locale);
			unset($locale);
		}

		// Load the user model and get user data
		$this->load->library('users/ion_auth');

		//$this->template->current_user = ci()->current_user = $this->current_user = $this->ion_auth->get_user();

		// Loaded after $this->current_user is set so that data can be used everywhere
		/*$this->load->model(array(
			'permissions/permission_m',
			'modules/module_m',
			'pages/page_m',
			'themes/theme_m',
		));

		if ( ! $this->module_details['skip_xss'])
		{
			$_POST = $this->security->xss_clean($_POST);
		}*/

		$this->load->vars($y3k);
		
		$this->benchmark->mark('my_controller_end');
		
		// Enable profiler on local box
	    if (ENVIRONMENT === 'development' AND is_array($_GET) AND array_key_exists('_debug', $_GET) )
	    {
			unset($_GET['_debug']);
	    	$this->output->enable_profiler(TRUE);
	    }
	}
}

/**
 * Returns the CI object.
 *
 * Example: ci()->db->get('table');
 *
 * @staticvar	object	$ci
 * @return		object
 */
function ci()
{
	return get_instance();
}
