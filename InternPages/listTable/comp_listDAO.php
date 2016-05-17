<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>List Data</title>
<!--<link href="../css/style.css" rel="stylesheet" type="text/css" />-->
</head>
<body>
<!--
<div>
<img src="../images/t01.png" /><a href="/insertData/comp_addForm.htm">Add Record</a>
<img src="../images/t02.png" /><a href="/updateData/comp_updateForm.php">Modify</a>
<img src="../images/t03.png" /><a href="/deleteData/comp_delForm.php">Delete</a>
</div>
-->

<div class="data-action">
	<table class="action-button-table">
		<td class="action-button">
			<td class="action-button-pic"><img src="/images/t01.png" /></td>
			<td class="action-button-text"><a href="/insertData/comp_addForm.htm">Add Record</a></td>
		</td>
		<td class="action-button">
			<td class="action-button-pic"><img src="/images/t02.png" /></td>
			<td class="action-button-text"><a href="/updateData/comp_updateForm.php">Modify</a></td>
		</td>
		<td class="action-button">
			<td class="action-button-pic"><img src="/images/t03.png" /></td>
			<td class="action-button-text"><a href="/deleteData/comp_delForm.php">Delete</a></td>
		</td>
	</table>
</div>


<table class="data-table">
    <thead>
    <tr>
    <th>Company Name</th>
    <th>Type</th>
    <th>Website</th>
    <th>Address</th>
	<th>City</th>
	<th>Country</th>
	<th>Postal Code</th>
	<th>Description</th>
    </tr>
    </thead>
	<tbody>
	<tr>
<?php   
$conn=mysqli_connect("localhost","root","123456");   
if(!$conn) echo "Connection failed!";   
   
$sql = "SELECT comp_name, comp_type, websit, address, city, country, postalcode, note FROM imis.company";
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