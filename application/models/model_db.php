<?php
class Model_db extends CI_Model{
	public function viewPhoto($num){
		$query = "SELECT * FROM ex_prize WHERE inning = $num";
		return $this->db->query($query)->result();
		//return 12;
		//var_dump($query);
	}
}