<?php (defined('BASEPATH')) or exit('No direct script access allowed');

class App extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id_admin')) {
			redirect('auth');
		}
	}
}
