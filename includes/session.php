<?php 

require_once("database.php");

class Session{
	
	private $logged_in;
	public $user_id;
	
	function __construct(){
		session_start();
		$this->check_login();
		
		if($this->logged_in){
			
		}else{
			
		}
	}
	
	private function check_login(){
		if(isset($_SESSION[C_USER_ID])){
			$this->user_id = $_SESSION[C_USER_ID];
			$this->logged_in = true;
		}else{
			unset($this->user_id);
			$this->logged_in = false;
		}
	}
	
	public function is_logged_in(){
		return $this->logged_in;	
	}
	
	public function login($user){
		if($user){
			$this->user_id = $_SESSION[C_USER_ID] = $user->id;
		}
	}
	
	public function logout($user){
		unset($_SESSION[C_USER_ID]);
		unset($this->user_id);
		$this->logged_in = false;
	}
}

$session = new Session();

?>