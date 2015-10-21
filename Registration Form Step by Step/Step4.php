<?php 
$firstname = $_POST['first_name'];
$middlename = $_POST['middle_name'];
$lastname = $_POST['last_name'];
$gender = $_POST['gender'];
$month = $_POST['Month'];
$day = $_POST['Day'];
$year = $_POST['Year'];

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
			Student Registration Form Step 4 of 6
		</div>
		
		<form method="POST" action="Step5.php">
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
					<option value="<?php echo $month; ?>"><?php echo $month; ?><option>
				</select>
			</td>
			<td>Day
				<select name="Day">
					<option value="<?php echo $day; ?>"><?php echo $day; ?><option>
				</select>
			</td>
			<td>Year
				<select name="Year">
					<option value="<?php echo $year; ?>"><?php echo $year; ?><option>
				</select>
			</td>
			</tr>
			<tr>
				<td>Program</td>
				<td colspan="2">
					<select name="program">
						<option value="BS Social Works">BS Social Works </option>
						<option value="BS Accountancy">BS Accountancy</option>
						<option value="BS Accounting Technology">BS Accounting Technology</option>
						<option value="BS Inforamtion System">BS Inforamtion System</option>
						<option value="AB Broadcasting">AB Broadcasting</option>
						<option value=">Office Management">Office Management</option>
						<option value="Mass Communication Technology">Mass Communication Technology</option>	
						<option value="Associate In Computer Technology">Associate In Computer Technology</option>
						<option value="Nursing Assistant">Nursing Assistant</option>
						<option value="International Cookery">International Cookery</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="right">
					<a href = "Step3.php"><input type="button" value="Back"></a>
					<input type = "Submit" value = "Go to Step 5">
			</tr>
		</form>
	</table>
</div>
</body>
</html>