<!DOCTYPE html>
<html>

<head>
  <title>Students - Add Record</title>
  <link href="/css/site.css" rel="stylesheet">
</head>

<body>

<nav id="nav01"></nav>

<div id="main">
	<h1>Students - Add Record
		<a href="/students.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
	</h1>
	
	<div id="id01" style="overflow-x:auto; overflow-y:auto" class="table-data">
				<!--<p>Student information records</p>-->
			<div class="formtitle"><span>Inserted student record</span></div>
			<table class="data-table">
				<thead>
				<tr>
				<th>Student ID</th>
				<th>First Name</th>
				<th>Mid Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Telephone</th>
				<th>Gender</th>
				<th>Status</th>
				<th>Semester</th>
				<th>Year</th>
				<th>Internship Status</th>
				</tr>
				</thead>
				<tbody>
				<tr>
				<td><?php echo $id ?></td>
				<td><?php echo $fname ?></td>
				<td><?php echo $mname ?></td>
				<td><?php echo $lname ?></td>
				<td><?php echo $email ?></td>
				<td><?php echo $tel ?></td>
				<td><?php echo $gender ?></td>
				<td><?php echo $status ?></td>
				<td><?php echo $semester ?></td>
				<td><?php echo $year ?></td>
				<td><?php echo $intstatus ?></td>
				</tr>
				</tbody>
			</table>
	</div>

	<footer id="foot01"></footer>
</div>

<script src="/scripts/script.js"></script>
<script src="/scripts/stu_layout.js"></script>

<script>
</script>

</body>
</html>