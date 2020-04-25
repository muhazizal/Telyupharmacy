<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    
  public function __construct()
	{
		parent::__construct();

		$this->load->model('M_Admin');
		$this->load->model('M_Buyer');
		$this->load->model('M_Product');
		$this->load->model('M_Cart');
  }

	// ---------------------------------- BUYER ---------------------------------------------------- //
  public function index(){
    checkLoginBuyer();
        
	  $username = $this->session->userdata('username');
		$data['buyer'] = $this->M_Buyer->checkBuyer($username);
		$data['data_product'] = $this->M_Product->get_AllProduct();
        
		$this->load->view("V_Product", $data,array('error' => ' ' ));
	}
	
	public function searchProductName($searchValue) {
		checkLoginBuyer();

		if ($searchValue) {
			$data = $this->M_Product->get_ProductbyName($searchValue);
			echo json_encode($data);
		}
	}

	public function searchProductPrice($minPrice, $maxPrice) {
		checkLoginBuyer();

		if ($minPrice or $maxPrice) {
			$data = $this->M_Product->get_ProductbyPrice($minPrice, $maxPrice)->result_array();
			echo json_encode($data);
		}
	}

	public function showDetailProduct($id_product) {
		checkLoginBuyer();
		$username = $this->session->userdata('username');
		$data['buyer'] = $this->M_Buyer->checkBuyer($username);
		$data['product'] = $this->M_Product->get_ProductbyId($id_product);

		$this->load->view('V_DetailProduct', $data);
	}

	public function showAllProduct() {
		checkLoginBuyer();

		$dataProduct = $this->M_Product->get_AllProduct();
		echo json_encode($dataProduct);
	}

	public function addProductToCart($id_product) {
		checkLoginBuyer();

		$data['product'] = $this->M_Product->get_ProductbyId($id_product);
		$insert = [
			'quantity'      => 1,
			'date'          => date('y-m-d'),
			'total_price'   => $data['product']['price'],
			'id_buyer'      => $this->session->userdata('id'),
			'id_product'    => $data['product']['id']
		];

		$this->M_Product->addProductToCart($insert);
		echo json_encode($insert);
	}

	public function addProductDetailToCart($id, $quantity) {
		checkLoginBuyer();

		$data['product'] = $this->M_Product->get_ProductbyId($id);
		$insert = [
			'quantity'      => $quantity,
			'date'          => date('y-m-d'),
			'total_price'   => $quantity * $data['product']['price'],
			'id_buyer'      => $this->session->userdata('id'),
			'id_product'    => $data['product']['id']
		];

		$this->M_Product->addProductToCart($insert);
		echo json_encode($insert);
	}

	public function load_Checkout(){
		checkLoginBuyer();

		$username = $this->session->userdata('username');
		$data['buyer'] = $this->M_Admin->getAdmin($username);
		//$data['data_product'] = $this->M_Product->get_AllProduct();
		$this->load->view("V_Checkout",$data); 
  }


	// ---------------------------------- ADMIN ---------------------------------------------------- //
  public function load_AdminProduct(){
		checkLoginAdmin();

		$username = $this->session->userdata('username');
		$data['admin'] = $this->M_Admin->getAdmin($username);
		$data['data_product'] = $this->M_Product->get_AllProduct();
		$this->load->view("V_AdminProduct",$data); 
  }

  public function add_Product(){
		checkLoginAdmin();
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if($this->form_validation->run()==false){
			$this->session->set_flashdata('product_notInserted', 'Please fill out the field correctly!');
			redirect('Product/load_AdminProduct');
		}
		else{
			$upload_image = $_FILES['image']['name'];

			if($upload_image){
				$config = [
					'upload_path'    =>  './assets/uploads/product/',
					'allowed_types'  =>  'gif|jpg|png',
					'max_size'       =>  '10240',             
				];

				$this->load->library('upload',$config);

				if($this->upload->do_upload('image')){
					$new_image = $this->upload->data('file_name');
					$data = [					
						"name" 				=> $this->input->post('name', true),
						"price" 			=> $this->input->post('price', true),
						"description" => $this->input->post('description', true),
						"image" 			=> $new_image,
						"admin_id" 		=> $this->session->userdata('id'),
					];
				}
			}
			else{
				$data = [
				"name" 				=> $this->input->post('name', true),
				"price" 			=> $this->input->post('price', true),
				"description" => $this->input->post('description', true),
				"image" 			=>"defaultproduct.jpg",
				"admin_id"		=> $this->session->userdata('id'),
				];
			}
		
		$this->M_Product->insert_Product($data);
		$this->session->set_flashdata('product_Inserted', 'The selected product has been added!');
		redirect('Product/load_AdminProduct');
		}
  }

	public function delete_Product($id_product){
		checkLoginAdmin();
		$check = $this->M_Product->delete_Product($id_product);
		if($check){
			$this->session->set_flashdata('Product_Deleted', 'The selected product has been removed!');
		}else{
			$this->session->set_flashdata('Product_notDeleted', 'There was a problem removing the product!');
		}
		redirect('Product/load_AdminProduct');
	}

	public function update_Product($id_product){
		checkLoginAdmin();
		$data['data_product'] = $this->M_Product->get_ProductbyId($id_product);

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('product_notUpdated', 'There was a problem updating the product detail(s)!');
			redirect('Product/load_AdminProduct');
		}else{
			$upload_image = $_FILES['image']['name'];
					
			if($upload_image){
				$config = [
					'upload_path'			=>  './assets/uploads/product/',
					'allowed_types'		=>  'gif|jpg|png',
					'max_size'				=>  '10240',                
				];
							
				$this->load->library('upload', $config);

				if($this->upload->do_upload('image')){
					$old_image = $data['data_product']['image'];

					if ($old_image != 'defaultproduct.jpg') {
						unlink(FCPATH . 'assets/uploads/product/' . $old_image);                    
					}

					$new_image = $this->upload->data('file_name');
					$data = [
						"id"            => $id_product,
						"name"          => $this->input->post('name', true),
						"price"         => $this->input->post('price', true),
						"description"   => $this->input->post('description', true),
						"image"         => $new_image,
						"admin_id"      => $this->session->userdata('id'),
					];
				}
			}
			else{
				$data = [
					"id"            => $id_product,
					"name"          => $this->input->post('name', true),
					"price"         => $this->input->post('price', true),
					"description"   => $this->input->post('description', true),
					"admin_id"      => $this->session->userdata('id'),
				];
			}
			$this->M_Product->update_Product($id_product,$data);
			$this->session->set_flashdata('product_Updated', 'The selected product detail(s) has been updated!'); 
			redirect('Product/load_AdminProduct');
		}
	}
		
	public function searchProductAdmin() {
		checkLoginAdmin();
		$username = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		$data['admin'] = $this->M_Admin->getAdmin($username,$password);

		$searchValue = $this->input->get('searchProduct');
		if ($searchValue) {
			$data['data_product'] = $this->M_Product->get_ProductbyName($searchValue);
		} else {
			$data['data_product'] = $this->M_Product->get_AllProduct();
		}

		$this->load->view("V_AdminProduct", $data);
	}
	
}
?>