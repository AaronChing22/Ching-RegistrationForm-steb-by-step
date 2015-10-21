<?php 
$firstname = $_POST['first_name'];
$middlename = $_POST['middle_name'];
$lastname = $_POST['last_name'];

?>

<html>
<head>
	<title>Student Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">	
</head>

<body class="body">
<div class=" table-align">
	<table>
		<div class = "student-reg">
			Student Registration Form Step 2 of 6
		</div>
		
		<form method ="POST" action="Step3.php">
			<tr>
				<td>First Name </td> 
				<td>Middle Name </td>
				<td>Last Name </td>
			</tr>
			<tr>
				<td> 
					<input type = "text" name = "first_name" value = "<?php echo $firstname; ?>">
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
				<td>
					<input type= "radio" name = "gender" value = "Male">Male
				</td>
				<td>
					<input type= "radio" name = "gender" value = "Female">Female
				</td>
			</tr>
			<tr>
				<td colspan="3" align="right">
				<a href = "Step1.php"><input type="button" value="Back"></a>
				<input type = "Submit" value = "Go to Step 3">
			</tr>
		</form>
	</table>
</div>
</body>
</html>