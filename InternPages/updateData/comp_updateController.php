<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modify</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<a href="../company.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
</div>
<br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $cname = test_input($_POST["cname"]);
  $ctype = test_input($_POST["ctype"]);
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

include 'comp_currentRecord.php';
include 'comp_updateRecord.php';
include 'comp_updateDAO.php';
update_Data($cname,$ctype,$website,$address,$city,$country,$postalcode,$note);
?>
<br><br>
<div class="welinfo">
    <span><img src="../images/dp.png" /></span>
    <b>Operation successful</b>
</div>
<ul class="infolist">
    <li><span>The company "<?php echo $cname ?>" has been updated !</span></li>

</ul>
</body>
</html