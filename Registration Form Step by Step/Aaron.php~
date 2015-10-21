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
			Student Registration Form
		</div>
		
		<form method="POST" action="AaronAuthentication.php">
			<tr>
				<td>First Name </td> 
				<td>Middle Name </td>
				<td>Last Name </td>
			</tr>
			<tr>
				<td> 
					<input type = "text" name = "first_name">
				</td>
				<td> 
					<input type = "text" name = "middle_name">
				</td>
				<td>
					<input type = "text" name = "last_name">
				</td>
			</tr>

			<tr>
				<td>
					Gender
				</td>
				<td>
					<input type= "radio" name = "gender" value = "Male">Male
				</td>
				<td>
					<input type= "radio" name = "gender" value = "Female">Female
				</td>
			</tr>
			<tr>
				<td colspan="3">Birthday</td>
			</tr>

			<tr>
			<td>Month
				<select name="Month">
					<option>January<option>		
					<option>February</option>
					<option>March</option>
					<option>April</option>
					<option>May</option>
					<option>June</option>
					<option>July</option>
					<option>August</option>
					<option>September</option>
					<option>October</option>
					<option>November</option>
					<option>December</option>
				</select>
			</td>
			<td>Day
				<select name="Day">
					<?php 
						for ($i = 1; $i <= 31; $i++) {
							echo "<option>".$i."</option>";
						} 
					 ?>
				</select>
			</td>
			<td>Year
				<select name="Year">
					<?php 
						for ($month = 1990; $month <= 2015; $month++) {
							echo "<option>".$month."</option>";
						}
					 ?>
				</select>
			</td>
			</tr>
			<tr>
				<td>Program</td>
				<td colspan="2">
					<select name="program">
						<option>BS Social Works </option>
						<option>BS Accountancy</option>
						<option>BS Accounting Technology</option>
						<option>BS Inforamtion System</option>
						<option>AB Broadcasting</option>
						<option>Office Management</option>
						<option>Mass Communication Tech.</option>	
						<option>Associate In Comp. Tech.</option>
						<option>Nursing Assistant</option>
						<option>International Cookery</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="3">Student Type</td>
			</tr>
			<tr>
				<td colspan="3">
				<input type="radio" name = "student_type" value = "Full Scholar"> Full Scholar <br>
				<input type="radio" name = "student_type" value = "Partial Scholar"> Partial Scholar 		<br>
				<input type="radio" name = "student_type" value = "Payee"> Payee
				</td>
			</tr>

			<tr>
				<td colspan="3">Address</td>
			</tr>
			
			<tr>
				<td colspan="3">
				<textarea class = "textarea" name = "address"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan = "3">
					<input type="submit" value = "Submit Registration">
				</td>
			</tr>
		</form>
	</table>
</div>
</body>
</html>
