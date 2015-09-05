<?php 
$message = "";
global $session;
if($session->is_logged_in()){
	$message = "logged in";
}else{
	$message = "not logged in";
}
$users = User::get_all(); 
if(count($users) <= 0){ $message ="No Users"; }
?>

<link rel="stylesheet" href="../stylesheets/styles.css" media="screen" />
<div id="divTable" align="center">
<?php echo output_message($message); ?>
<table border="1">
  <tr>
  	<th>Action</th>
    <th>ID</th>
    <th>Name</th>
    <th>Password</th>
    <th>Year Level</th>
    <th>Section</th>
    <th>Birth Date</th>
    <th>Status</th>
    <th>Level</th>
  </tr>
  <?php foreach($users as $user) : ?>
    <tr>
      <td><a href="../../includes/delete_user.php?user_id=<?php echo $user->id; ?>">Delete</a></td>
      <td><?php echo $user->id; ?></td>
      <td><?php echo $user->full_name(); ?></td>
      <td><?php echo $user->password; ?></td>
      <td><?php echo $user->year_level; ?></td>
      <td><?php echo $user->section; ?></td>
      <td><?php echo $user->birth_date; ?></td>
      <td><?php echo $user->status; ?></td>
      <td><?php echo $user->level; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>