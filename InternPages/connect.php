<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb1";

$table_cus = "Customers";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";



$result = $conn->query("SELECT CompanyName, City, Country FROM $table_cus");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Name":"'  . $rs["CompanyName"] . '",';
    $outp .= '"City":"'   . $rs["City"]        . '",';
    $outp .= '"Country":"'. $rs["Country"]     . '"}'; 
}
$outp ='{"records":['.$outp.']}';

$conn->close();

echo($outp);
?>