<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<a href="../listTable/more_listMore.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
</div>
<br><br>
<div class="formbody">
<div class="formtitle"><span>Add work experience</span></div>
<form action="work_insertController.php" method="post">
<ul class="forminfo">
<li><label>Experience ID: </label><input type="text" name="exp_ID" class="dfinput" /><i>4 digits start with 4</i></li>
<li><label>Student ID: </label><input type="text" name="student_ID" class="dfinput" /></li>
<li><label>Position: </label><input type="text" name="position" class="dfinput" /></li>
<li><label>Company Name: </label><input type="text" name="company_name" class="dfinput" /></li>
<li><label>Location: </label><input type="text" name="company_location" class="dfinput" /></li>
<li><label>Start Date: </label><input type="date" name="start_date" class="dfinput" /><i>The date format should be YYYY-MM-DD</i></li>
<li><label>End Date: </label><input type="date" name="end_date" class="dfinput" /><i>The date format should be YYYY-MM-DD</i></li>
<br>
<br>
<li><label>&nbsp;</label><input name="" type="submit" class="btn" value="Submit"/></li>

<!--<input type="submit" value="Submit"> -->
</ul>
</div>
</body>
</html>