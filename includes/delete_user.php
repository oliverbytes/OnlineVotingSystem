<?php require_once("initialize.php"); ?>
<?php 
global $session;
if($session->is_logged_in()){
	if(isset($_GET['user_id'])){
		$user_id = $_GET['user_id'];
		$user = User::get_by_strid($user_id);
		$user->delete();
		redirect_to("../public/admin/index.php?userid=" . $user->id);
	}
	
}else{
	redirect_to("../public/admin/index.php?message=NOT LOGGED");
}
?>