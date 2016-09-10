<?php 

	class Contact extends CI_Controller {

		public function index()
		{
		
			$this->load->view('Contact_view');
			$this->load->model('category');
			$hdata['title']='Product-JDM Original';
			
			$hdata['cat'] = $this->category->get_category();
			$this->load->view('common/header', $hdata);
			echo "hi this is contact page!!" ;
			$this->load->view('common/footer');
		}
	}
?> 