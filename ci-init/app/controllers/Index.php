<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

		// dft  =  default .   应用默认的模块, 'home' 主页 .  当url中没有任何传参时 , 默认进入主页

	    //  dft方法是各个模块首页展示的路由器

		public function dft($modul='home',$data=false){


		if ( ! is_dir(APPPATH.'views/'.$modul))
		  
		  {
		    // 模块不存在
		  

		      show_404();
		  }
		
		 
		  //  检测会话.  当前会话为true时重新加载一个会话
		
		if( $this->session->userdata('stus')){


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
 



									),

				     'stus'  =>  false  ,

				);

			$this->session->unset_userdata();
			$this->session->set_userdata($cmoo_id);
		}
 
		 $this->load->view('header/header');
	     $this->load->view($modul.'/'.$modul,$data);

	 }
	
	}




	