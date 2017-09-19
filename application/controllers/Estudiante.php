<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Estudiante extends CI_Controller {

    function __construct() {
      parent::__construct();
      $this->load->library('template');
      $this->load->model('estudiante_model');
      $this->load->library('session');
      $this->load->model('zonas_model');
    }

    public function signin(){
      if($this->estudiante_model->crearSesion($this->input->post('user'),$this->input->post('password'))) {
        $this->session->set_userdata(array('user' => $this->input->post('user')));
        redirect('/admin/index');
      }else {
        redirect('/welcome');
      }
    }

    public function matricular($id) {
      if(isset($_SESSION['user'])) {
        $this->estudiante_model->matricular($id);
        redirect('/estudiante/index');
      }else{
        redirect("/welcome");
      }
    }

    public function nuevo() {
      $this->template->admin_layout('new','estudiante');
    }

    public function crear() {
      if(isset($_POST['address'])){
        $this->load->library('googlemap');
        $coop = $this->googlemap->calcular_lat($this->input->post('address'));
        $z = $this->calcular_zona($this->input->post('address'));
        $this->estudiante_model->crear($coop, $z);
        redirect("/welcome/index");
      }
    }

    public function index() {
      if(isset($_SESSION['user'])) {
        $data['estudiantes'] = $this->estudiante_model->all();
        $this->template->admin_layout('index', 'estudiante',$data);
      }else{
        redirect("/welcome");
      }
    }


    private function calcular_zona($address){
      $zonas = $this->zonas_model->all();
      foreach ($zonas as $value) {
        if ($this->googlemap->calcular_zona($value->lat.','.$value->lng,$address) < 1500) {
          return $value->id;
        }
      }
    }
  }



 ?>
