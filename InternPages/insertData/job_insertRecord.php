<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--<p>Student information records</p>-->
<div class="formtitle"><span>New inserted company record</span></div>
<table class="tablelist">
    <thead >
    <tr>
    <th>Job ID</th>
    <th>Job Name</th>
    <th>Company Name</th>
    <th>Position</th>
	<th>Responsibility</th>
	<th>Requirements</th>
	<th>Salary</th>
	<th>Comments</th>
    </tr>
    </thead>
	<tbody >
	<tr>
    <td><?php echo $job_id ?></td>
	<td><?php echo $job_name ?></td>
	<td><?php echo $comp_name ?></td>
	<td><?php echo $position ?></td>
	<td><?php echo $responsibility ?></td>
	<td><?php echo $requirement ?></td>
	<td><?php echo $salary ?></td>
	<td><?php echo $note ?></td>
    </tr>
    </tbody>
</table>
</body>
</html>