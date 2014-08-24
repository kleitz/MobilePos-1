<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

		public function view($page = 'home'){
		
		
		$this->load->view('Pages/'.$page);
	
	}
}

