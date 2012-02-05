<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Y3kmenu extends Public_Controller {

	/**
	 * Constructor method
	 * @access public
	 * @return void
	 */
	function __construct() {
		parent::__construct();
	}

	function generate() {
		$menu_items = $this->config->item('dashboard');
		return $menu_items;
	}

	function dashboard() {
		$this->load->config('y3kmenu/y3kmenu');

		$data = array(
			'menu_items'    =>  $this->generate()
		);

		$this->load->view('dashboard', $data);
	}
}

?>