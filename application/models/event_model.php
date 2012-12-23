 <?php
class event_model extends CI_Model {

	function get_future_events() {
		$q = $this->db->
			get_where('events',array('date >' => date('Y-m-d H:i:s',time()) ) );
		
		foreach ($q->result() as $row) {
			$data[] = $row;
			//echo $row->name;
		}
		return $data;//$q->result();
	}
	function get_past_events() {
		$q = $this->db->
			get_where('events',array('date <' => date('Y-m-d H:i:s',time()) ),10 );
		
		foreach ($q->result() as $row) {
			$data[] = $row;
			//echo $row->name;
		}
		return $data;//$q->result();
	}

	function get_all_events() {
		$q = $this->db->get('events');
		foreach ($q->result() as $row) {
			echo $row->name;
		}
		return $q->result();
	}
}

?>