<?php

class Semestre_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function abrir_matriculas() {
    $semestre = $this->db->query("SELECT * FROM semestres ORDER BY id DESC LIMIT 1");
    if($semestre->row()->estado == "cerrado"){
      $this->db->insert('semestres', array('nombre' => '2018-1','estado' =>'matricula'));
      $this->db->set('estado', 1);
      $this->db->update('estudiantes');
      $result['status'] = 'OK';
      $result['msg'] = "Se abrio nuevo semestre!";
      return $result;
    }
  }

  public function cerrar_matriculas() {
    $semestre = $this->db->query("SELECT * FROM semestres ORDER BY id DESC LIMIT 1");
    if($semestre->row()->estado == "matricula"){

      $desertados = $this->db->query("SELECT * FROM estudiantes WHERE `estudiantes`.`estado` = 1");
      if(NULL !== $desertados->row()){
        $this->insertar_desertados($desertados->result(),$semestre);
      }

      $this->db->query("UPDATE semestres SET estado = 'cerrado' WHERE `semestres`.`id`=".$semestre->row()->id);
      $result['status'] = 'OK';
      $result['msg'] = "Matriculas cerradas satisfactoriamente!";
      return $result;
    }else {
      $result['status'] = 'ERROR';
      $result['msg'] = "Las matriculas ya estan cerradas";
      return $result;
    }
  }


  private function insertar_desertados($array,$semestre) {
    $des = "INSERT INTO desertores (id_estudiante, id_semestre) VALUES ";
    foreach ($array as $row) {
      $des .= sprintf("(%s),", $row->id.','.$semestre->row()->id);
    }
    $des = rtrim($des,',');

    $this->db->query($des);
  }
}

?>
