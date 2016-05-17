<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Intership page</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<a href="../intern.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
</div>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $student_ID = test_input($_POST["student_ID"]);
  $job_name = test_input($_POST["job_name"]);
  $comp_name = test_input($_POST["comp_name"]);
  $contact_LN = test_input($_POST["contact_LN"]);
  $contact_FN = test_input($_POST["contact_FN"]);
  $telephone = test_input($_POST["telephone"]);
  $email = test_input($_POST["email"]);
  $note = test_input($_POST["note"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
include 'intern_insertRecord.php';
include 'intern_insertDAO.php';
insert_DB($student_ID,$job_name,$comp_name,$contact_LN,$contact_FN,$telephone,$email,$note);
insert_DB1($student_ID);
?>
<br>
<div class="welinfo">
    <span><img src="../images/dp.png" /></span>
    <b>Operation successful</b>
</div>
<ul class="infolist">
    <li><span>The Job "<?php echo $job_name ?>" has been assigned to student "<?php echo $student_ID ?>" !</span></li>
    </ul>

</ul>
</body>
</html