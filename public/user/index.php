<?php 

require_once("../../includes/functions.php");
require_once("../../includes/session.php");

if(!$session->is_logged_in()){
	redirect_to("../layouts/form_login.php");
}

if(isset($_POST['submit'])){
	$session->logout($session->student_id);	
	redirect_to("../index.php");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="../stylesheets/styles.css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Page</title>
</head>

<?php echo "Logged in as : " . $_SESSION[C_USER_ID]; ?>

 <form action="<?php echo strip_tags($_SERVER['PHP_SELF']); ?>" method="post">
	<input type="submit" name="submit" value="Logout" class="button"/>
 </form>

<body>
</body>
</html>