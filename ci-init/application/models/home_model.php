<?php
class Home_model extends CI_Model {


  public function __construct()
  {
    $this->load->database();
  }



  public function get_cd($slug = false){
	
		if($slug===false){
			
			$query = $this->db->get('order_table');
			return $query->result_array();
		}
	
	
	 $query = $this->db->get_where('order_table', array('slug' => $slug));
	 return $query->row_array();  
  }