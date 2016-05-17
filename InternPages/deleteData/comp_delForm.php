<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert Data</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<a href="../company.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
</div>
<div class="formtitle"><span>Company table</span></div>
<div class="welinfo">
    <span><img src="../images/ico06.png" /></span>
    <b>The current data shown as bellow</b>
</div>

<?php 
include 'comp_listDAO.php'; 
?>
<br>
<div class="formtitle"><span>Please type the company name you want to delete</span></div>
<form action="comp_delController.php" method="post">
<ul class="forminfo">
<li><label>Company name:</label><input type="text" name="cname" class="dfinput"></li>
<li><label>&nbsp;</label><input name="" type="submit" class="btn" value="Submit"/></li>
<!--<input type="submit" value="Submit"></p>-->

</form>

</body>
</html>