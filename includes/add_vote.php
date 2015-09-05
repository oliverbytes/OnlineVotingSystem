<?php require_once("initialize.php"); ?>
<?php 
global $session;
if($session->is_logged_in()){
	if(isset($_GET['nominee_id']) && isset($_GET['position'])){
		$nominee_id = (int)$_GET['nominee_id'];
		$nominee_position = $_GET['position'];
		if(previously_voted($session->user_id, $nominee_id, $nominee_position) == true){ //1 = true
			Nominee::un_vote($nominee_id);
			Vote::delete_vote($session->user_id, $nominee_id, $nominee_position);
		}else{
			if(can_vote($session->user_id, $nominee_position) == true){ // 0 = true
				Nominee::add_vote($nominee_id);
				$vote = new Vote();
				$vote->user_id 			= $session->user_id;
				$vote->nominee_id 		= $nominee_id;
				$vote->nominee_position = $nominee_position;
				$vote->create();
			}
		}
	}
	redirect_to("../public/index.php?prev=" . previously_voted($session->user_id, $nominee_id, $nominee_position) . "&can_vote=" . can_vote($session->user_id, $nominee_position));
}else{
	redirect_to("../public/index.php");
}

function previously_voted($user_id, $nominee_id, $nominee_pos){
	global $db;
	$sql = "SELECT COUNT(". C_VOTE_ID .") FROM "  .T_VOTES;
	$sql .=" WHERE ". C_VOTE_USER_ID . "='" . $user_id . "'";
	$sql .= " AND " . C_VOTE_NOMINEE_ID . "=". $nominee_id;
	$sql .= " AND " . C_VOTE_NOMINEE_POSITION . "='" . $nominee_pos . "'";
	$db->query($sql);
	return (mysql_result($db->query($sql), 0) == 1) ? true : false;
}

function can_vote($user_id, $nominee_pos){
	global $db;
	$sql = "SELECT COUNT(". C_VOTE_USER_ID .") FROM "  .T_VOTES;
	$sql .=" WHERE ". C_VOTE_USER_ID . "='" . $user_id . "'";
	$sql .= " AND " . C_VOTE_NOMINEE_POSITION . "='" . $nominee_pos . "'";
	$db->query($sql);
	return (mysql_result($db->query($sql), 0) == 0) ? true : false;
}

?>