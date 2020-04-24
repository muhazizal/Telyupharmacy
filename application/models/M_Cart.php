<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Cart extends CI_Model {

  public function getCart() {
    $this->db->select('*');
    $this->db->from('transaction');
    $this->db->join('product', 'product.id = transaction.id_product');
    return $this->db->get()->result();
  }

  public function addProductToCart($data) {
    return $this->db->insert('transaction', $data);
  }
  
}

?>