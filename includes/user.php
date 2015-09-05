<?php 

require_once(LIB_PATH.DS."config.php");
require_once(LIB_PATH.DS."database.php");

class User extends DatabaseObject{
	
	// TABLE tblusers PROPERTIES
	protected static $table_name = T_USERS;
	protected static $col_id = C_USER_ID;

	// USER PROPERTIES
	public $id;
	public $password;
	public $first_name;
	public $last_name;
	public $middle_name;
	public $year_level;
	public $section;
	public $birth_date;
	public $status;
	public $level;
	
	public function create_or_update(){
		return isset($this->id) ? $this->update() : $this->create();
	}
	
	public function create(){
		global $db;
		$sql = "INSERT INTO " . self::$table_name . " (";
		$sql .= C_USER_ID .", ";
		$sql .= C_USER_PASSWORD .", ";
		$sql .= C_USER_FIRST_NAME .", ";
		$sql .= C_USER_LAST_NAME .", ";
		$sql .= C_USER_MIDDLE_NAME .", ";
		$sql .= C_USER_YEAR_LEVEL .", ";
		$sql .= C_USER_SECTION .", ";
		$sql .= C_USER_BIRTH_DATE .", ";
		$sql .= C_USER_LEVEL;
		$sql .=") VALUES ('";
		$sql .= $db->escape_string($this->id) . "', '";
		$sql .= $db->escape_string($this->password) . "', '";
		$sql .= $db->escape_string($this->first_name) . "', '";
		$sql .= $db->escape_string($this->last_name) . "', '";
		$sql .= $db->escape_string($this->middle_name) . "', '";
		$sql .= $db->escape_string($this->year_level) . "', '";
		$sql .= $db->escape_string($this->section) . "', '";
		$sql .= $db->escape_string($this->birth_date) . "', '";
		$sql .= $db->escape_string($this->level) . "' ";
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
		$sql .= C_USER_ID . "='" . $db->escape_string($this->id) . "', ";
		$sql .= C_USER_PASSWORD . "='" . $db->escape_string($this->password) . "', ";
		$sql .= C_USER_FIRST_NAME . "='" . $db->escape_string($this->first_name) . "', ";
		$sql .= C_USER_LAST_NAME . "='" . $db->escape_string($this->last_name) . "', ";
		$sql .= C_USER_MIDDLE_NAME . "='" . $db->escape_string($this->middle_name) . "', ";
		$sql .= C_USER_YEAR_LEVEL . "='" . $db->escape_string($this->year_level) . "', ";
		$sql .= C_USER_SECTION . "='" . $db->escape_string($this->section) . "', ";
		$sql .= C_USER_BIRTH_DATE . "='" . $db->escape_string($this->birth_date) . "', ";
		$sql .= C_USER_STATUS . "='" . $db->escape_string($this->status) . "' ";
		$sql .= C_USER_LEVEL . "='" . $db->escape_string($this->level) . "' ";
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
	
	public static function authenticate($user_id="", $password=""){
		global $db;
		$user_id = $db->escape_string($user_id);
		$password 	= $db->escape_string($password);
		
		$sql = "SELECT * FROM " . self::$table_name;
		$sql .= " WHERE " . C_USER_ID . " = '" . $user_id . "'";
		$sql .= " AND " . C_USER_PASSWORD . " = '" . $password . "'";
		$sql .= " LIMIT 1";
		
		$result_array = self::get_by_sql($sql);
		return !empty($result_array) ? array_shift($result_array) : false;
	}
	
	public function full_name(){
		$full_name = "";
		if(isset($this->first_name) && isset($this->last_name)){
			$full_name = $this->first_name . " " . $this->last_name;
		}
		return $full_name;
	}
	
	protected static function instantiate($record){
		$this_class = new self;
		$this_class->id 			= $record[C_USER_ID];
		$this_class->password 		= $record[C_USER_PASSWORD];
		$this_class->first_name 	= $record[C_USER_FIRST_NAME];
		$this_class->last_name 		= $record[C_USER_LAST_NAME];
		$this_class->middle_name 	= $record[C_USER_MIDDLE_NAME];
		$this_class->year_level 	= $record[C_USER_YEAR_LEVEL];
		$this_class->section 		= $record[C_USER_SECTION];
		$this_class->birth_date 	= $record[C_USER_BIRTH_DATE];
		$this_class->status 		= $record[C_USER_STATUS];
		$this_class->level 			= $record[C_USER_LEVEL];
		return $this_class;
	}
	
	public static function get_all_by_level($passed_level="student"){
		global $db;
		$sql = "SELECT * FROM " . static::$table_name . " WHERE Level = '" . $passed_level . "' ";
		$result = static::get_by_sql($sql);
		return $result;
	}
	
	public static function get_by_strid($passed_id=""){
		global $db;
		$sql = "SELECT * FROM " . static::$table_name . " WHERE " . static::$col_id . " = '" . $passed_id . "'";
		$result_array = static::get_by_sql($sql);
		return !empty($result_array) ? array_shift($result_array) : false;
	}
}

?>