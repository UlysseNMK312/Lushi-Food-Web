<?php
	

class items extends CI_models
{
	
	function __construct($id_item, $nom_item, $descript, $prix_unit, $images, $id_cot, $id_rest)
	{
		parent:: __construct();

		$this->load->database();
		$this->load->helper(array('form', 'url'));
	}
	
	public function afficher_items($id){

			$query = $this->db->select(Array('nom','description','prix','images'))
								->WHERE('id',(int)$id)
								->get($this->table)
								->result();
			return $requete;
		}

		
		//echo "les items :" .$query->num_row();
		}
	}


	// en cours...
	public function supprimer_item($id_item)
	{
		
		$query = $this->db->where('id', (int)id)) 
				->delete($this->table_items)
				->result();
		return $query;

	}
//===============================================================================================================================================

	public function modification_item($id_item, $nom=null, $description=null, $prix_unitaire=null, $){
	
			if ($nom == null AND $description == null AND $pu == null){
				return false;
			}
			else{

				$this->db->set('nom', $nom);
				$this->db->set('description', $description);
				$this->db->set('pu', $prix_unitaire);
				
				return $this->db->where('id', (int)id)
				->update($this->table_items);
			}
			return $this->db->insert($this->table_items)
	}
//========================================================================================================================================================
	// en cours...
    publc function enregitrement_cotation_item($id_item,$nom_item == null, $apreciation== null, $id_user == null, $id_resto == null){

		
		$data[
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = 100;
		$config['max_width']  = 1024;
		$config['max_height']  = 768;
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->vue('vue_cotation_item', $error);
		}
		else{
			$path = $this->upload->data();
			$data = array('upload_data' => $this->upload->data());
			foreach($chemin as $key => $value){
				if($key === 'file_name'){
					$path='./assets/uploads/'. $value;
				}
			}

			echo "success";
		}
		

		
		//if($nom_item == null AND $apreciation == null){

		$apreciation = $this->input->post('appreciation');
		$id_item = $this->input->get('id_item');
		$nom_item = $this->imput->get('nom_item');
		$id_user = $this->input->get('id_user');


		//}
		$data['upload_data'] = $this->upload->data(); 
		$this->items_controllers->set_items($nom_item, $id_item, $apreciation, $id_resto, $id_user);
		$this->load->view('vue_cotation_item', $data);
	}    
        
        
        



?>