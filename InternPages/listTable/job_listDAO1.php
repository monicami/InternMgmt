<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>List Data</title>

</head>
<body>

<table class="data-table">
    <thead>
    <tr>
    <th>Job ID</th>
    <th>Job Name</th>
    <th>Company Name</th>
    <th>Position</th>
	<th>Responsibility</th>
	<th>Requirements</th>
	<th>Salary</th>
	<th>Comments</th>
    </tr>
    </thead>
	<tbody>
	<tr>
<?php   
$conn=mysqli_connect("localhost","root","123456");   
if(!$conn) echo "Connection failed!";   
   
$sql = "SELECT job_ID, job_name, comp_name, position, responsibility, requirement, salary, note FROM imis.job";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	//output data of each row

	while($row = mysqli_fetch_assoc($result)) {		
	    
		echo "<tr>";
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
</table>
    	
</body>
</html>