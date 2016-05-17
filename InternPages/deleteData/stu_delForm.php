<!DOCTYPE html>
<html>

<head>
  <title>Students - Delete Record</title>
  <link href="/css/site.css" rel="stylesheet">
</head>

<body>

<nav id="nav01"></nav>

<div id="main">
	<h1>Students - Delete Record
		<a href="/students.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
	</h1>
	
	<div id="id01" style="overflow-x:auto; overflow-y:auto" class="table-data">
		<p>The current data shown as bellow</p>

		<?php 
		include 'stu_listDAO.php'; 
		?>

		<p>Please type the student ID you want to delete</p>
		<form action="stu_delController.php" method="post">
		<p><label>Student ID:  </label><input type="text" name="id"></p>
		<p><input type="submit" class="data-submit-btn" value="Delete"></p>

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