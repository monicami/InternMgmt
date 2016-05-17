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
		<a href="/deleteData/stu_delForm.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
	</h1>
	
	<div id="id01" style="overflow-x:auto; overflow-y:auto" class="table-data">
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  $id = $_POST["id"];
		}

		//echo "ID: " .$_POST["id"]. "<br>";

		include 'stu_delRecord.php';

		include 'stu_delDAO.php';
		del_Data($id);

		?>
		<br><br>
		<div style="font-size:16px">The record  <?php echo $id ?>  has been deleted</div>
	</div>

	<footer id="foot01"></footer>
</div>

<script src="/scripts/script.js"></script>
<script src="/scripts/stu_layout.js"></script>

<script>
</script>

</body>
</html>