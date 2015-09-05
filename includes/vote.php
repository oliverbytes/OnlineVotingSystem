<?php 

require_once(LIB_PATH.DS."config.php");
require_once(LIB_PATH.DS."database.php");

class Vote extends DatabaseObject{
	
	protected static $table_name = T_VOTES;
	protected static $col_id = C_VOTE_ID;
	protected static $col_user_id = C_VOTE_USER_ID;
	protected static $col_nom_id = C_VOTE_NOMINEE_ID;
	protected static $col_nom_pos = C_VOTE_NOMINEE_POSITION;

	// NOMINEE PROPERTIES
	public $id;
	public $user_id;
	public $nominee_id;
	public $nominee_position;
	
	public function create_or_update(){
		return isset($this->id) ? $this->update() : $this->create();
	}
	
	public function create(){
		global $db;
		$sql = "INSERT INTO " . self::$table_name . "(";
		$sql .= self::$col_user_id .", ";
		$sql .= self::$col_nom_id .", ";
		$sql .= self::$col_nom_pos;
		$sql .=") VALUES ('";
		$sql .= $db->escape_string($this->user_id) . "', '";
		$sql .= $db->escape_string($this->nominee_id) . "', '";
		$sql .= $db->escape_string($this->nominee_position) . "' ";
		$sql .=")";
		if($db->query($sql)){
			$this->id = $db->get_last_id();
			return true;
		}else{
			return false;	
		}
	}
	
	public function update(){
		global $db;
		$sql = "UPDATE " . self::$table_name . " SET ";
		$sql .= C_USER_ID . "='" . $db->escape_string($this->user_id) . "', ";
		$sql .= C_NOMINEE_ID . "='" . $db->escape_string($this->nominee_id) . "', ";
		$sql .= C_NOMINEE_POSITION . "='" . $db->escape_string($this->nominee_position) . "', ";
		$sql .="WHERE " . self::$col_id . "='" . $db->escape_string($this->id) . "' ";
		$db->query($sql);
		return ($db->get_affected_rows() == 1) ? true : false;
	}
	
	public function delete(){
		global $db;
		$sql = "DELETE FROM " . self::$table_name . " WHERE " . self::$col_id . "='" . $this->id . "' ";
		$db->query($sql);
		return ($db->get_affected_rows() == 1) ? true : false;
	}
	
	protected static function instantiate($record){
		$this_class = new self;
		$this_class->id 				= $record[C_VOTE_ID];
		$this_class->user_id 			= $record[C_USER_ID];
		$this_class->nominee_id 		= $record[C_NOMINEE_ID];
		$this_class->nominee_position 	= $record[C_NOMINEE_POSITION];
		return $this_class;
	}
	
	public static function delete_vote($user_id, $nominee_id, $nominee_pos){
		global $db;
		$sql = "DELETE FROM " . self::$table_name;
		$sql .= " WHERE " . self::$col_user_id . "='" . $user_id . "' ";
		$sql .= " AND " . self::$col_nom_id . "=" . $nominee_id;
		$sql .= " AND " . self::$col_nom_pos . "='" . $nominee_pos ."'";
		$db->query($sql);
		return ($db->get_affected_rows() == 1) ? true : false;
	}
	
}

?>