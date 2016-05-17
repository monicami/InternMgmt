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
  $skill_ID = test_input($_POST["skill_ID"]);
  $student_ID = test_input($_POST["student_ID"]);
  $skill_name = test_input($_POST["skill_name"]);
  $skill_type = test_input($_POST["skill_type"]);
  $skill_level = test_input($_POST["skill_level"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
include 'skill_insertRecord.php';
include 'skill_insertDAO.php';
insert_DB($skill_ID,$skill_name,$skill_type);
insert_skillRecord($skill_ID,$student_ID,$skill_level);
?>
<div class="welinfo">
    <span><img src="../images/dp.png" /></span>
    <b>Operation successful</b>
</div>
<ul class="infolist">
    <li><span>The Skill "<?php echo $skill_ID ?>" has been added!</span></li>
    </ul>
<br>
<br>
<br><br>
<li><span><a href="../listTable/more_listMore.php" class="ibtn">Back to More</a></span></li>
</ul>

</body>
</html