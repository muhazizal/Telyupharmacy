<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Article extends CI_Model {

  public function get_AllArticle(){
    return $this->db->get('article')->result_array();
  }

  public function get_ArticlebyId($id_article){
    $this->db->where('id', $id_article);
    return $this->db->get('article')->row_array();
  }

  public function get_ArticlebyName($keyword){
    $this->db->like('title', $keyword);
    $this->db->or_like('category', $keyword);
    return $this->db->get('article')->result_array();
  }

  public function insert_Article($data) {
    return $this->db->insert('article', $data);
  }

  public function update_Article($id_article, $data){
    $this->db->where('id', $id_article);
    return $this->db->update('article', $data);
  }

  public function delete_Article($id_article){
    $this->db->where('id', $id_article);
    return $this->db->delete('article');
  }

}
?>