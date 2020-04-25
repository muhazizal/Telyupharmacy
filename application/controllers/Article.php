<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			
		$this->load->model('M_Admin');
		$this->load->model('M_Buyer');
		$this->load->model('M_Article');
	}

	// ---------------------------------- BUYER ---------------------------------------------------- //
	public function index(){
		checkLoginBuyer();
		$username = $this->session->userdata('username');
		$data['buyer'] = $this->M_Buyer->checkBuyer($username);
		$data['data_article'] = $this->M_Article->get_AllArticle();

		$this->load->view("V_Article",$data,array('error' => ' ' ));
	}

	public function searchArticleBuyer() {
		checkLoginBuyer();
		$username = $this->session->userdata('username');
		$data['buyer'] = $this->M_Buyer->checkBuyer($username);

		$searchValue = $this->input->get('searchArticle');
		if ($searchValue) {
			$data['data_article'] = $this->M_Article->get_ArticlebyName($searchValue);
		} else {
			$data['data_article'] = $this->M_Article->get_AllArticle();
		}

		$this->load->view("V_Article", $data);
	}

	public function showDetailArticle($id_article) {
		checkLoginBuyer();
		$username = $this->session->userdata('username');
		$data['buyer'] = $this->M_Buyer->checkBuyer($username);
		$data['article'] = $this->M_Article->get_ArticlebyId($id_article);

		$this->load->view('V_DetailArticle', $data);
	}

	public function showAllArticle() {
		checkLoginBuyer();
		$data = $this->M_Article->get_AllArticle();
		echo json_encode($data);
	}

	// ---------------------------------- ADMIN ---------------------------------------------------- //
	public function load_AdminArticle(){
		checkLoginAdmin();
		$username = $this->session->userdata('username');
		$data['admin'] = $this->M_Admin->getAdmin($username);
		$data['data_article'] = $this->M_Article->get_AllArticle();

		$this->load->view("V_AdminArticle",$data); 
	}

	public function add_Article(){
		checkLoginAdmin();
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('article_notInserted', 'Please fill out the field correctly!');
			redirect('Article/load_AdminArticle');
		} 
		else {
			$upload_image = $_FILES['image']['name'];

			if ($upload_image) {
				$config = [
          'allowed_types' => 'gif|jpg|png',
          'max-size' 			=> '10240',
          'upload_path' 	=> './assets/uploads/article/'
        ];

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
					$new_image = $this->upload->data('file_name');
          $data = [
						"title" 			=> $this->input->post('title', true),
						"description" => $this->input->post('description', true),
						"category"		=> $this->input->post('category', true),
						"image"     	=> $new_image,
						"admin_id" 		=> $this->session->userdata('id'),
					];
				}
			} else {
				$data = [
					"title" 			=> $this->input->post('title', true),
					"description" => $this->input->post('description', true),
					"category" 		=> $this->input->post('category', true),
					"image"     	=> "defaultarticle.jpg",
					"admin_id" 		=> $this->session->userdata('id'),
				];
			}

			$this->M_Article->insert_Article($data);
      $this->session->set_flashdata('article_Inserted', 'The selected article has been added!');
      redirect('Article/load_AdminArticle');
		}
	}

	public function delete_Article($id_article){
		checkLoginAdmin();
		$check = $this->M_Article->delete_Article($id_article);
		if ($check) {
			$this->session->set_flashdata('article_Deleted', 'The selected article has been removed!');
		} else {
			$this->session->set_flashdata('article_notDeleted', 'There was a problem removing the article!');
		}
		redirect('Article/load_AdminArticle');
	}

	public function update_Article($id_article){
		checkLoginAdmin();
		$data['data_article'] = $this->M_Article->get_ArticlebyId($id_article);

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('article_notUpdated', 'There was a problem updating the article detail(s)!');
			redirect('Article/load_AdminArticle');
		} else {
			$upload_image = $_FILES['image']['name'];

			if ($upload_image) {
				$config = [
          'allowed_types' => 'gif|jpg|png',
          'max-size' 			=> '10240',
					'upload_path' 	=> './assets/uploads/article/'
        ];

        $this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
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
			} else {
				$data = [
					"id" 					=> $id_article,
					"title" 			=> $this->input->post('title', true),
					"description" => $this->input->post('description', true),
					"category" 		=> $this->input->post('category', true),
					"admin_id" 		=> $this->session->userdata('id'),
				];
			}

			$this->M_Article->update_Article($id_article, $data);
			$this->session->set_flashdata('article_Updated', 'The selected article detail(s) has been updated!');
			redirect('Article/load_AdminArticle');
		}
	}

	public function searchArticleAdmin() {
		checkLoginAdmin();
		$username = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		$data['admin'] = $this->M_Admin->getAdmin($username,$password);

		$searchValue = $this->input->get('searchArticle');
		if ($searchValue) {
			$data['data_article'] = $this->M_Article->get_ArticlebyName($searchValue);
		} else {
			$data['data_article'] = $this->M_Article->get_AllArticle();
		}

		$this->load->view("V_AdminArticle", $data);
	}
	
}
?>