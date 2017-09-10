<?php

class Desertores extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->library('template');
    $this->load->model('desertores_model');
  }

  public function index() {
    if(!isset($_SESSION['user'])){
      $data['desertores'] = $this->desertores_model->all();
      $this->template->admin_layout('index', 'desertores',$data);
    }else {
      redirect('/welcome');
    }

  }
}
