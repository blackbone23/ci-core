<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Model{

  public function __construct()
  {
    parent::__construct();
    //setup db table
    $this->table_name = 'users';
  }
  

}