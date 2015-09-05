<?php 

require_once(LIB_PATH.DS."database.php");

class DatabaseObject{
	
	public static function get_all(){
		global $db;
		$sql = "SELECT * FROM " . static::$table_name;
		$result = static::get_by_sql($sql);
		return $result;
	}
	
	public static function get_by_id($passed_id=0){
		global $db;
		$sql = "SELECT * FROM " . static::$table_name . " WHERE " . static::$col_id . "=" . $passed_id;
		$result_array = static::get_by_sql($sql);
		// if no results : get the first row
		return !empty($result_array) ? count($result_array) : false;
	}
	
	public static function get_by_sql($sql=""){
		global $db;
		$result = $db->query($sql);
		$object_array = array();
		while($row = $db->fetch_array($result)){
			$object_array[] = static::instantiate($row);
		}
		return $object_array;
	}
	
	public static function who_called_me(){
		return get_called_class(); // get the class who called/used this method
	}
	
	public static function prev_voted($passed_user_id="", $passed_nominee_id=0){
		global $db;
		$sql = "SELECT COUNT (" . static::$col_id . ") FROM " . static::$table_name;
		$sql .= " WHERE " . static::$col_user_id . "='" . $passed_user_id . "'";
		$sql .= " AND " . static::$col_nom_id . "=". $passed_nominee_id;
		$result_array = static::get_by_sql($sql);
		// if no results : get the first row
		return !empty($result_array) ? array_shift($result_array) : false;
	}
	
}

?>

