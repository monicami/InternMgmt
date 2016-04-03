<html>
<body>
<!--<p>Student information records</p>-->

<table>
    <thead>
    <tr>
	<th><input name="" type="checkbox" value="" checked="checked"/></th>
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
   
$sql = "SELECT student_ID, stu_FName, stu_LName, email, telephone, gender, status, semenster, year, intern_status FROM imis.student";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	//output data of each row
$a = "checkbox";
$b="";	
	while($row = mysqli_fetch_assoc($result)) {		
	    
		echo "<tr>";
		echo "<td> <input type=$a> </td>";
	    foreach($row as $x => $x_value) {			
           echo "<td>". $x_value . "</td>";
       }
	    echo "</tr>";
	}	
} else {
	echo "no result";
}
mysqli_close($conn);
?> 
    </tr>
    </tbody>
<table>
    	
</body>
</html>