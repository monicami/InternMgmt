<html>
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
echo "ID: " .$_POST["student_ID"]. "<br>";
echo "Last Name: " .$_POST["stu_LName"]. "<br>";
echo "Gender: " .$_POST["gender"]. "<br>";
echo "Year: " .$_POST["year"]. "<br>";
echo "Semester: " .$_POST["semenster"]. "<br>";
include 'insertDAO.php';
insert_DB($id,$fname,$mname,$lname,$email,$tel,$gender,$status,$semester,$year,$intstatus);


?>
</body>
</html