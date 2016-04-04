<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert company page</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
//$cname = $type = $website = $address = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $cname = test_input($_POST["comp_name"]);
  $type = test_input($_POST["comp_type"]);
  $website = test_input($_POST["websit"]);
  $address = test_input($_POST["address"]);
  $city = test_input($_POST["city"]);
  $country = test_input($_POST["country"]);
  $postalcode = test_input($_POST["postalcode"]);
  $note = test_input($_POST["note"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
include 'comp_insertRecord.php';
include 'comp_insertDAO.php';
insert_DB($cname,$type,$website,$address,$city,$country,$postalcode,$note);
?>

<br>
<br>
<br><br>
<div class="listtitle"><a href="../listTable/comp_listDAO.php">Return to home page</a></div>
</body>
</html