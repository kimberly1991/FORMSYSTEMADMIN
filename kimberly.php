<!DOCTYPE html>
<html>
<head>
	<title>BIODATA</title>
</head>
<style type="text/css">
	body {
		width: 800px;
	}
</style>
<body>
	<h1><center>BIODATA</center></h1>
<form method="post" action="form.php" enctype="multipart/form-data">
	<strong>Student Account</strong>
	 <table>
		<tr>
			<td>
				Name 
			</td>
			<td>
				<label>:</label>
				<input type="text" name="name" size="40" required>
			</td>
		</tr>
		<tr>
			<td>
				Present Address 
			</td>
			<td> 
				<label>:</label>
				<input type="text"  name="pre_address" size="40" required>
			</td>
		</tr>
		<tr>
			<td>
				Permanent Address  
			</td>
			<td> 
				<label>:</label>
				<input type="text" name="per_address" size="40" required>
			</td>
		</tr>
		<tr>
			<td>
				Date of Birth  
			</td>
			<td>
				<label>:</label>
				<input type="text" name="birth_date" size="40" required>
			</td>
			<td> </td>
			<td>
				Religion
			</td>
			<td>
				<label>:</label>
				<input type="text" name="religion"  required>
			</td>
		</tr>

		<tr>
			<td>
				Civil Status  
			</td>
			<td>
				<label>:</label>
				<input type="text" name="civil" size="40" required>
			</td>
			<td> </td>
			<td>
				Age
			</td>
			<td>
				<label>:</label>
				<input type="text" name="age"  required>
			</td>
		</tr>
		<tr>
			<td>
				Citizenship  
			</td>
			<td>
				<label>:</label>
				<input type="text" name="citizenship" size="40" required>
			</td>
			<td> </td>
			<td>
				Weight
			</td>
			<td>
				<label>:</label>
				<input type="text" name="weight"  required>
			</td>
		</tr>
		<tr>
			<td>
				Place of Birth  
			</td>
			<td>
				<label>:</label>
				<input type="text" name="birth_place" size="40" required>
			</td>
			<td> </td>
			<td>
				Height
			</td>
			<td>
				<label>:</label>
				<input type="text" name="height"  required>
			</td>
		</tr>

		<tr>
			<td>
				Name of Father 
			</td>
			<td> 
				<label>:</label>
				<input type="text" name="father" size="40" required>
			</td>
		</tr>
		<tr>
			<td>
				Name of Mother  
			</td>
			<td> 
				<label>:</label>
				<input type="text" name="mother" size="40" required>
			</td>
		</tr>
		<tr>
			<td>
				Address  
			</td>
			<td> 
				<label>:</label>
				<input type="text" name="address" size="40" required>
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td>
				Language of Dialect Spoken 
			</td>
			<td> 
				<label>:</label>
				<input type="text" name="dialect" size="40" required>
			</td>
		</tr>
		<tr>
			<td>
				Person to be notified in Case of Emergency
			</td>
			<td> 
				<label>:</label>
				<input type="text" name="notif" size="40" required>
			</td>
		</tr>
	</table>
<br>
	<strong><u>EDUCATIONAL BACKROUND:</u></strong>
	<table>
		<tr>
			<tr>
			<td>
				Elementary  
			</td>
			<td>
				<label>:</label>
				<input type="text" name="elem" size="40" required>
			</td>
			<td> </td>
			<td>
				Year Graduated
			</td>
			<td>
				<label>:</label>
				<input type="text" name="one"  required>
			</td>
		</tr>
		<tr>
			<tr>
			<td>
				High School  
			</td>
			<td>
				<label>:</label>
				<input type="text" name="HS" size="40" required>
			</td>
			<td> </td>
			<td>
				Year Graduated
			</td>
			<td>
				<label>:</label>
				<input type="text" name="two"  required>
			</td>
		</tr>
		<tr>
			<tr>
			<td>
				College  
			</td>
			<td>
				<label>:</label>
				<input type="text" name="college" size="40" required>
			</td>
			<td> </td>
			<td>
				Year Graduated
			</td>
			<td>
				<label>:</label>
				<input type="text" name="three"  required>
			</td>
		</tr>
		<tr>
			<td>
				Course 
			</td>
			<td>
				<label>:  </label>
				<input type="text" name="course" size="40" required>
			</td>
			<tr>
			<td>
				Special Skills  
			</td>
			<td>
				<label>:</label>
				<input type="text" name="skill" size="40" required>
			</td>
			<tr>
			</tr>
			<tr>
				<td></td>
				<td>
					<button  value="Save Record" name="savebtn" style="width: 325px; margin-top: 10px; height: 30px;">Save Record</button>
				</td>
			</tr>
	</table>
	

	</form>
