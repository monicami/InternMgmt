<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert Data</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="formtitle"><span>The current data shown as bellow</span></div>
<?php 
include 'comp_listDAO.php'; 
//printTable();
?>

<div class="formtitle"><span>Please type the company name you want to modify</span></div>
<form action="comp_updateForm1.php" method="post">
<ul class="forminfo">
<li><label>Company name:</label><input type="text" name="cname" class="dfinput"></li>
<li><label>&nbsp;</label><input name="" type="submit" class="btn" value="Submit"/></li>
<!--<input type="submit" value="Submit"></p>-->

</form>

</body>
</html>