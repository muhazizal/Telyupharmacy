<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			
			$this->load->model('M_Buyer');
	$this->load->model('M_Article');
	}

	public function index(){
			checkLoginBuyer();
			
			$username = $this->session->userdata('username');
			$data['buyer'] = $this->M_Buyer->checkBuyer($username);
			$data['data_article'] = $this->M_Article->get_AllArticle();
			$this->load->view("V_Article",$data,array('error' => ' ' ));
	}
	public function form_addArticle(){
			$this->load->view("V_AdminArticle"); 
	}
	public function load_AdminArticle(){
			checkLoginAdmin();
			$data['data_article'] = $this->M_Article->get_AllArticle();
			$this->load->view("V_AdminArticle",$data); 
	}
	public function search_Article(){
		$name_article    =   $this->input->post('name_article');
		$data2['data_article']  = $this->M_Article->get_ArticlebyName($name_article);
		$this->load->view('V_AdminArticle',$data2);
}
	public function add_Article(){
		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('category', 'Category', 'required|trim');
		$this->form_validation->set_rules('desciption', 'Description', 'required|trim');
		$data = [
			"title" => $this->input->post('title', true),
			"description" => $this->input->post('description', true),
			"category" => $this->input->post('category', true),
			"image"     => $this->uploadimage(),
			"admin_id" => $this->session->userdata('id'),
		];
		$check = $this->M_Article->insert_Article($data);
		if($check){        
				$this->session->set_flashdata('article_Inserted', 'The selected article has been added!');
		}else {
				$this->session->set_flashdata('article_notInserted', 'There was a problem adding the article!');
		}
		redirect('Article/load_AdminArticle');		
	
	}
	public function delete_Article($id_article){
			$check = $this->M_Article->delete_Article($id_article);
			if($check){
					$this->session->set_flashdata('article_Deleted', 'The selected article has been removed!');
			}else{
					$this->session->set_flashdata('article_notDeleted', 'There was a problem removing the article!');
			}
	redirect('Article/load_AdminArticle');
	}
	public function form_editarticle(){
			$this->load->view("V_AdminArticle"); 
	}
	public function edit_Article($id_article){
		$data['data_article'] = $this->M_Article->get_ArticlebyId($id_article);

		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('category', 'Category', 'required|trim');
		$this->form_validation->set_rules('desciption', 'Description', 'required|trim');

		if($this->form_validation->run()==false){
			$this->load_AdminArticle();
		}
		else{
			$id = $this->session->userdata('id');
			$upload_image = $_FILES['image']['name'];

			if($upload_image){
				$config = [
					'upload_path'						=>  './assets/uploads/article/',
					'allowed_types'      	  =>  'gif|jpg|png',
					'max_size'           	  =>  '5120',             
					'max_width'          	  =>  '600',           
					'max_height'         	  =>  '600',   
					'overwrite'							=>  'true',
				];

				$this->load->library('upload', $config);

				if($this->upload->upload('image')){
					$old_image = $data['data_article']['image'];

					if ($old_image != 'defaultarticle.jpg') {
							unlink(FCPATH . 'assets/uploads/article/' . $old_image);                    
					}
					$new_image = $this->upload->data('file_name');
					$data = [
						"id" 					=> $id_article,
						"title" 			=> $this->input->post('title', true),
						"description" => $this->input->post('description', true),
						"category" 		=> $this->input->post('category', true),
						"image"     	=> $new_image,
						"admin_id" 		=> $this->session->userdata('id'),
					];
				}
			} 
			else {
				$data = [
					"id" 					=> $id_article,
					"title" 			=> $this->input->post('title', true),
					"description" => $this->input->post('description', true),
					"category" 		=> $this->input->post('category', true),
					"admin_id" 		=> $this->session->userdata('id'),
				];
			}
			$check = $this->M_Article->update_Article($id_article,$data);
			if($check){
				$this->session->set_flashdata('article_Updated', 'The selected article detail(s) has been updated!');
			}else{
				$this->session->set_flashdata('article_notUpdated', 'There was a problem updating the article detail(s)!');
			}            
			redirect('Article/load_AdminArticle');
		}
	}

	public function uploadimage(){
		$config = [
			'upload_path'						=>  './assets/uploads/article/',
			'allowed_types'      	  =>  'gif|jpg|png',
			'max_size'           	  =>  '5120',             
			'max_width'          	  =>  '2000',           
			'max_height'         	  =>  '2000',   
			'overwrite'							=>  'true',
		];
		$this->load->library('upload', $config);
		if($this->upload->do_upload('image')){
			return $this->upload->data("file_name");
		}else {
			return "defaultarticle.jpg";
		}
	}

}
?>