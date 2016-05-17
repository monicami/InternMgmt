<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert company page</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<a href="../jobs.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
</div>
<br>
<?php
//$cname = $type = $website = $address = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $job_id = test_input($_POST["job_id"]);
  $job_name = test_input($_POST["job_name"]);
  $comp_name = test_input($_POST["comp_name"]);
  $position = test_input($_POST["position"]);
  $responsibility = test_input($_POST["responsibility"]);
  $requirement = test_input($_POST["requirement"]);
  $salary = test_input($_POST["salary"]);
  $note = test_input($_POST["note"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
include 'job_insertRecord.php';
include 'job_insertDAO.php';
insert_DB($job_id,$job_name,$comp_name,$position,$responsibility,$requirement,$salary,$note);
?>

<div class="welinfo">
    <span><img src="../images/dp.png" /></span>
    <b>Operation successful</b>
</div>
<ul class="infolist">
    <li><span>The Job "<?php echo $job_name ?>" has been added!</span></li>

</ul>
</body>
</html>