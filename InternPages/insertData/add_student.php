<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert Data</title>
<link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="main">
<a href="homea.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
</div>
<div class="formbody">
    
<div class="formtitle"><span>Add new Student Account</span></div>
<form action="../insertData/add_stuController.php" method="post">
<ul class="forminfo">
<li><label>User Name:</label><input type="text" name="user_name" class="dfinput" /></li>
<li><label>Password: </label><input type="text" name="passwd" value="000000" class="dfinput" /><i>The Default Password For Every Student User is 000000</i></li>
<li><label>Student ID: </label><input type="text" name="user_ID" class="dfinput" /></li>
<br>

<li><label>&nbsp;</label><input name="" type="submit" class="btn" value="Submit"/></li>

<!--<input type="submit" value="Submit"> -->

</ul>
</div>
	</form>
	
	</body>
</html>