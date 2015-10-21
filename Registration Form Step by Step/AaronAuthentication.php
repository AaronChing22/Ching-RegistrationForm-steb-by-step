<?php 

$firstname = $_POST['first_name'];
$middlename = $_POST['middle_name'];
$lastname = $_POST['last_name'];
$gender = $_POST['gender'];
$month = $_POST['Month'];
$day = $_POST['Day'];
$year = $_POST['Year'];
$program = $_POST['program'];
$studentType = $_POST['student_type'];
$address = $_POST['address'];

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<div>
		<h2>Successfully Saved Registration!</h2></td>
		First Name:&nbsp;&nbsp;<strong><?php echo $firstname; ?></strong> <br/>
		Middle Name:&nbsp;&nbsp;<strong><?php echo $middlename; ?></strong> <br/>
 		Last Name:&nbsp;&nbsp;<strong><?php echo $lastname; ?></strong> <br/>
 		Gender:&nbsp;&nbsp;<strong><?php echo $gender; ?></strong> <br/>
		Birtdate:
				<strong>
					<?php echo $month; ?>
					<?php echo $day; ?>,
					<?php echo $year; ?>
				</strong> <br/>
 		Program offered:&nbsp;&nbsp;<strong><?php echo $program; ?></strong> <br/>
 		Student Type/Status:&nbsp;&nbsp;<strong><?php echo $studentType; ?></strong> <br/>
 		Address:&nbsp;&nbsp;<pre><?php echo $address; ?></pre>
 	</div>
 </body>
 </html>