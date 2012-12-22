<?php
class my_model extends CI_Model {

	function getAll() {
		$q = $this->db->get('codeigtest');
		foreach ($q->result() as $row) {
			echo $row->name;
		}
	}
}

?>