<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert Data</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<a href="../intern.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
</div>
<div class="welinfo">
    <span><img src="../images/ico06.png" /></span>
    <b>The current data shown as bellow</b>
</div>

<?php 
include 'intern_listDAO.php'; 
?>
<br>
<div class="formtitle"><span>Please type the ID you want to delete</span></div>
<form action="intern_delController.php" method="post">
<ul class="forminfo">
<li><label>ID:</label><input type="text" name="student_ID" class="dfinput"></li>
<li><label>&nbsp;</label><input name="" type="submit" class="btn" value="Submit"/></li>
<!--<input type="submit" value="Submit"></p>-->

</form>
</body>
</html>