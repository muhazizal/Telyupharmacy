<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Product extends CI_Model {

  public function get_AllProduct(){
    return $this->db->get('product')->result_array();
  }

  public function get_ProductbyId($id_product){
    $this->db->where('id',$id_product);
    return $this->db->get('product')->row_array();
  }

  public function get_ProductbyName($name_product){
    $this->db->like('name',$name_product);
    return $this->db->get('product')->row_array();
  }

  public function insert_Product($data){     
    return $this->db->insert('product',$data);
  } 

  public function update_Product($id_product,$data){
    $this->db->where('id',$id_product);
    return $this->db->get('product',$data);
  }

  public function delete_Product($id_product){
    $this->db->where('id',$id_product);
    return $this->db->delete('product');
  }

}
?>