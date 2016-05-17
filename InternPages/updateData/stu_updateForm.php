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
		<a href="/students.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
	</h1>
	
	<div id="id01" style="overflow-x:auto; overflow-y:auto" class="table-data">
		<p>The current data shown as below</p>
		<?php 
		include 'stu_listDAO.php'; 
		//printTable();
		?>


		<p>Please type the ID you want to modify</p>
		<form action="stu_updateForm1.php" method="post">
		<p>Student ID: <input type="text" name="id"></p>
		<input type="submit" class="data-submit-btn" value="Modify">
		</form>
	</div>

	<footer id="foot01"></footer>
</div>

<script src="/scripts/script.js"></script>
<script src="/scripts/stu_layout.js"></script>

<script>
</script>

</body>
</html>