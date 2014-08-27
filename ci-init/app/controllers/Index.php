<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

		
		public function dft($modul='home',$cdata=false){
		
	
		    if( ! is_dir(APPPATH.'views/'.$modul) ) {

		    	show_404();
		    		

		    }

			
			$cmoo_id = array(

					'customers' => array(

									'cid'    => '' ,
									'zh'     => '' ,
									'time'   => '' ,
									'exp'    => '' ,
									'status' => '' ,

									),
					'order'     => array(

									'oid'    => '' ,
									'cid'    => '' ,
									'amount' => '' ,

									),
					'order-item' => array(


									'oid'    => '' ,
									'dishid' => '' ,
									'sl'     => '' ,
									'ostatus'=> '' ,
 



									)	

				);


			$this->session->set_userdata($cmoo_id);
			$this->session->keep_flashdata('session_id');

 				
 			//$sess = $this->session->all_userdata();
 			//$this->session->unset_userdata('user_data');
 			//var_dump($sess);
		    //$this->load->view('header/header');
	        //$this->load->view($modul.'/'.$modul,$cdata);

	 }
	
	




	 		public function encryfc(){

	 		
	 		var_dump($this->session->userdata('customers'));

	 			 
			


	 			$msg = 'My secret message';
				$key = 'super-secret-key';

		  var_dump($encrypted_string = $this->encrypt->encode($msg));
		  var_dump($encrypt_str = $this->encrypt->decode($encrypted_string));


	 		}
	}




	