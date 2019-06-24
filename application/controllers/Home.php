<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
    //load model library
    //$this->load->model('users');
  }
	
	public function index()
	{
        echo "hello this is home";
		//$this->load->view('welcome_message');
	}
}
