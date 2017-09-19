<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('template');
    $this->load->library('session');
		$this->load->model('semestre_model');
		$this->load->model('desertores_model');
	}


	public function index() {
    if(isset($_SESSION['user'])){
      $this->template->admin_layout('index', 'admin');
    }else{
      $this->template->model_basic('welcome_message', 'welcome');
    }
	}

	public function cerrar_sesion() {
		$this->session->sess_destroy();
		redirect('/welcome');
	}

	public function cerrar_matriculas() {
		$result = "";
		if(isset($_SESSION['user'])){
			$result = $this->semestre_model->cerrar_matriculas();
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($result));
	}

	public function abrir_matriculas() {
		$result ="";
		if(isset($_SESSION['user'])){
			$result = $this->semestre_model->abrir_matriculas();
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($result));
	}

	public function geo_desertores(){
		$result ="";
		if(isset($_SESSION['user'])){
			$result = $this->desertores_model->geo_desertores();
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($result));
	}
}
