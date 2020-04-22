<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    
    public function __construct()
	{
        parent::__construct();

        $this->load->model('M_Buyer');
        $this->load->model('M_Product');
    }
    public function index(){
        checkLoginBuyer();
        
        $username = $this->session->userdata('username');
        $data['buyer'] = $this->M_Buyer->checkBuyer($username);
        $data['products'] = $this->M_Product->get_AllProduct();
        $this->load->view("V_Product", $data,array('error' => ' ' ));
    }

    public function load_AdminProduct(){
        checkLoginAdmin();
        $data['data_product'] = $this->M_Product->get_AllProduct();
        $this->load->view("V_AdminProduct",$data); 
    }
    public function add_Product(){
        $data = [
            //"id" => $this->input->mt_rand(10000000000,99999999999),
			"name" => $this->input->post('name', true),
			"price" => $this->input->post('price', true),
			"description" => $this->input->post('description', true),
			"image" => "gambardefault.jpg",//$this->input->post('image', true),
			"admin_id" => $this->session->userdata('id'),
        ];
        $check = $this->M_Product->insert_Product($data);
        if($check){
            $this->session->set_flashdata('product_Inserted', 'The selected product has been added!');
        }else{
            $this->session->set_flashdata('product_notInserted', 'There was a problem adding the product!');
        }
		redirect('Product/load_AdminProduct');
    }
    public function form_deleteProduct(){
        $this->load->view("V_AdminProduct"); 
    }
    public function delete_Product($id_product){
        $check = $this->M_Product->delete_Product($id_product);
		if($check){
            $this->session->set_flashdata('Product_Deleted', 'The selected product has been removed!');
        }else{
            $this->session->set_flashdata('Product_notDeleted', 'There was a problem removing the product!');
        }
		redirect('Product/load_AdminProduct');
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
			"image" => "gambardefault.jpg",//$this->input->post('image', true),
			"admin_id" => $this->session->userdata('id'),
        ];
        $check = $this->M_Product->update_Product($id_product,$data);
		if($check){
            $this->session->set_flashdata('Product_Updated', 'The selected product detail(s) has been updated!');
        }else{
            $this->session->set_flashdata('Product_notUpdated', 'There was a problem updating the product detail(s)!');
        }            
		redirect('Product/load_AdminProduct');
    }
    public function upload_Productimage(){
        $config['upload_path']          =  './assets/uploads/'; 
        $config['allowed_types']        =  'jpg|png';     
        $config['max_size']             =  '1024';             
        $config['max_width']            =  '600';           
        $config['max_height']           =  '600';   
        $config['overwrite']			= true;  

        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('userfile')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('v_upload', $error);                
        }else{
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('v_upload_success', $data);
        }
    }
}
?>