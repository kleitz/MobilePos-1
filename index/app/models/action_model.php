<?php
class Action_model extends CI_Model {


   function __construct()
  {
  
    parent::__construct();
    
  }



  public function get_list($modul,$slug){
	
		if($slug===false){
		
		    
			$query = $this->db->query('SELECT * FROM '.$modul);
			return $query->result_array();
			
			 
			
			
		}else{
			
			$query = $this->db->get_where($modul,$slug);
			return $query->row_array();  
		}
	
	
	 
  }
  
  
  
 
	  
  }

