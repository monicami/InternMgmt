<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/css/site.css" rel="stylesheet">
</head>
<body>
<!--<p>Student information records</p>-->
<div class="formtitle"><span>Updated student record</span></div>
<table class="data-table">
    <thead>
    <tr>
    <th>Student ID</th>
    <th>First Name</th>
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
    	
</body>
</html>