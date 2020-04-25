<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Product extends CI_Model {

  function __construct(){
    parent::__construct();
  }

  public function get_AllProduct(){
    return $this->db->get('product')->result_array();
  }
  
  public function get_ProductbyId($id_product){
    $this->db->where('id', $id_product);
    return $this->db->get('product')->row_array();
  }

  public function get_ProductbyName($name_product){
    $this->db->like('name',$name_product);
    return $this->db->get('product')->result_array();
  }

  public function get_ProductbyPrice($lowprice_product, $highprice_product){
    $this->db->where('price >=', $lowprice_product);
    $this->db->where('price <=', $highprice_product);
    return $this->db->get('product');
  }

  public function insert_Product($data) {
    return $this->db->insert('product',$data);
  } 

  public function update_Product($id_product,$data){
    $this->db->where('id',$id_product);
    return $this->db->update('product',$data);
  }

  public function delete_Product($id_product){
    $this->db->where('id',$id_product);
    return $this->db->delete('product');
  }

  public function addProductToCart($data) {
    return $this->db->insert('transaction', $data);
  }

}
?>