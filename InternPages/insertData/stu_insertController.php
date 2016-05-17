<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Students - Add Record</title>
<!--<link href="../css/style.css" rel="stylesheet" type="text/css" />-->
</head>
<body>
<?php
$name = $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = test_input($_POST["student_ID"]);
  $fname = test_input($_POST["stu_FName"]);
  $mname = test_input($_POST["stu_MName"]);
  $lname = test_input($_POST["stu_LName"]);
  $email = test_input($_POST["email"]);
  $tel = test_input($_POST["telephone"]);
  $gender = test_input($_POST["gender"]);
  $status = test_input($_POST["status"]);
  $semester = test_input($_POST["semenster"]);
  $year = test_input($_POST["year"]);
  $intstatus = test_input($_POST["intern_status"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
include 'stu_insertRecord.php';
include 'stu_insertDAO.php';
insert_DB($id,$fname,$mname,$lname,$email,$tel,$gender,$status,$semester,$year,$intstatus);


?>
</body>
</html