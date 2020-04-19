<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    public function __construct()
	{
        parent::__construct();		
        $this->load->Model('M_Product');
    }
    public function index(){
        $this->load->view("V_Product");
    }
    public function load_Home(){
        $this->load->view("V_Home");
    }
    public function load_Product(){
        $this->load->view("V_Product");
    }
    public function load_Artikel(){
        $this->load->view("V_Article"); 
    }
    public function load_AboutUs(){
        $this->load->view("V_AboutUS"); 
    }
    public function form_addProduct(){
        $this->load->view("V_AdminProduct"); 
    }
    public function add_Product(){
        $data = [
            "id" => $this->input->mt_rand(10000000000,99999999999),
			"name" => $this->input->post('name', true),
			"price" => $this->input->post('price', true),
			"description" => $this->input->post('description', true),
			"image" => $this->input->post('image', true),
			//"admin_id" => $this->input->post('admin_id', true),
        ];
        $this->M_Product->insert_Product($data);
		redirect('V_AdminProduct');
    }
    public function form_deleteProduct(){
        $this->load->view("V_AdminProduct"); 
    }
    public function delete_Product($id_product){
        $check = $this->M_Product->delete_Product($id_product);
		if($check){
            $this->session->set_flashdata('Product_Deleted', 'The selected product has been removed!');
        }else{
            $this->session->set_flashdata('Product_notDeleted', 'There is a problem in removing the product!');
        }
		redirect('V_AdminProduct');
    }
    public function form_editProduct(){
        $this->load->view("V_AdminProduct"); 
    }
    public function edit_Product($id_product){
        $data = [
            "id" => $id_product,
			"name" => $this->input->post('name', true),
			"price" => $this->input->post('price', true),
			"description" => $this->input->post('description', true),
			"image" => $this->input->post('image', true),
			//"admin_id" => $this->input->post('admin_id', true),
        ];
        $check = $this->M_Product->update_Product($id_product,$data);
		if($check){
            $this->session->set_flashdata('Product_Updated', 'The selected product detail(s) has been updated!');
        }else{
            $this->session->set_flashdata('Product_notUpdated', 'There is a problem in updating the product detail(s)!');
        }            
		redirect('V_AdminProduct');
    }
}
?>