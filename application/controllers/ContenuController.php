<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContenuController extends CI_Controller {
    public function Landing(){
        $this->load->model('Contenu_Model');
		$data['listev'] = $this->Contenu_Model->Liste_Contenu_virtuel();
        $data['listep'] = $this->Contenu_Model->Liste_Contenu_physique();
        $data['liste_type'] = $this->Contenu_Model->get_type();
		$this->load->view('miniprojet_fo/index', $data);
    }
    public function Triage(){
        $this->load->model('Contenu_Model');
        $type = $this->input->get('id_type');
        $data['liste'] = $this->Contenu_Model->Tri_Contenu($type);
        $this->load->view('landing', $data);
    }
    public function sendpage(){
        $this->load->model('Contenu_Model');   
        $data['liste_type'] = $this->Contenu_Model->get_type();
        $this->load->view('landing', $data);
    }
    public function Insert_contenu(){
        $this->load->model('Contenu_Model');
        $this->load->helper('text');
        $nom = $this->input->post('nom');
        $fournisseur = $this->input->post('fournisseur');
        $detail = $this->input->post('detail');
        $date_sortie = $this->input->post('date_sortie');
        $id_type = $this->input->post('id_type');
        /*$image = base64_decode($this->input->post('img'));
        $image_name = md5(uniqid(rand(), true));
        $filename = $image_name.'.'.'png';
        $path = "C:\wamp64\www\Miniprojet_Bo\assets\images/".$filename;
        file_put_contents($path . $filename,$image);
        $data_insert = array('sary'=>$filename);*/
        $image = $this->input->post('img');
        $path = "C:\wamp64\www\Miniprojet_Bo\assets\images/".$image;
        $img = fopen($path, 'r');
        $data = fread($img, filesize($path));
        $es_data = pg_escape_bytea($data);
        fclose($img);
        $check = $this->Contenu_Model->Check_doublon($nom);
        if($check == 0){
            $insert = $this->Contenu_Model->New_Contenu($nom, $fournisseur, $detail, $date_sortie, $es_data, $id_type);
            if($insert == true){
                return redirect('ContenuController/Landing');
            }else{
                echo "<center><p>Une erreur est survenue!</p></center>";
            }
        }else{
            echo "<center><p>Nom deja utilise!</p></center>";
        }
    }
    public function Upt_contenu(){
        $this->load->model('Contenu_Model');
        $nom = $this->input->post('nom');
        $fournisseur = $this->input->post('fournisseur');
        $detail = $this->input->post('detail');
        $date_sortie = $this->input->post('date_sortie');
        $id_type = $this->input->post('id_type');
        $id_contenu= $this->input->post('id');
        $image = $this->input->post('img');
        $path = "C:\wamp64\www\Miniprojet_Bo\assets\images/".$image;
        $img = fopen($path, 'r');
        $data = fread($img, filesize($path));
        $es_data = pg_escape_bytea($data);
        fclose($img);
            $insert = $this->Contenu_Model->Update_Contenu($nom, $fournisseur, $detail, $date_sortie, $es_data, $id_type, $id_contenu);
            if($insert == true){
                return redirect('about_content_admin/artificiel/'.$id_contenu.'/'.$id_type);
            }else{
                echo "<center><p>Une erreur est survenue!</p></center>";
            }
    }

    public function info($id, $type){
        $this->load->model('Contenu_Model');
        $data['liste'] = $this->Contenu_Model->info_Contenu($id);
        $data['liste_type'] = $this->Contenu_Model->get_type();
        $data['type'] = $type;
        $data['id'] = $id;
        $this->load->view('content_info', $data);
    }
    public function all_content($type){
        $this->load->model('Contenu_Model');
        if($type == 1){
            $data['content'] = $this->Contenu_Model->Liste_Contenu_virtuel_all();
            $data['type'] = 1;
            $this->load->view('all_content', $data);
        }else{
            $data['content'] = $this->Contenu_Model->Liste_Contenu_physique_all();
            $data['type'] = 2;
            $this->load->view('all_content', $data);
        }
    }
}