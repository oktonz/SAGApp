<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		
	}

	function logout()
	{
	   $this->session->unset_userdata('logged_in');
	   session_destroy();
	   redirect('index.php/login');
	}
}
