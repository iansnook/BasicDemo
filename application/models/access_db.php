<?php

	class access_db extends CI_Model{
		function getAll(){
			$query = $this->db->query("SELECT * FROM customerComments");
			return $query->result();
		}
		
		function insert($data){
			$this->db->insert("requestedQuotes",$data);
		}
		
		function selectLocations(){
			$query = $this->db->query("SELECT * FROM locations");
			return $query->result();
		}
	}	
?>