</body>
</html>


<?php
	

if (isset($_POST['savebtn']))
 {
	$name = $_POST['name'];
	$preaddress = $_POST['pre_address'];
	$peraddress = $_POST['per_address'];
	$birthdate = $_POST['birth_date'];
	$civil = $_POST['civil'];
	$citizenship = $_POST['citizenship'];
	$birthplace = $_POST['birth_place'];
	$father = $_POST['father'];
	$mother = $_POST['mother'];
	$address = $_POST['address'];
	$dialect = $_POST['dialect'];
	$notif = $_POST['notif'];
	$elem = $_POST['elem'];
	$HS = $_POST['HS'];
	$college = $_POST['college'];
	$religion = $_POST['religion'];
	$weight = $_POST['weight'];
	$height = $_POST['height'];
	$age = $_POST['age'];
	$one = $_POST['one'];
	$two = $_POST['two'];
	$three = $_POST['three'];
	$course = $_POST['course'];
	$skill = $_POST['skill'];

	echo "<br>";
	echo "<br>";


	echo "<strong>BIODATA</strong>";
echo "<br>";
	echo "<table>";

	echo "<tr>";
	echo "<td>Name</td>";
	echo "<td>:</td>";
	echo "<td>$name</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Present Address</td>";
	echo "<td>:</td>";
	echo "<td>$preaddress</td>";
	echo "</tr>";

 	echo "<tr>";
 	echo "<td>Permanent Address</td>";
	echo "<td>:</td>";
	echo "<td>$peraddress</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Date of Birth</td>";
	echo "<td>:</td>";
	echo "<td>$birthdate</td>";

	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	
	echo "<td>Religion</td>";
	echo "<td>:</td>";
	echo "<td>$religion</td>";
	echo "</tr>";
	

	echo "<tr>";
	echo "<td>Civil Status</td>";
	echo "<td>:</td>";
	echo "<td>$civil</td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td>Age</td>";
	echo "<td>:</td>";
	echo "<td>$age</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Citizenship</td>";
	echo "<td>:</td>";
	echo "<td>$citizenship</td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td>Weight</td>";
	echo "<td>:</td>";
	echo "<td>$weight</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Place of Birth</td>";
	echo "<td>:</td>";
	echo "<td>$birthplace</td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td>Height</td>";
	echo "<td>:</td>";
	echo "<td>$height</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Name of Father</td>";
	echo "<td>:</td>";
	echo "<td>$father</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Name of Mother</td>";
	echo "<td>:</td>";
	echo "<td>$mother</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Address</td>";
	echo "<td>:</td>";
	echo "<td>$address</td>";
	echo "</tr>";
	echo "</table>";

	echo "<table>";

	echo "<tr>";
	echo "<td>Language of Dialect Spoken</td>";
	echo "<td>:</td>";
	echo "<td>$dialect</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Person to be notified in Case of Emergency</td>";
	echo "<td>:</td>";
	echo "<td>$notif</td>";
	echo "</tr>";
	echo "</table>";

	echo "<br>";
	echo "<strong><u>EDUCATIONAL BACKGROUND:</u></strong>";

	 echo "<table>";

	echo "<tr>";
	echo "<td>Elementary</td>";
	echo "<td>:</td>";
	echo "<td>$elem</td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td>Year Graduated</td>";
	echo "<td>:</td>";
	echo "<td>$one</td>";
	echo "</tr>";


	echo "<tr>";
	echo "<td>Hish School</td>";
	echo "<td>:</td>";
	echo "<td>$HS</td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td>Year Graduated</td>";
	echo "<td>:</td>";
	echo "<td>$two</td>";
	echo "</tr>";


	echo "<tr>";
	echo "<td>College</td>";
	echo "<td>:</td>";
	echo "<td>$college</td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td>Year Graduated</td>";
	echo "<td>:</td>";
	echo "<td>$three</td>";
	echo "</tr>";

	echo "<tr>";
 	echo "<td>Course</td>";
	echo "<td>:</td>";
	echo "<td>$course</td>";
	echo "</tr>";

	echo "<tr>";
 	echo "<td>Special Skills</td>";
	echo "<td>:</td>";
	echo "<td>$skill</td>";
	echo "</tr>";

	echo "</table>"; 
}

	
	
?>