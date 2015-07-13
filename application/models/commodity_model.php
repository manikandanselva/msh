<?php
	// GET THE COMMODITY WITH NAME SAME AS THE NAME IN CENTRAL DATA
	function get_commodity_id_with_the_given_name($commodity_name){
	$this->db->select('commodity_id');
	$this->db->from('commodities');
	$this->db->where('commodity_name', $commodity_name);
	$query = $this->db->get();
	$result = $query->row()->commodity_id;
	return $result;
	}
	// Function To Fetch All Commodies Record
	function show_commodities(){
	$query = $this->db->get('commodities');
	$query_result = $query->result();
	return $query_result;
	}
	// Function To Fetch Selected Student Record
	function show_commodities_id($data){
	$this->db->select('*');
	$this->db->from('commodities');
	$this->db->where('commodity_id', $data);
	$query = $this->db->get();
	$result = $query->result();
	return $result;
	}
	// Update Query For Selected Student
	function update_commodity_id($id,$data){
	$this->db->where('commodity_id', $id);
	$this->db->update('commodities', $data);
	}

	/*this function adds a commodity to the database*/
	function addcommodity($commodity=NULL){		
	$this->db->insert('commodities', $commodity);
	return $this->db->insert_id();						
	}
	/*this function gets all commodities in the database*/
	function getCommodity(){	
		$this->db->select('*');
		$this->db->from('commodities');				
		$query = $this->db->get();		
		return $query->result();			
	}


?>