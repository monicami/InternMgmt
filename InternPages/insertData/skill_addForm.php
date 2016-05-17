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
<div class="formtitle"><span>Add Skill information</span></div>

<form action="skill_insertController.php" method="post">
<ul class="forminfo">
<li><label>Skill ID: </label><input type="text" name="skill_ID" class="dfinput" /><i>4 digits start with 3</i></li>
<li><label>Student ID: </label><input type="text" name="student_ID" class="dfinput" /></li>
<li><label>Skill Name: </label><input type="text" name="skill_name" class="dfinput" /></li>
<li><label>Skill Type: </label><select name="skill_type" class="dfinput"/ >
	<option value="Technical">Technical</option>
    <option value="CMS">CMS</option>
	<option value="Operating System">Operating System</option>
	</select>
</li>
<li><label>Skill Level: </label><select name="skill_level" class="dfinput"/ >
	<option value="Not at all competent">Not at all competent</option>
    <option value="Little competent">Little competent</option>
	<option value="Moderately competent">Moderately competent</option>
	<option value="Extremely competent">Extremely competent</option>
	</select>
</li>
<br>

<br>
<li><label>&nbsp;</label><input name="" type="submit" class="btn" value="Submit"/></li>

<!--<input type="submit" value="Submit"> -->
</ul>
</div>
</body>
</html>