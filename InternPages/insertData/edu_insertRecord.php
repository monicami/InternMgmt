<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--<p>Student information records</p>-->
<div class="formtitle"><span>New inserted education record</span></div>
<table class="tablelist">
    <thead >
    <tr>
    <th>Education ID</th>
	<th>Student ID</th>
    <th>Education Type</th>
    <th>Major</th>
    <th>GPA</th>
	<th>Universiy Name</th>
	<th>Location</th>
    </tr>
    </thead>
	<tbody >
	<tr>
    <td><?php echo $edu_ID ?></td>
	<td><?php echo $student_ID ?></td>
	<td><?php echo $edu_type ?></td>
	<td><?php echo $major ?></td>
	<td><?php echo $gpa ?></td>
	<td><?php echo $uni_name ?></td>
	<td><?php echo $uni_location ?></td>
    </tr>
    </tbody>
</table>
</body>
</html>