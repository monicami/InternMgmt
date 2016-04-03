<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--<p>Student information records</p>-->
<div class="formtitle"><span>Current student record</span></div>
<table class="tablelist">
  <thead>
    <tr>
    <th>Student ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
	<th>Telephone</th>
	<th>Gender</th>
	<th>Status</th>
	<th>Semester</th>
	<th>Year</th>
	<th>Internship Status</th>
    </tr>
  </thead>
  <tbody>
	<tr>
<?php   
$conn=mysqli_connect("localhost","root","123456");   
if(!$conn) echo "Connection failed!";   
   
$sql = "SELECT student_ID, stu_FName, stu_LName, email, telephone, gender, status, semenster, year, intern_status FROM imis.student where student_ID=$id";
$result = mysqli_query($conn, $sql);
	//output data of each row
echo "<tr>";
$row = mysqli_fetch_assoc($result);
foreach($row as $x => $x_value) {			
    echo "<td> ". $x_value . " </td>";
 }
 echo "</tr>";	

mysqli_close($conn);

?> 
    </tr>
  </tbody>
</table>
<br>
<br>   	
</body>
</html>