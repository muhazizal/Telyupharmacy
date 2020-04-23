<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    
    public function __construct()
	{
        parent::__construct();

        $this->load->model('M_Admin');
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

        $username = $this->session->userdata('username');
        $data['admin'] = $this->M_Admin->getAdmin($username);
        $data['data_product'] = $this->M_Product->get_AllProduct();
        $this->load->view("V_AdminProduct",$data); 
    }

    public function search_Product(){
        $name_product    =   $this->input->post('name_product');
        $data2['data_product']  = $this->M_Product->get_ProductbyName($name_product);
        $this->load->view('V_AdminProduct',$data2);
    }

    public function add_Product(){
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('price', 'Price', 'required|trim');
		$this->form_validation->set_rules('desciption', 'Description', 'required|trim');
        $data = [
            //"id" => $this->input->mt_rand(10000000000,99999999999),
			"name" => $this->input->post('name', true),
			"price" => $this->input->post('price', true),
			"description" => $this->input->post('description', true),
			"image" => $this->uploadimage(),
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
        $data['data_product'] = $this->M_product->get_ProductId($id_product);

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('price', 'Price', 'required|trim');
		$this->form_validation->set_rules('desciption', 'Description', 'required|trim');

        if($this->form_validation->run()==false){
			// $this->load_AdminArticle();
		}else{
            $id = $this->session->userdata('id');
            $upload_image = $_FILES['image']['name'];
            
            if($upload_image){
				$config = [
					'upload_path'             =>  './assets/uploads/article/',
					'allowed_types'      	  =>  'gif|jpg|png',
					'max_size'           	  =>  '5120',             
					'max_width'          	  =>  '600',           
					'max_height'         	  =>  '600',   
					'overwrite'               =>  'true',
                ];
                
                $this->load->library('upload', $config);

                if($this->upload->upload('image')){
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
            $check = $this->M_Product->update_Product($id_product,$data);
            if($check){
				$this->session->set_flashdata('Product_Updated', 'The selected product detail(s) has been updated!');
			}else{
				$this->session->set_flashdata('Product_notUpdated', 'There was a problem updating the product detail(s)!');
			}            
			redirect('Article/load_AdminProduct');
        }
    }
	public function uploadimage(){
		$config = [
			'upload_path'			  =>  './assets/uploads/article/',
			'allowed_types'      	  =>  'gif|jpg|png',
			'max_size'           	  =>  '5120',             
			'max_width'          	  =>  '2000',           
			'max_height'         	  =>  '2000',   
			'overwrite'               =>  'true',
		];
		$this->load->library('upload', $config);
		if($this->upload->do_upload('image')){
			return $this->upload->data("file_name");
		}else {
			return "defaultproduct.jpg";
		}
    }
    
    // Search product by name in buyer page
    public function searchProductBuyer() {
		$username = $this->session->userdata('username');
		$data['buyer'] = $this->M_Buyer->checkBuyer($username);

		$searchValue = $this->input->get('searchProduct');
		if ($searchValue) {
			$data['products'] = $this->M_Product->getProductName($searchValue);
		} else {
			$data['products'] = $this->M_Product->get_AllProduct();
		}

		$this->load->view("V_Product", $data);
	}

    // Show detail product in buyer page
    public function showDetailProduct($id_product) {
        $username = $this->session->userdata('username');
        $data['buyer'] = $this->M_Buyer->checkBuyer($username);
        $data['product'] = $this->M_Product->get_ProductbyId($id_product);

        $this->load->view('V_DetailProduct', $data);
	}
}
?>