<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Cart extends CI_Model {

  public function getCart() {
    $this->db->select('*');
    $this->db->from('transaction');
    $this->db->join('product', 'product.id = transaction.id_product');
    return $this->db->get()->result();
  }
  
  public function getProductById($idProduct) {
    $this->db->where('id_product', $idProduct);
    return $this->db->get('transaction')->row_array();
  }
}

?>