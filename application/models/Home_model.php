<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

		public function front_view()
		{  
	
			
			 return $this->db->get('home');
			 
												
		}

		 public function client_about()
		 {
		 	
			 return $this->db->get('about');
			}

		 
	

 public function faculty_view()
		 {
		 	//$this->db->select_max('id');
			$query=$this->db->get('faculty');
			foreach($query->result() as $row)
			{
			 $this->db->select('*')->from('faculty');
			 return $this->db->get();
			}

		 }
		 }
?>