<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('template');
    $this->load->library('session');
	}


	public function index() {
    if(!isset($_SESSION['user'])){
      $this->template->model_basic('index', 'admin');
    }else{
      $this->template->model_basic('welcome_message', 'welcome');
    }
	}
}
