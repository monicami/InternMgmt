<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>List Data</title>

</head>
<body>

<div class="data-action">
	<table class="action-button-table">
		<td class="action-button">
			<td class="action-button-pic"><img src="/images/t01.png" /></td>
			<td class="action-button-text"><a href="/insertData/job_addForm.php">Add Record</a></td>
		</td>
		<td class="action-button">
			<td class="action-button-pic"><img src="/images/t02.png" /></td>
			<td class="action-button-text"><a href="/updateData/job_updateForm.php">Modify</a></td>
		</td>
		<td class="action-button">
			<td class="action-button-pic"><img src="/images/t03.png" /></td>
			<td class="action-button-text"><a href="/deleteData/job_delForm.php">Delete</a></td>
		</td>
	</table>
</div>


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