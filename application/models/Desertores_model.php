<?php

class Desertores_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function all() {
    return $this->db->query("SELECT * FROM estudiantes e INNER JOIN desertores d ON e.id = d.id_estudiante")->result();
  }

  public function geo_desertores() {
    return $this->db->query("SELECT lat, lng FROM estudiantes e INNER JOIN desertores d ON e.id = d.id_estudiante")->result();
  }
}
