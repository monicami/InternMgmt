<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert work experience page</title>
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
  $exp_ID = test_input($_POST["exp_ID"]);
  $student_ID = test_input($_POST["student_ID"]);
  $position = test_input($_POST["position"]);
  $company_name = test_input($_POST["company_name"]);
  $company_location = test_input($_POST["company_location"]);
  $start_date = test_input($_POST["start_date"]);
  $end_date = test_input($_POST["end_date"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
include 'work_insertRecord.php';
//include 'work_insertDAO.php';
//insert_DB($exp_ID,$student_ID,$position,$company_name,$company_location,$start_date,$end_date);
//insert_skillRecord($skill_ID,$student_ID,$skill_level);
?>
<div class="welinfo">
    <span><img src="../images/dp.png" /></span>
    <b>Operation successful</b>
</div>
<ul class="infolist">
    <li><span>The work experience "<?php echo $exp_ID ?>" has been added!</span></li>
    </ul>
<br>
<br>
<br><br>
<li><span><a href="../listTable/more_listMore.php" class="ibtn">Back to More</a></span></li>
</ul>

</body>
</html