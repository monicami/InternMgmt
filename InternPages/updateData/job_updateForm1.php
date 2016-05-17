<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modify</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<a href="../jobs.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$job_id = $_POST["job_id"];
} 
include 'job_currentRecord.php';
?>
<div class="formbody">
<div class="welinfo">
    <span><img src="../images/d02.png" /></span>
    <b>Update Job information</b>
</div>
<br>

<form action="job_updateController.php" method="post">
<ul class="forminfo">
<!--ID: <input type="text" name="id" value=<?php echo $id ?> ><br>-->
<li><label>Job_ID: </label><input type="text" name="job_id" value=<?php echo $job_id ?> class="dfinput" /></li>
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
	echo "</li>";
	mysqli_close($con);
	?>
	<!--<option value="Android Developer">Android Developer</option>
    <option value="C# Developer">C# Developer</option>
    <option value="DB manager">DB Manager</option>
    <option value="Java developer">Java Developer</option>
    <option value="MAC developer">MAC Developer</option>
	<option value="Network">Network</option>
	<option value="PHP developer">PHP Developer</option>
	<option value="Software testing">Software tester</option>-->
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
	echo "</li>";
	mysqli_close($con);
	?>
<li><label>Position: </label><input type="text" name="position" class="dfinput" /></li>
<li><label>Responsibility: </label><input type="text" name="responsibility" class="dfinput" /></li>
<li><label>Requirements: </label><input type="text" name="requirement" class="dfinput" /></li>
<li><label>Salary:</label><input type="text" name="salary" class="dfinput" /></li>
<li><label>Description:</label><input type="text" name="note" class="dfinput" /></li>
<br>

<br>
<li><label>&nbsp;</label><input name="" type="submit" class="btn" value="Submit"/></li>

<!--<input type="submit" value="Submit"> -->

</ul>
</div>
</body>
</html>