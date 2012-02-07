<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends Main_Controller
{
	/**
	 * Constructor method
	 *
	 * @access public
	 * @return void
	 */
	public function __construct()
	{
  		parent::__construct();
 	}

 	/**
 	 * Show the control panel
	 *
	 * @access public
	 * @return void
 	 */
 	public function index()
	{
		$data = array();

		$this->template
			->title('Dashboard')
			->build('dashboard', $data);
	}

	/**
	 * Display the help string 
	 * in a modal window
	 * @access	public
	 * @param	string	$slug	The module to fetch help for
	 * @return	void
	 */
	public function help($slug)
	{
		$this->data->help = $this->module_m->help($slug);

		$this->template
			->set_layout('modal')
			->build('partials/help', $this->data);
	}
}