<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurant extends CI_Models{

	public function __construct(){
	
	parent :: __construct();
	
		
		$this->load->database();
		$this->load->controller('restau');
		$this->load->helper(array('form', 'url'));

	}
	
}

}