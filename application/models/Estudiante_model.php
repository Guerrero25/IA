<?php
  /**
   *
   */
  class Estudiante_model extends CI_Model
  {

    function __construct() {
      parent::__construct();
    }

    public function crear($coop){
      $data = array(
        'name' => $this->input->post('name',TRUE),
        'email' => $this->input->post('email',TRUE),
        'program' => $this->input->post('program',TRUE),
        'address' => $this->input->post('address', TRUE),
        'lat' => $coop['lat'],
        'lng' => $coop['lng'],
      );

      $this->db->set($data);
      $this->db->insert('estudiantes');
    }

    public function crearSesion($user, $password) {
      $sql = "SELECT * FROM administradores WHERE usuario = ? AND password = ?";
      $admin = $this->db->query($sql, array($user, $password));
      if(isset($admin)) {
        return TRUE;
      }else{
        return false;
      }
    }

    public function matricular($id) {
      $semestre = $this->db->query("SELECT * FROM semestres ORDER BY id DESC LIMIT 1");
      $estudiante= $this->db->query("SELECT * FROM estudiantes WHERE `estudiantes`.`id` = ".$id);
      if($semestre->row()->estado == "matricula" && $estudiante->row()->estado == 1) {
        $this->db->query("INSERT INTO matriculados (id_estudiante,id_semestre) VALUES (".$id.",".$semestre->row()->id.")");
        $this->db->query("UPDATE `estudiantes` SET `estado` = '2' WHERE `estudiantes`.`id` =".$id);
        return "Matriculado Correctamente al estudiante ".$estudiante->row()->name." en el semestre ".$semestre->row()->nombre;
      }else{
        return "Hubo un error el estudiante no se pudo matricular!";
      }
    }

    public function all() {
      return $this->db->query("SELECT * FROM estudiantes")->result();
    }
  }


 ?>
