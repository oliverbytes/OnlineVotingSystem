<?php 

require_once("../../includes/initialize.php");
$message = "";
if($session->is_logged_in()){
	redirect_to("../index.php");
}

if(isset($_POST['submit'])){
	$user_id = trim($_POST['user_id']);
	$password = trim($_POST['password']);
	$found_user = User::authenticate($user_id, $password);
	if($found_user){
		if($found_user->status == "confirmed"){
			$session->login($found_user);
			redirect_to("../index.php");
		}else{
			$message = "Sorry your account is not yet confirmed by the admin.";	
		}
	}else{
		$message = "User ID or Password Incorrect";	
	}
}else{
	$user_id = "";
	$password = "";	
	$message = "Didn't Submitted";	
}

?>

<link rel="stylesheet" href="../stylesheets/styles.css" media="screen" />
<div id="div_frm_login">
<?php echo output_message($message); ?>
  <form action="<?php echo strip_tags($_SERVER['PHP_SELF']); ?>" method="post">	
  	<table>
    	<tr>
            <td>Student ID: </td>
            <td>
                <input type="text" name="user_id" maxlength="30" value="<?php echo htmlentities($user_id); ?>" />
            </td>
        </tr>
        <tr>
        	<td>Password:</td>
            <td>
            <input type="password" name="password" maxlength="30" value="<?php echo htmlentities($password); ?>" />
            </td>
        </tr>
        <tr>
            <td colspan="2">
            	<input type="submit" name="submit" value="Login" class="button"/>
            </td>
       </tr>
    </table>
  </form>	
</div>

<?php if(isset($database)) { $database->close_connection(); } ?>