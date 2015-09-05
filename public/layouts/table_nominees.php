<?php 
	$message = "";
	global $session;
	if($session->is_logged_in()){
		$message = "logged in";
	}else{
		$message = "not logged in";
	}
 ?>
 <?php echo $message; ?>
<link rel="stylesheet" href="../stylesheets/styles.css" media="screen" />
<div id="divTable" align="center">
<!--PRESIDENT-->
<?php 
$nominees = Nominee::get_all_by_position("President"); 
if(count($nominees) <= 0){ $message ="No Nominees"; }
?>
<?php echo output_message($message); ?>
<table border="1">
  <tr>
 	<th>Action</th>
    <th>Name</th>
    <th>Position</th>
    <th>Year Level</th>
    <th>Section</th>
    <th>Votes</th>
  </tr>
  <?php foreach($nominees as $nominee) : ?>
    <tr>
    	<td><a href="../includes/add_vote.php?nominee_id=<?php echo $nominee->id; ?>&position=<?php echo $nominee->position; ?>">+1</a></td>
      	<td><?php echo $nominee->name; ?></td>
      	<td><?php echo $nominee->position; ?></td>
      	<td><?php echo $nominee->year_level; ?></td>
      	<td><?php echo $nominee->section; ?></td>
      	<td><?php echo $nominee->votes; ?></td>
    </tr>
  <?php endforeach; ?>
</table>
</div>