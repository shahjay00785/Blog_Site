<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

/*public function __construct(){
	parent:: __construct();
	if(! $this->session->userdata('user_id'))
			return redirect('Login');
}*/

/*public function __construct(){
	parent:: __construct();
  if(!$this->isAuthorized()) return redirect('home');
}*/

	public function index()
	{
		$this->load->view('welcome_message');
	}
}
