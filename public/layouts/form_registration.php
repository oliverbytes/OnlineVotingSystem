
<?php
require_once("../../includes/initialize.php");
	
if($session->is_logged_in()){
	redirect_to("../index.php");
}

$message = "";

if(isset($_POST['submit'])){
	if( isset($_POST['password']) 		&& isset($_POST['first_name']) 	&&
		isset($_POST['middle_name']) 	&& isset($_POST['last_name']) 	&&
		isset($_POST['year_level']) 	&& isset($_POST['section']) 	&&
		isset($_POST['birth_year']) 	&& isset($_POST['birth_month']) &&
		isset($_POST['birth_day'])){
	
		$password 		= $_POST['password'];
		$first_name 	= $_POST['first_name'];
		$middle_name 	= $_POST['middle_name'];
		$last_name 		= $_POST['last_name'];
		$year_level 	= $_POST['year_level'];
		$section 		= $_POST['section'];
		$birth_year 	= $_POST['birth_year'];
		$birth_month 	= $_POST['birth_month'];
		$birth_day 		= $_POST['birth_day'];
		$level			= "student";
		
		$student_id = strtoupper($middle_name[0]) . strtoupper($first_name[0]) . 
			strtoupper($last_name[0]) . putZero($birth_month) . putZero($birth_day) . 
			substr($birth_year, -2);
	
		$birth_date = $birth_year . "-" . $birth_month . "-" . $birth_day;
		
		global $db;
		$new_student = new User();
		$new_student->id 			= $student_id;
		$new_student->password 		= $password;
		$new_student->first_name 	= $first_name;
		$new_student->middle_name 	= $middle_name;
		$new_student->last_name 	= $last_name;
		$new_student->year_level 	= $year_level;
		$new_student->section 		= $section;
		$new_student->birth_date 	= $birth_date;
		$new_student->level 		= $level;
		$new_student->create();
		
		$message = "Successfully Registered.";
		
	}else{
		$message = "Sorry all fields are required.";
	}
	$message = "";
}
// transfer to functions
function putZero($string){
	if(strlen($string) == 1){
		return $string = "0".$string;
	}else{
		return $string;
	}
}

?>

<?php echo $message; ?>
<link rel="stylesheet" href="../stylesheets/styles.css" media="screen" />
<div id="div_frm_register">
  <h1>Register</h1>
		<form id="frm_register" action="<?php echo strip_tags($_SERVER['PHP_SELF']); ?>" method="POST">	
		  <fieldset>
                <label>First Name</label>
                <input type="text" name="first_name" size="30" />

                <label>Middle Name</label>  
                <input type="text" name="middle_name" size="30" />

                <label>Last Name</label>
                <input type="text" name="last_name"  size="30" />
                
                <label>Password</label>
                <input type="password" name="password" size="30" />
                
                <label>Year Level</label>
              <p>
                <select name="year_level">
                  <option value="1st Year">1st Year</option>
                  <option value="2nd Year">2nd Year</option>
                  <option value="3rd Year">3rd Year</option>
                  <option value="4th Year">4th Year</option>
                </select>
              </p>
              
              <p>
				 <label>Section</label>
			  </p>
              
            <p>
              <select name="section">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
              </select>
            </p>
            
            <p>
              <label>Birth Date</label>
            </p>
            
            <p>	Year
                <select name="birth_year">
                	<option value="1992">1992</option>
                </select>
                Month
                <select name="birth_month">
                	<option value="10">10</option>
                </select>
                Day
                <select name="birth_day">
               	 	<option value="03">03</option>
                </select>
            </p>
            
            <p >
                <input type="submit" name="submit" value="Register" class="button"/>
            </p>		
              
		  </fieldset>				
		</form>	   
</div>
