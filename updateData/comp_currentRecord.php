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
 //connect to db
mysqli_select_db($conn,"imis");   
$sql = "SELECT comp_name, comp_type, websit, address, city, country, postalcode, note FROM company where comp_name=\"$cname\"";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
foreach($row as $x => $x_value) {			
    echo "<td> ". $x_value . " </td>";
 }

mysqli_close($conn);
?>
    </tr>
  </tbody>
</table>
<br>
<br>   	
</body>
</html>