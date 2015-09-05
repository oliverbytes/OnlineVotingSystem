<?php 
require_once(LIB_PATH.DS."config.php");
require_once(LIB_PATH.DS."database.php");

class Nominee extends DatabaseObject{
	
	// TABLE tblnominees PROPERTIES
	protected static $table_name = T_NOMINEES;
	protected static $col_id = C_NOMINEE_ID;

	// NOMINEE PROPERTIES
	public $id;
	public $name;
	public $position;
	public $year_level;
	public $section;
	public $votes;
	
	public function create_or_update(){
		return isset($this->id) ? $this->update() : $this->create();
	}
	
	public function create(){
		global $db;
		$sql = "INSERT INTO " . self::$table_name . "(";
		$sql .= C_NOMINEE_NAME .", ";
		$sql .= C_NOMINEE_POSITION .", ";
		$sql .= C_NOMINEE_YEAR_LEVEL .", ";
		$sql .= C_NOMINEE_SECTION .", ";
		$sql .= C_NOMINEE_VOTES;
		$sql .=") VALUES ('";
		$sql .= $db->escape_string($this->name) . "', '";
		$sql .= $db->escape_string($this->position) . "', '";
		$sql .= $db->escape_string($this->year_level) . "', '";
		$sql .= $db->escape_string($this->section) . "', '";
		$sql .= $db->escape_string($this->votes) . "' ";
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
		$sql .= C_NOMINEE_NAME . "='" . $db->escape_string($this->name) . "', ";
		$sql .= C_NOMINEE_POSITION . "='" . $db->escape_string($this->position) . "', ";
		$sql .= C_NOMINEE_YEAR_LEVEL . "='" . $db->escape_string($this->year_level) . "', ";
		$sql .= C_NOMINEE_SECTION . "='" . $db->escape_string($this->section) . "', ";
		$sql .= C_NOMINEE_VOTES . "='" . $db->escape_string($this->votes) . "' ";
		$sql .="WHERE " . self::$col_id . "='" . $db->escape_string($this->id) . "' ";
		$db->query($sql);
		return ($db->get_affected_rows() == 1) ? true : false;
	}
	
	public function delete(){
		global $db;
		$sql = "DELETE FROM " . self::$table_name." WHERE " . self::$col_id . "='" . $this->id . "' ";
		$db->query($sql);
		return ($db->get_affected_rows() == 1) ? true : false;
	}
	
	public function temp_add_vote(){
		global $db;
		$sql = "UPDATE " . self::$table_name . " SET "; 
		$sql .= C_NOMINEE_VOTES . "=" .C_NOMINEE_VOTES. "+1 ";
		$sql .="WHERE " . self::$col_id . "=" . $this->id;
		$db->query($sql);
		return ($db->get_affected_rows() == 1) ? true : false;
	}
	
	public function temp_un_vote(){
		global $db;
		$sql = "UPDATE " . self::$table_name . " SET ";
		$sql .= C_NOMINEE_VOTES . "=" . C_NOMINEE_VOTES . "-1 ";
		$sql .= "WHERE " . C_NOMINEE_VOTES . " >0 AND " . self::$col_id . "=" . $this->id;
		$db->query($sql);
		return ($db->get_affected_rows() == 1) ? true : false;
	}
	
	public static function reset_all_votes($votes=0){
		global $db;
		$sql = "UPDATE " . self::$table_name . " SET " . C_NOMINEE_VOTES . "=" . $votes;
		$db->query($sql);
		return ($db->get_affected_rows() == 1) ? true : false;
	}
	
	protected static function instantiate($record){
		$this_class = new self;
		$this_class->id 		= $record[C_NOMINEE_ID];
		$this_class->name 		= $record[C_NOMINEE_NAME];
		$this_class->position 	= $record[C_NOMINEE_POSITION];
		$this_class->year_level = $record[C_NOMINEE_YEAR_LEVEL];
		$this_class->section 	= $record[C_NOMINEE_SECTION];
		$this_class->votes 		= $record[C_NOMINEE_VOTES];
		return $this_class;
	}
	
	public static function add_vote($id){
		global $db;
		$sql = "UPDATE " . self::$table_name . " SET "; 
		$sql .= C_NOMINEE_VOTES . "=" . C_NOMINEE_VOTES . "+1 ";
		$sql .="WHERE " . self::$col_id . "=" . $id;
		$db->query($sql);
		return ($db->get_affected_rows() == 1) ? true : false;
	}
	
	public static function un_vote($id){
		global $db;
		$sql = "UPDATE " . self::$table_name . " SET ";
		$sql .= C_NOMINEE_VOTES . "=" . C_NOMINEE_VOTES . "-1 ";
		$sql .= "WHERE " . C_NOMINEE_VOTES . " >0 AND " . self::$col_id . "=" . $id;
		$db->query($sql);
		return ($db->get_affected_rows() == 1) ? true : false;
	}
	
	public static function get_all_by_position($passed_position="President"){
		global $db;
		$sql = "SELECT * FROM " . static::$table_name . " WHERE Position = '" . $passed_position . "' ";
		$result = static::get_by_sql($sql);
		return $result;
	}
}

?>