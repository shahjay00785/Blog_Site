<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
		/*		$this->load->model('Articlemodel','articles');
		$articles=$this->articles->article_list();
		$this->load->view('Admin/Dashboard',['articles'=>$articles]);
		*/
	}

	public function dashboard(){
		if( ! $this->session->userdata('user_id') )
		return redirect('login');

		$this->load->model('Articlemodel','articles');
		$articles=$this->articles->article_list();
		$this->load->view('Admin/Dashboard',['articles'=>$articles]);

	}

	public function add_article(){

		if($this->input->post()) {
			//form validation
		}
		else{
			//form load

			$this->load->helper('form');
			$this->load->view('Admin/AddArticle');

		}




	}


	public function store_article(){

		if($this->form_validation->run('add_article_rules')){
			$post=$this->input->post();
			// print_r($post);
			unset($post['submit']);  // unset the submit
			$this->load->model('Articlemodel','am');
			if($this->am->add_article($post)){
				$this->session->set_flashdata('feedback',"article added sucessfu;;y");
				$this->session->set_flashdata('feedback','green');
			}
			else{
				$this->session->set_flashdata('feedback',"article added failed");
			}
			return redirect('Admin/Dashboard');
		}else{
			return redirect('Admin/add_article');
		}
	}

	public function update_article($article_id){
		/* print_r($this->input->post());
		//$this->input->post();
		if($this->load->model('Articlemodel','am')){
*/

//exit($article_id);
if($this->form_validation->run('add_article_rules')){
	$post=$this->input->post();
	//print_r($post);
	//exit;
//	$article_id=$post['article_id'];

	unset($post['submit']);  // unset the submit
	$this->load->model('Articlemodel','am');
	if($this->am->update_article($article_id,$post)){
		$this->session->set_flashdata('feedback',"article added sucessfu;;y");
		$this->session->set_flashdata('feedback','green');
	}
	else{
		$this->session->set_flashdata('feedback',"article added failed");
	}
	return redirect('Admin/Dashboard');
}else{
	$this->load->view('Admin/EditArticle');
}

		}




	public function delete_article(){

	}

	public function edit_article($article_id){
		$this->load->model('Articlemodel','am');
		$article=$this->am->find_article($article_id);
		$this->load->view('Admin/EditArticle',['article'=>$article]);
		//print_r($article);
	}

	public function __construct(){
		parent::__construct();
		$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
	}
}
