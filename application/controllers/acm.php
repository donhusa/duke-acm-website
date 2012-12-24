<?php

class Acm extends CI_Controller {

	public function index() {
		
		//echo "yayay";
		//$this->load->model('my_model');
		//$this->my_model->getAll();
		
		$header_data['csslink'] = '';
		$header_data['imagelink'] = 'main_header.jpg';
		$this->load->view('header_view',$header_data);
		$this->load->view('home_view');
		$this->load->view('footer_view');
	}

	public function events() {
		$this->load->model('event_model');
		$data['events'] = $this->event_model->get_future_events();

		$header_data['csslink'] = 'events.css';
		$header_data['imagelink'] = 'site_header.jpg';
		$this->load->view('header_view',$header_data);
		$this->load->view('event_view',$data);
		$this->load->view('footer_view');
	}

	public function members() {
		$this->load->view('members');
	}

	public function resources() {
		$this->load->view('resources');
	}

	public function contact() {
		$this->load->view('contact');
	}
}

?>