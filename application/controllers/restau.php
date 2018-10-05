<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restau extends CI_Controller {

    function __construct(){
	
        parent :: __construct();
        $this->load->model('restaurant');
    }

    public function index()
    {
        $this->afficher_item();
    }
//======================================================================================
    public function afficher_item(){
        
        $id = $this->input->get('id');

		$data["info_resto"] = $this->item->afficher_items($id);
			
        $this->load->vue('vue_item', $data);

        }
}




?>    