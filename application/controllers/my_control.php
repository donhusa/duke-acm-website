<?php

class My_control extends CI_Controller {

	public function index() {
		
		//echo "yayay";
		$this->load->model('my_model');
		$this->my_model->getAll();
		$this->load->view('my_view');
	}
}

?>