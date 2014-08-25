<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

		public function __construct()
		  {
		    parent::__construct();
		    $this->load->model('home_model');
		  }

		public function view($page = 'home'){
		
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		  {
		    // 页面不存在
		    show_404();
		  }
		
		$this->load->view('header/header');
		$this->load->view('Pages/'.$page);
	
	}
}



	public function guestlist($item=false){
		$this->load->model('Home_model');
	
		if($item===false){
			
		$data = $this->home_model->get_cd();
		$this->load->view('header/header');
		$this->load->view('show_cd/index', $data);
			
		}
		
		$data = $this->home_model->get_cd($item);
		$this->load->view('show_cd/item', $data);	
		
	}