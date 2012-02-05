<?php defined('BASEPATH') OR exit('No direct script access allowed');

// Code here is run before frontend controllers
class Public_Controller extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->benchmark->mark('public_controller_start');

	    // Set the theme view folder
	    $this->template->set_theme('site');
		$this->template->set_layout('default');

        // Assign segments to the template the new way
		$this->template->server = $_SERVER;

		$this->benchmark->mark('public_controller_end');
	}
}
