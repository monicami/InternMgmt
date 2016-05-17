<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Data</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<a href="../intern.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$student_ID1 = $_POST["student_ID1"];
} 
include 'intern_currentRecord.php';
?>
<div class="formbody">
<div class="welinfo">
    <span><img src="../images/d02.png" /></span>
    <b>Update internship information</b>
</div>
<br>
<form action="intern_updateController.php" method="post">
<ul class="forminfo">
<li><label>Previous student: </label><input type="text" name="student_ID1" value= <?php echo $student_ID1 ?> class="dfinput" /><i>The ID of previous student</i></li>
<li><label>Student ID: </label>
<?php 
	//URL
    $url = "localhost";
    //username
    $user = "root";
    //password
    $password = "123456";
    //connection
    $con = mysqli_connect($url,$user,$password);
    if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
    }
    //encoding
    mysqli_set_charset($con,"utf8");
    //connect to db
    mysqli_select_db($con,"imis");
	$sql = "select student_ID from student where intern_status=\"Available\"";
	$result = mysqli_query($con, $sql);
	echo "<select name=\"student_ID\" class=\"dfinput\">";
	while($row = mysqli_fetch_assoc($result))
	{		
          echo "<option value=\"" . $row["student_ID"] ."\">" . $row['student_ID'] ."</option>";    
	}
	echo "</select>";
	mysqli_close($con);
?><i>The current available students</i></li>
</li>
<li><label>Job Name: </label> 
    <?php 
	//URL
    $url = "localhost";
    //username
    $user = "root";
    //password
    $password = "123456";
    //connection
    $con = mysqli_connect($url,$user,$password);
    if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
    }
    //encoding
    mysqli_set_charset($con,"utf8");
    //connect to db
    mysqli_select_db($con,"imis");
	$sql = "select job_name from job_group";
	$result = mysqli_query($con, $sql);
	echo "<select name=\"job_name\" class=\"dfinput\">";
	while($row = mysqli_fetch_assoc($result))
	{		
          echo "<option value=\"" . $row["job_name"] ."\">" . $row['job_name'] ."</option>";    
	}
	echo "</select>";
	mysqli_close($con);
	?><i>The current available jobs</i></li>
	
<li><label>Company Name: </label>
 <?php 
	//URL
    $url = "localhost";
    //username
    $user = "root";
    //password
    $password = "123456";
    //connection
    $con = mysqli_connect($url,$user,$password);
    if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
    }
    //encoding
    mysqli_set_charset($con,"utf8");
    //connect to db
    mysqli_select_db($con,"imis");
	$sql = "select comp_name from company";
	$result = mysqli_query($con, $sql);
	echo "<select name=\"comp_name\" class=\"dfinput\">";
	while($row = mysqli_fetch_assoc($result))
	{		
          echo "<option value=\"" . $row["comp_name"] ."\">" . $row['comp_name'] ."</option>";    
	}
	echo "</select>";
	mysqli_close($con);
	?><i>The companies are offering jobs</i></li>
<li><label>Last Name: </label><input type="text" name="contact_LN" class="dfinput" /><i>The last name of contact person</i></li>
<li><label>First Name: </label><input type="text" name="contact_FN" class="dfinput" /><i>The first name of contact person</i></li>
<li><label>Telephone: </label><input type="text" name="telephone" class="dfinput" /></li>
<li><label>Email:</label><input type="text" name="email" class="dfinput" /></li>
<li><label>Description:</label><input type="text" name="note" class="dfinput" /></li>
<br>

<br>
<li><label>&nbsp;</label><input name="" type="submit" class="btn" value="Submit"/></li>
</ul>
</div>
</body>
</html>