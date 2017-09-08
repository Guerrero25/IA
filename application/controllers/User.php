<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class User extends CI_Controller {

    function __construct() {
      parent::__construct();
      $this->load->library('template');
      $this->load->model('user_model');
    }

    public function nuevo() {
      $this->template->model_basic('new','user');
    }

    public function crear() {
      $this->user_model->crear();
      $this->template->model_basic('welcome_message','welcome');
    }

  }



 ?>
