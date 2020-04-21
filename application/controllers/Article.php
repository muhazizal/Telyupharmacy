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
        $this->load->view("V_Article",$data);
    }
    public function form_addArticle(){
        $this->load->view("V_AdminArticle"); 
    }
    public function load_AdminArticle(){
        checkLoginAdmin();
        $data['data_article'] = $this->M_Article->get_AllArticle();
        $this->load->view("V_AdminArticle",$data); 
    }
    
    public function add_Article(){
        $data = [
            //"id" => $this->input->mt_rand(10000000000,99999999999),
			"title" => $this->input->post('title', true),
            "description" => $this->input->post('description', true),
            "category" => $this->input->post('category', true),
			"image" => $this->input->post('image', true),
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
        $data = [
            "id" => $id_article,
			"title" => $this->input->post('title', true),
            "description" => $this->input->post('description', true),
            "category" => $this->input->post('category', true),
			"image" => $this->input->post('image', true),
            "admin_id" => $this->session->userdata('id'),
        ];
        $check = $this->M_Article->update_Article($id_article,$data);
		if($check){
            $this->session->set_flashdata('article_Updated', 'The selected article detail(s) has been updated!');
        }else{
            $this->session->set_flashdata('article_notUpdated', 'There was a problem updating the article detail(s)!');
        }            
		redirect('Article/load_AdminArticle');
    }
}
?>