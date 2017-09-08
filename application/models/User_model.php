<?php
  /**
   *
   */
  class User_model extends CI_Model
  {

    public $name;
    public $email;
    public $password;
    public $program;

    function __construct()
    {
      parent::__construct();
      $this->load->library('encryption');
    }

    public function crear(){
      $this->name = $this->input->post('name',TRUE);
      $this->email = $this->input->post('email',TRUE);
      $this->program = $this->input->post('program',TRUE);
      $this->password = $this->encryption->encrypt($this->input->post('password', TRUE));

      $this->db->insert('estudiantes', $this);
    }
  }


 ?>
