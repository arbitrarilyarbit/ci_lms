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
		
		//helper to load partials
		$this->load->helper('admin_theme');
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
		// Create page output
		$this->template->title('Dashboard');

		$this->template->build('pages/dashboard');
	}

	/**
	* home method
	* @access public
	* @return void
	*/
	public function home()
	{
		// Create page output
		$this->template->title('Home');
	
		$this->template->build('pages/home');
	}

	/**
	* login method
	* @access public
	* @return void
	*/
	public function login() {

		// Set the validation rules
		$this->validation_rules = array(
			array(
				'field' => 'email',
				'label'	=> 'Email',
				'rules' => 'required|callback__check_login'
			),
			array(
				'field' => 'password',
				'label'	=> 'Password',
				'rules' => 'required'
			)
		);

		// Call validation and set rules
		$this->load->library('form_validation');
		$this->form_validation->set_rules($this->validation_rules);
	
		// If the validation worked, or the user is already logged in
		/*if ($this->form_validation->run() OR $this->ion_auth->logged_in())
		{
			redirect('pages/dashboard');
		}*/
		
		// Create page output
		$this->template->title('Login');
	
		$this->template
			->set_layout(FALSE)
			->build('login');
	}

}
