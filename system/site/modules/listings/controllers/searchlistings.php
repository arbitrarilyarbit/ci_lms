<?php defined('BASEPATH') OR exit('No direct script access allowed');

class SearchListings extends Public_Controller {
	/**
	 * Constructor method
	 * @access public
	 * @return void
	 */
	public function __construct() {
		parent::__construct();
	}

	public function _remap() {
		$this->index();
	}

	/**
	 * Default Method
	 * @access public
	 * @return void
	 */
	public function index() {
		redirect(base_url());
	}

	public function searchbar() {
		echo $this->load->view('listings/searchbar');
	}

	public function searchbox() {
		echo $this->load->view('listings/searchbox');
	}

	public function alphalist() {
		echo $this->load->view('listings/alphafilter');
	}

}