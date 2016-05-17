<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<a href="../listTable/more_listMore.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
</div>
<br><br>
<div class="formbody">
<div class="formtitle"><span>Add Education information</span></div>

<form action="edu_insertController.php" method="post">
<ul class="forminfo">
<li><label>Education ID: </label><input type="text" name="edu_ID" class="dfinput" /><i>4 digits start with 5</i></li>
<li><label>Student ID: </label><input type="text" name="student_ID" class="dfinput" /></li>
<li><label>Education Type: </label><select name="edu_type" class="dfinput"/ >
	<option value="Undergraduate">Undergraduate</option>
    <option value="Graduate">Graduate</option>
	</select>
</li>
<li><label>Major: </label><input type="text" name="major" class="dfinput" /></li>
<li><label>GPA: </label><input type="text" name="gpa" class="dfinput" /></li>
<li><label>Universiy Name: </label><input type="text" name="uni_name" class="dfinput" /></li>
<li><label>Location:</label><input type="text" name="uni_location" class="dfinput" /><i>The location of Universiy</i></li>
<br>

<br>
<li><label>&nbsp;</label><input name="" type="submit" class="btn" value="Submit"/></li>

<!--<input type="submit" value="Submit"> -->
</ul>
</div>
</body>
</html>