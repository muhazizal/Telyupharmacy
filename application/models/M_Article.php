<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Article extends CI_Model {

  function __construct(){
    parent::__construct();
  }

  public function get_AllArticle(){
    return $this->db->get('article')->result_array();
  } 

  public function get_ArticlebyId($id_article){
    $this->db->where('id',$id_article);
    return $this->db->get('article')->row_array();
  }

  public function get_ArticlebyName($name_product){
    $this->db->like('title',$name_product);
    $this->db->or_like('description',$name_product);
    return $this->db->get('article')->row_array();
  }

  public function insert_Article($data){     
    return $this->db->insert('article',$data);
  }

  public function update_Article($id_article,$data){
    $this->db->where('id',$id_article);
    return $this->db->update('article',$data);
  }

  public function delete_Article($id_article){
    $this->db->where('id',$id_article);
    return $this->db->delete('article');
  }

  public function getArticleTitle($title) {
    $this->db->select('*');
    $this->db->from('article');
    $this->db->like('title', $title);
    return $this->db->get()->result_array();
  }

}
?>