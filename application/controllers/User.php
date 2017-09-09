<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class User extends CI_Controller {

    function __construct() {
      parent::__construct();
      $this->load->library('template');
      $this->load->model('user_model');
      $this->load->library('session');
    }

    public function signin(){
      if($this->user_model->crearSesion($this->input->post('user'),$this->input->post('password'))) {
        $this->session->set_userdata(array('user' => $user));
        redirect('/admin/index');
      }else {
        redirect('/welcome');
      }
    }

    public function nuevo() {
      $this->template->model_basic('new','user');
    }

    public function crear() {
      $this->user_model->crear();
      redirect("/welcome/index");
    }

  }



 ?>
