<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert Data</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<table class="tablelist">
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
<table>
    	
</body>
</html>