<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modify</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<a href="../listTable/more_listMore.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
</div>
<br><br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $cer_ID = test_input($_POST["cer_ID"]);
  $student_ID = test_input($_POST["student_ID"]);
  $cer_titles = test_input($_POST["cer_titles"]);
  $cer_body = test_input($_POST["cer_body"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//include 'comp_currentRecord.php';
include 'cer_updateRecord.php';
include 'cer_updateDAO.php';
update_Data($cer_ID,$cer_titles,$cer_body);
update_record($cer_ID,$student_ID);
?>
<br><br>
<div class="welinfo">
    <span><img src="../images/dp.png" /></span>
    <b>Operation successful</b>
</div>
<ul class="infolist">
    <li><span>The Certification "<?php echo $cer_ID ?>" has been updated !</span></li>
    </ul>
<br>
<br>
<br><br>
</ul>
</body>
</html