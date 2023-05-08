<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contenu_Model extends CI_Model {
    public function Liste_Contenu_virtuel(){
        $query = $this->db->query("SELECT * FROM contenu WHERE id_type = 1 ORDER BY date_publication desc LIMIT 4");
        return $query->result_array();
    }
    public function Liste_Contenu_virtuel_all(){
        $query = $this->db->query("SELECT * FROM contenu WHERE id_type = 1 ORDER BY date_publication desc");
        return $query->result_array();
    }
    public function Liste_Contenu_physique(){
        $query = $this->db->query("SELECT * FROM contenu WHERE id_type = 2 ORDER BY date_publication desc LIMIT 4");
        return $query->result_array();
    }
    public function Liste_Contenu_physique_all(){
        $query = $this->db->query("SELECT * FROM contenu WHERE id_type = 2 ORDER BY date_publication desc");
        return $query->result_array();
    }
    public function info_Contenu($id){
        $query = $this->db->query("SELECT * FROM contenu WHERE id = '$id' ORDER BY date_publication desc");
        return $query->result_array();
    }
    public function New_Contenu($nom, $fournisseur, $detail, $date_sortie, $sary, $id_type){
        $query = $this->db->query("INSERT INTO contenu(nom, fournisseur, detail, date_sortie, sary, id_type) VALUES('$nom', '$fournisseur', '$detail', '$date_sortie', '$sary', '$id_type')");
        return $query;
    }
    public function Update_Contenu($nom, $fournisseur, $detail, $date_sortie, $sary, $id_type, $id_contenu){
        $query = $this->db->query("UPDATE contenu SET nom = '$nom', fournisseur = '$fournisseur', detail = '$detail', date_sortie = '$date_sortie', sary = '$sary', id_type = '$id_type' WHERE id='$id_contenu'");
        return $query;
    }
    public function Check_doublon($nom){
        $query = $this->db->query("SELECT * FROM contenu WHERE nom ='$nom'");
        return $query->num_rows();
    }
    public function get_type(){
        $query = $this->db->query("SELECT * FROM type");
            return $query->result_array();
    }
}