<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--<p>Student information records</p>-->
<div class="formtitle"><span>Inserted student record</span></div>
<table class="tablelist">
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
    <th><?php echo $id ?></th>
	<th><?php echo $fname ?></th>
	<th><?php echo $mname ?></th>
	<th><?php echo $lname ?></th>
	<th><?php echo $email ?></th>
	<th><?php echo $tel ?></th>
	<th><?php echo $gender ?></th>
	<th><?php echo $status ?></th>
	<th><?php echo $semester ?></th>
	<th><?php echo $year ?></th>
	<th><?php echo $intstatus ?></th>
    </tr>
    </tbody>
</table>
    	
</body>
</html>