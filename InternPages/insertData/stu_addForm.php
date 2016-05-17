<!DOCTYPE html>
<html>
<head>
	<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
	<title>Students - Add Record</title>
	<link href="/css/site.css" rel="stylesheet" />
</head>

<body>
<nav id="nav01"></nav>

<div id="main">
	<h1>Students - Add Record
		<a href="/students.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
	</h1>
	<div class="formbody">
			
		<div class="formtitle"><span>Insert data into Student table</span></div>
		<form action="stu_insertController.php" method="post">
		
		<!--
		<ul class="forminfo">
		
		<table class="data-input-table">
			<tr class="data-input-row"><li><label>Student ID: </label><input type="text" name="student_ID" class="dfinput" /></li></tr>
			<tr class="data-input-row"><li><label>First Name: </label> <input type="text" name="stu_FName" class="dfinput" /></li></tr>
			<tr class="data-input-row"><li><label>Mid Name: </label><input type="text" name="stu_MName" class="dfinput" /></li></tr>
			<tr class="data-input-row"><li><label>Last Name: </label><input type="text" name="stu_LName" class="dfinput" /></li></tr>
			<tr class="data-input-row"><li><label>Email: </label><input type="text" name="email" class="dfinput" /></li></tr>
			<tr class="data-input-row"><li><label>Telephone: </label><input type="text" name="telephone" class="dfinput" /></li></tr>
			<tr class="data-input-row">
			<li><label>Gender:</label></li>
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="male">Male<br>
			</tr>
			
			<tr class="data-input-row">
			<li><label>Status:</label></li>
			<input type="radio" name="status" value="International">International
			<input type="radio" name="status" value="Resident">Permanent Resident><br>
			</tr>
			
			<tr class="data-input-row">
			<li><label>Semester:</label></li>
			<input type="radio" name="semenster" value="Fall">Fall
			<input type="radio" name="semenster" value="Winter">Winter<br>
			</tr>
			
			<tr class="data-input-row">
			<li><label>Year:</label></li>
			<input type="radio" name="year" value="2015">2015
			<input type="radio" name="year" value="2016">2016<br>
			</tr>
			
			<tr class="data-input-row">
			<li>Internship Status:</li>
			<input type="radio" name="intern_status" value="Hired">Hired
			<input type="radio" name="intern_status" value="Available">Available<br>
			</tr>
			
		</table>
		
		<br>
		<li><label>&nbsp;</label><input name="" type="submit" class="btn" value="Submit"/></li>

		</ul>
		-->
		
		
			<ul class="data-input-list">
			<li class="data-input-li"><label class="data-input-name">Student ID: </label><input type="text" name="student_ID" class="dfinput" /></li>
			<li class="data-input-li"><label class="data-input-name">First Name: </label><input type="text" name="stu_FName" class="dfinput" /></li>
			<li class="data-input-li"><label class="data-input-name">Mid Name: </label><input type="text" name="stu_MName" class="dfinput" /></li>
			<li class="data-input-li"><label class="data-input-name">Last Name: </label><input type="text" name="stu_LName" class="dfinput" /></li>
			<li class="data-input-li"><label class="data-input-name">Email: </label><input type="text" name="email" class="dfinput" /></li>
			<li class="data-input-li"><label class="data-input-name">Telephone: </label><input type="text" name="telephone" class="dfinput" /></li>
			
			<li class="data-input-li"><label class="data-input-name">Gender:</label></li>
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="male">Male<br>
			
			<li class="data-input-li"><label class="data-input-name">Status:</label> </li>
			<input type="radio" name="status" value="International">International
			<input type="radio" name="status" value="Resident">Permanent Resident<br>
			
			<li class="data-input-li"><label class="data-input-name">Semester:</label></li>
			<input type="radio" name="semenster" value="Fall">Fall
			<input type="radio" name="semenster" value="Winter">Winter<br>
			
			<li class="data-input-li"><label class="data-input-name">Year:</label></li>
			<input type="radio" name="year" value="2015">2015
			<input type="radio" name="year" value="2016">2016<br>
			
			<li class="data-input-li"><label class="data-input-name">Internship Status:</label></li>
			<input type="radio" name="intern_status" value="Hired">Hired
			<input type="radio" name="intern_status" value="Available">Available<br>
			
			<br>
			<!--<li><label>&nbsp;</label><input name="" type="submit" class="btn" value="Submit"/></li>-->
			
			<input type="submit" class="data-submit-btn" value="Submit"/>

			</ul>
		
		</form>
	</div>
	<footer id="foot01"></footer>
</div>


<script src="/scripts/script.js"></script>
<script src="/scripts/stu_layout.js"></script>

</body>
</html>