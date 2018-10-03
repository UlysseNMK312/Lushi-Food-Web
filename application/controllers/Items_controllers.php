<?php 

    class ITEMS extends CI_controllers(){

        public function __construct(){

            parent :: __construct();

            $this->load->database();
            $this->load->model("items");
<<<<<<< HEAD
            //$this ->load->model("modifier_item");
=======
            $this ->load->model("restaurant");
>>>>>>> controller
			$this->load->helper(array('form', 'url'));

        }



    }



























?.>