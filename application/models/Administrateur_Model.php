<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrateur_Model extends CI_Model {
    public function Log_Administrateur($pseudo, $mdp){
        $query = $this->db->query("SELECT * FROM administrateur WHERE pseudo = '$pseudo' AND mdp = '$mdp'");
        return $query->num_rows();
    }
}