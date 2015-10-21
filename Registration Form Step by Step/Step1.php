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
			Student Registration Form Step 1 of 6
		</div>
		
		<form method="POST" action="Step2.php">
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
				<td colspan="3" align="right">
					<input type = "Submit" value = "Go to Step 2">
			</tr>
		</form>
	</table>
</div>
</body>
</html>