<!DOCTYPE html>
<html>

<head>
  <title>Students - Modify Record</title>
  <link href="/css/site.css" rel="stylesheet">
</head>

<body>

<nav id="nav01"></nav>

<div id="main">
	<h1>Students - Modify Record
		<a href="/updateData/stu_updateForm.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
	</h1>
	
	<div>
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$id = $_POST["id"];
		} 
		include 'stu_currentRecord.php';
		?>
		<div class="formbody">
		<div class="formtitle"><span>Update student record</span></div>

		<p>The ID of the student to be updated is <font><b> <?php echo $id ?> </b></font></p>

		<form action="stu_updateController.php" method="post">
			
			<!--
			<ul class="forminfo">
			<li><label>Student ID: </label><input type="text" name="student_ID" value=<?php echo $id ?> class="dfinput" /></li>
			<li><label>First Name: </label> <input type="text" name="stu_FName" class="dfinput" /></li>
			<li><label>Last Name: </label><input type="text" name="stu_LName" class="dfinput" /></li>
			<li><label>Email: </label><input type="text" name="email" class="dfinput" /></li>
			<li><label>Telephone: </label><input type="text" name="telephone" class="dfinput" /></li>
			<li><label>Gender:</label></li>
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="male">Male<br>
			<li><label>Status:</label> </li>
			<input type="radio" name="status" value="International">International
			<input type="radio" name="status" value="Resident">Permanent Resident><br>
			<li><label>Semester:</label></li>
			<input type="radio" name="semenster" value="Fall">Fall
			<input type="radio" name="semenster" value="Winter">Winter<br>
			<li><label>Year:</label></li>
			<input type="radio" name="year" value="2015">2015
			<input type="radio" name="year" value="2016">2016<br>
			<li>Internship Status:</li>
			<input type="radio" name="intern_status" value="Hired">Hired
			<input type="radio" name="intern_status" value="Available">Available<br>
			<br>
			<li><label>&nbsp;</label><input name="" type="submit" class="btn" value="Submit"/></li>
			</ul>
			-->
			
			
			<ul class="data-input-list">
			<li class="data-input-li"><label class="data-input-name">Student ID: </label><input type="text" name="student_ID" value=<?php echo $id ?> class="dfinput" /></li>
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
		
	</div>

	<footer id="foot01"></footer>
</div>

<script src="/scripts/script.js"></script>
<script src="/scripts/stu_layout.js"></script>

<script>
</script>

</body>
</html>