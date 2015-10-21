<?php 
$firstname = $_POST['first_name'];
$middlename = $_POST['middle_name'];
$lastname = $_POST['last_name'];
$gender = $_POST['gender'];
?>

<!doctype html>

<html>
<head>
	<title>Student Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">	
</head>

<body class="body">
<div class=" table-align">
	<table>
		<div class = "student-reg">
			Student Registration Form Step 3 of 6
		</div>
		
		<form method="POST" action="Step4.php">
			<tr>
				<td>First Name </td> 
				<td>Middle Name </td>
				<td>Last Name </td>
			</tr>
			<tr>
				<td> 
					<input type = "text" name = "first_name" value ="<?php echo $firstname; ?>">
				</td>
				<td> 
					<input type = "text" name = "middle_name" value="<?php echo $middlename; ?>">
				</td>
				<td>
					<input type = "text" name = "last_name" value="<?php echo $lastname; ?>">
				</td>
			</tr>
			<tr>
				<td>
					Gender
				</td>
				<?php if ($gender == 'Male') { ?>
					<td>
						<input type= "radio" name = "gender" value = "Male" checked>Male
					</td>
					<td>
						<input type= "radio" name = "gender" value = "Female">Female
					</td>
				<?php } else { ?>
					<td>
						<input type= "radio" name = "gender" value = "Male">Male
					</td>
					<td>
						<input type= "radio" name = "gender" value = "Female" checked>Female
					</td>
				<?php } ?>
			</tr>
			<tr>
			<td>Month
				<select name="Month">
					<option value="January">January</option>		
					<option value="February">February</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>
				</select>
			</td>
			<td>Day
				<select name="Day">
					<?php 
						for ($i = 1; $i <= 31; $i++) {
							echo "<option value = '".$i."'>".$i."</option>";
						} 
					 ?>
				</select>
			</td>
			<td>Year
				<select name="Year">
					<?php 
						for ($month = 1990; $month <= 2015; $month++) {
							echo "<option value ='".$month."'>".$month."</option>";
						}
					 ?>
				</select>
			</td>
			</tr>
			<tr>
				<td colspan="3" align="right">
					<a href = "Step2.php"><input type="button" value="Back"></a>
					<input type = "Submit" value = "Go to Step 4">
			</tr>
		</form>
	</table>
</div>
</body>
</html>