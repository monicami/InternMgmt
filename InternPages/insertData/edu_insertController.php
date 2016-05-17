<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert company page</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<a href="../listTable/more_listMore.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
</div>
<br><br>

<?php
//$cname = $type = $website = $address = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $edu_ID = test_input($_POST["edu_ID"]);
  $student_ID = test_input($_POST["student_ID"]);
  $edu_type = test_input($_POST["edu_type"]);
  $major = test_input($_POST["major"]);
  $gpa = test_input($_POST["gpa"]);
  $uni_name = test_input($_POST["uni_name"]);
  $uni_location = test_input($_POST["uni_location"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
include 'edu_insertRecord.php';
include 'edu_insertDAO.php';
insert_DB($edu_ID,$edu_type,$major,$gpa,$uni_name,$uni_location);
insert_eduRecord($edu_ID,$student_ID);
?>
<div class="welinfo">
    <span><img src="../images/dp.png" /></span>
    <b>Operation successful</b>
</div>
<ul class="infolist">
    <li><span>The Education "<?php echo $edu_ID ?>" has been added!</span></li>
    </ul>
<br>
<br>
<br><br>
<!--<li><span><a href="../listTable/more_listMore.php" class="ibtn">Back to More</a></span></li>-->
</ul>

</body>
</html