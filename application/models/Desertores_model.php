<?php

class Desertores_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function all() {
    return $this->db->query("SELECT DISTINCT * FROM `estudiantes` NATURAL JOIN desertores")->result();
  }
}
