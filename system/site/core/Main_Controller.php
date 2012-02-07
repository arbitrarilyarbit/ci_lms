<?php defined('BASEPATH') OR exit('No direct script access allowed');

// Code here is run before admin controllers
class Main_Controller extends MY_Controller {

	// Admin controllers can have sections, normally an arbitrary string
	protected $section = NULL;

	public function __construct() {
		parent::__construct();

		// Show error and exit if the user does not have sufficient permissions
		if ( !self::_check_access())
		{
			$this->session->set_flashdata('error', 'Access Denied');
			redirect();
		}

		// If the setting is enabled redirect request to HTTPS
		/*if ($this->settings->admin_force_https and strtolower(substr(current_url(), 4, 1)) != 's')
		{
			redirect(str_replace('http:', 'https:', current_url()).'?session='.session_id());
		}*/

		$this->load->helper('admin_theme');

		// Template configuration
		$this->template
			->enable_parser(FALSE)
			->set_theme('site')
			->set_layout('default');
	}

	private function _check_access()
	{
		// These pages get past permission checks
		$ignored_pages = array('users/login', 'users/logout');

		// Check if the current page is to be ignored
		$current_page = $this->uri->segment(1, '') . '/' . $this->uri->segment(2, 'index');

		// Dont need to log in, this is an open page
		if (in_array($current_page, $ignored_pages))
		{
			return TRUE;
		}
		else if ( ! $this->current_user)
		{
			redirect('users/login');
		}

		// Admins can go straight in
		else if ($this->current_user->group === 'admin')
		{
			return TRUE;
		}

		// Well they at least better have permissions!
		else if ($this->current_user)
		{
			// We are looking at the index page. Show it if they have ANY admin access at all
			if ($current_page == 'main/index' && $this->permissions)
			{
				return TRUE;
			}
			else
			{
				// Check if the current user can view that page
				return array_key_exists($this->module, $this->permissions);
			}
		}

		// god knows what this is... erm...
		return FALSE;
	}

}