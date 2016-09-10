<?php 

	class Contact extends CI_Controller {

		public function index()
		{		
			$this->load->model('category');
			$hdata['title']='Product-JDM Original';			
			$hdata['cat'] = $this->category->get_category();


			$this->load->model('contact_info');
			$this->load->view('common/header', $hdata);
			$data['address'] = $this->contact_info->get_category(1) ; 


			$this->load->view('Contact_view',$data);
			$this->load->view('common/footer');
		}
	}
?> 