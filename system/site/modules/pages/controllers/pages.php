<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Public_Controller
{
	/**
	 * Constructor method
	 * @access public
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Default Method
	 * @access public
	 * @return void
	 */
	public function index()
	{
		$this->dashboard();
	}

	/**
	 * dashboard method
	 * @access public
	 * @return void
	 */
	public function dashboard()
	{
		//helper to load partials
		$this->load->helper('admin_theme');

		// Create page output
		$this->template->title('Dashboard');

		echo $this->template->build('pages/dashboard', null, TRUE, FALSE);
	}

	/**
	* home method
	* @access public
	* @return void
	*/
	public function home()
	{
		//helper to load partials
		$this->load->helper('admin_theme');
	
		// Create page output
		$this->template->title('Home');
	
		echo $this->template->build('pages/home', null, TRUE, FALSE);
	}
	
}
