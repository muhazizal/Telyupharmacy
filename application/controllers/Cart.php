<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        
        checkLoginBuyer();
        $this->load->model('M_Cart');
        $this->load->model('M_Article');
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
        
        if ($dataCart) {
            echo json_encode($dataCart);
        }
    }

    public function deleteItem($idItem) {
        $dataItem = $this->M_Cart->deleteItem($idItem);
        
        if ($dataItem) {
            echo json_encode($dataItem);
        }
    }

    public function deleteAll(){
        $dataItemAll = $this->M_Cart->deleteAll();

        if ($dataItemAll) {
            echo json_encode($dataItemAll);
        }
    }

    public function updateQty($id_product, $qty) {
        $result = $this->M_Cart->updateQty($id_product, $qty);
        
        if ($result) {
            echo json_encode($result);
        }
    }

    public function backToHome() {
        $username = $this->session->userdata('username');
        $data['buyer'] = $this->M_Buyer->checkBuyer($username);
        $data['products'] = $this->M_Product->get_AllProduct();
        $data['articles'] = $this->M_Article->get_AllArticle();
        
        $this->M_Cart->deleteAll();
        $this->session->set_flashdata('backToCart', 'Thank you for your purchase, ' . $data['buyer']['username']);
        $this->load->view('V_HomeLogin', $data);
        
    }
}

?>