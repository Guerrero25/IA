<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Template {

    protected $CI;

    function __construct() {
      $this->CI =& get_instance();
    }

    public function model_basic($body, $folder = '', $data = '') {
      $route = $folder == ''? $body : $folder.'/'.$body;

      $this->CI->load->view('default/head');
      $this->CI->load->view($route,$data);
      $this->CI->load->view('default/footer');
    }

    public function admin_layout($body, $folder = '', $data = '') {
      $route = $folder == ''? $body : $folder.'/'.$body;

      $this->CI->load->view('default/head');
      $this->CI->load->view('default/navegation');
      $this->CI->load->view($route,$data);
      $this->CI->load->view('default/footer');
    }
  }


 ?>
