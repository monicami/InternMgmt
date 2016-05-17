<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert Data</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<a href="../jobs.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
</div>
<div class="welinfo">
    <span><img src="../images/ico06.png" /></span>
    <b>The current data shown as bellow</b>
</div>
<?php 
include 'job_listDAO.php'; 
//printTable();
?>

<div class="formtitle"><span>Please type the job ID you want to modify</span></div>
<form action="job_updateForm1.php" method="post">
<ul class="forminfo">
<li><label>Job ID:</label><input type="text" name="job_id" class="dfinput"></li>
<li><label>&nbsp;</label><input name="" type="submit" class="btn" value="Submit"/></li>
<!--<input type="submit" value="Submit"></p>-->

</form>

</body>
</html>