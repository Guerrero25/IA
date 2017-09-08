<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Template {

    protected $CI;

    function __construct() {
      $this->CI =& get_instance();
    }

    public function model_basic($body, $folder = '') {
      $route = $folder == ''? $body : $folder.'/'.$body;

      $this->CI->load->view('head');
      $this->CI->load->view($route);
      $this->CI->load->view('footer');
    }
  }


 ?>