<?php 
/**
* clase Users
*/
class users_model extends Connect
{

	private $db;
	private $users;

	public function __construct(){
		$this->db = Connect::connection();
		$this->users = array();
	}

	public function get_users(){
		$query = $this->db->query("SELECT * FROM users");
		while ($rows = $query->fetch_assoc()){
			$this->users[] = $rows;
		}
		return $this->users;
	}
	
}

?>