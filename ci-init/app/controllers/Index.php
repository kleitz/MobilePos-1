<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

		
		public function dft($page=false,$data=false){
		
		if ( ! file_exists(APPPATH.'views/home'.$page))
		  {
		    // 页面不存在
		    echo APPPATH.'views/pages'.$page;

		      show_404();
		  }
		
		  $cdata = $this->session->userdata('cdata');
		if( ! empty($cdata)){


			$cdata = array(

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


			$this->session->set_session;
		}
 
		 $this->load->view('header/header');
	     $this->load->view('home'.$page,$data);

	 }
	
	}




	