<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<a href="../intern.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
</div>
<br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $student_ID = $_POST["student_ID"];
}

include 'intern_delRecord.php';
include 'intern_delDAO.php';
del_Data($student_ID);
del_status($student_ID);
?>

<br><br>
<div class="welinfo">
    <span><img src="../images/dp.png" /></span>
    <b>Operation successful</b>
</div>
<ul class="infolist">
    <li><span>The internship of student "<?php echo $student_ID ?>" has been deleted !</span></li>
</ul>
</body>
</html