<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--<p>Student information records</p>-->
<div class="formtitle"><span>New inserted skill record</span></div>
<table class="tablelist">
    <thead >
    <tr>
    <th>Skill ID</th>
	<th>Student ID</th>
	<th>Skill Name</th>
    <th>Skill Type</th>
    <th>Skill Level</th>
    </tr>
    </thead>
	<tbody >
	<tr>
    <td><?php echo $skill_ID ?></td>
	<td><?php echo $student_ID ?></td>
	<td><?php echo $skill_name ?></td>
	<td><?php echo $skill_type ?></td>
	<td><?php echo $skill_level ?></td>
    </tr>
    </tbody>
</table>
</body>
</html>