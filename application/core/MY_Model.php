<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model{
  //set public variable to inherit class
  public $table_name;

  public function __construct()
  {
    parent::__construct();
    //load databse library
    $this->load->database();
  }

  public function get($id = NULL)
  {
    return $this->db->get($this->table_name)->result();
  }

  public function find_id($id = NULL)
  {
    return $this->db->where('id', $id)->get($this->table_name)->result();
  }

  public function delete_id($id = NULL)
  {
    return $this->db->where('id', $id)->delete($this->table_name);
  }

  public function update($id = NULL, $data = NULL)
  {
    return $this->db->where('id', $id)->update($this->table_name, $data);
  }

  public function add($data = NULL)
  {
    return $this->db->insert($this->table_name, $data);
  }

}
