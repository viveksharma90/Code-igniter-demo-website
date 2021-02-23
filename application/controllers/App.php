<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	// ---
	public function index()
	{
		$data['title'] = "Portfolio Website";
		$data['content'] = $this->load->view('pages/homepage/index', $data, true);
 		return $this->load->view('layout_master', $data);
	}

	// ---
	public function about_us()
	{
		$data['title'] = "About Us";
		$data['content'] = $this->load->view('pages/about_us/index', $data, true);
 		return $this->load->view('layout_master', $data);
	}

}
