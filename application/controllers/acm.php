<?php

class Acm extends CI_Controller {

	private function _generate_page($header_data, $view, $data=null) {
		$this->load->view('header_view',$header_data);
		$this->load->view($view,$data);
		$this->load->view('footer_view');
	}

	public function index() {
		$header_data['csslink'] = '';
		$header_data['imagelink'] = 'main_header.jpg';
		$this->_generate_page($header_data,'home_view');
	}

	public function events() {
		$this->load->model('event_model');
		$data['events'] = $this->event_model->get_future_events();
		$data['past_events'] = $this->event_model->get_past_events();

		$header_data['csslink'] = 'events.css';
		$header_data['imagelink'] = 'site_header.jpg';
		$this->_generate_page($header_data,'event_view', $data);
	}

	public function members() {
		$header_data['csslink'] = 'events.css';
		$header_data['imagelink'] = 'site_header.jpg';
		$this->_generate_page($header_data,'members_view');
	}

	public function resources() {
		$header_data['csslink'] = 'events.css';
		$header_data['imagelink'] = 'site_header.jpg';
		$this->_generate_page($header_data,'resources_view');
	}

	public function contact() {
		$header_data['csslink'] = 'events.css';
		$header_data['imagelink'] = 'site_header.jpg';
		$this->_generate_page($header_data,'contact_view');
	}
}

?>