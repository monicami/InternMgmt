<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>List Data</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="formtitle"><span>Internship information table</span></div>
<table class="tablelist">
    <thead>
    <tr>
    <th>Student ID</th>
    <th>Job Name</th>
	<th>Company Name</th>
    <th>Contact Person - Last Name</th>
	<th>Contact Person - First Name</th>	
	<th>Telephone</th>
	<th>Email</th>
	<th>Comments</th>
    </tr>
    </thead>
	<tbody>
	<tr>
<?php   
$conn=mysqli_connect("localhost","root","123456");   
if(!$conn) echo "Connection failed!";   
   
$sql = "SELECT student_ID, job_name, comp_name, contact_LN, contact_FN, telephone, email, note FROM imis.intern";
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
<table>
    	
</body>
</html>