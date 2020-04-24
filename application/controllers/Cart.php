<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        
        checkLoginBuyer();
        $this->load->model('M_Cart');
        $this->load->model('M_Product');
        $this->load->model('M_Buyer');
    }

    public function index(){
        $username = $this->session->userdata('username');
        $data['buyer'] = $this->M_Buyer->checkBuyer($username);

        $this->load->view("V_Cart", $data);
    }

    public function getCart() {
        $dataCart = $this->M_Cart->getCart();
        echo json_encode($dataCart);
    }

    public function addToCart($idProduct) {
        checkLoginBuyer();
        $product = $this->M_Product->get_ProductbyId($idProduct)->row_array();
        echo var_dump($product);
        die;
        $data = [
            'quantity'      => 1,
            'date'          => date('y-m-d'),
            'total_price'   => $product['price'],
            'id_buyer'      => $this->session->userdata('id'),
            'id_product'    => $idProduct
        ];
        $this->M_Cart->addProductToCart($data);
	}
}

?>