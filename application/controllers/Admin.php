<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('template');
    $this->load->library('session');
		$this->load->model('semestre_model');
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
		if(isset($_SESSION['user'])){
			$result = $this->semestre_model->cerrar_matriculas();
			
			if($result['status'] == "OK"){
				redirect('/estudiante/index');
			}else{
				redirect('/estudiante/index');
			}

		}else{
			redirect("/welcome");
		}
	}
	public function abrir_matriculas() {
		if(isset($_SESSION['user'])){
			$result = $this->semestre_model->abrir_matriculas();
			if($result['status'] == "OK"){
				redirect('/estudiante/index');
			}else{
				redirect('/estudiante/index');
			}
		}else{
			redirect("/welcome");
		}
	}
}
