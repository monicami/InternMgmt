<html>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = test_input($_POST["student_ID"]);
  $fname = test_input($_POST["stu_FName"]);
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

include 'stu_currentRecord.php';
include 'stu_updateRecord.php';
include 'stu_updateDAO.php';
update_Data($id,$fname,$lname,$email,$tel,$gender,$status,$semester,$year,$intstatus);
?>
<br><br>
<p>The student with ID:  <?php echo $id ?> has been updated</p>
</body>
</html