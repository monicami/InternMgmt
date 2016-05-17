<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--<p>Student information records</p>-->
<div class="formtitle"><span>Deleted record</span></div>
<table class="tablelist" />
    <thead>
    <tr>
    <th>Student ID</th>
    <th>Job Name</th>
    <th>Company Name</th>
    <th>Contact Last Name</th>
	<th>Contact First Name</th>
	<th>Telephone</th>
	<th>Email</th>
	<th>Description</th>
    </tr>
    </thead>
	<tbody>
	<tr>
<?php   
$conn=mysqli_connect("localhost","root","123456");   
if(!$conn) echo "Connection failed!";   
 //connect to db
mysqli_select_db($conn,"imis");   
$sql = "SELECT student_ID, job_name, comp_name, contact_LN, contact_FN, telephone, email, note FROM intern where student_ID=$student_ID";
$result = mysqli_query($conn, $sql);
	//output data of each row
//echo "<tr>";
//echo "<td> ". $cname . " </td>";
$row = mysqli_fetch_assoc($result);
foreach($row as $x => $x_value) {			
    echo "<td> ". $x_value . " </td>";
 }
//echo "</tr>";	

mysqli_close($conn);
?> 
</tr>
</tbody>
</table>
    	
</body>
</html>