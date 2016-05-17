<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Data</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<a href="../listTable/more_listMore.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
</div>
<br><br>
<div class="formbody">
<div class="welinfo">
    <span><img src="../images/d02.png" /></span>
    <b>Update Certification information</b>
</div>
<br>
<form action="cer_updateController.php" method="post">
<ul class="forminfo">
<li><label>Certification ID: </label>
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
	$sql = "select cer_ID from certification";
	$result = mysqli_query($con, $sql);
	echo "<select name=\"cer_ID\" class=\"dfinput\">";
	while($row = mysqli_fetch_assoc($result))
	{		
          echo "<option value=\"" . $row["cer_ID"] ."\">" . $row['cer_ID'] ."</option>";    
	}
	echo "</select>";
	mysqli_close($con);
?><i>The current available certifications</i></li>
<li><label>Student ID: </label><input type="text" name="student_ID" class="dfinput" /></li>
<li><label>Certification title: </label><input type="text" name="cer_titles" class="dfinput" /><i>The name of certification</i></li>
<li><label>Certification Body: </label><input type="text" name="cer_body" class="dfinput" /><i>The institution of the certification</i></li>
<br>

<br>
<li><label>&nbsp;</label><input name="" type="submit" class="btn" value="Submit"/></li>
</ul>
</div>
</body>
</html>