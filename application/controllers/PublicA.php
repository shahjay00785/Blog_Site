<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PublicA extends MY_Controller {

	public function index()

	{
    /*$this->load->helper('html');*/
		$this->load->view('Public/Article_list.php');
	}
}
