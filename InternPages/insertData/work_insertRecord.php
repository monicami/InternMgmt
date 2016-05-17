<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--<p>Student information records</p>-->
<div class="formtitle"><span>New inserted work experience record</span></div>
<table class="tablelist">
    <thead >
    <tr>
    <th>Experience ID</th>
	<th>Student ID</th>
	<th>Position</th>
    <th>Company Name</th>
    <th>Location</th>
	<th>Start Date</th>
	<th>End Date</th>
    </tr>
    </thead>
	<tbody >
	<tr>
    <td><?php echo $exp_ID ?></td>
	<td><?php echo $student_ID ?></td>
	<td><?php echo $position ?></td>
	<td><?php echo $company_name ?></td>
	<td><?php echo $company_location ?></td>
	<td><?php echo $start_date ?></td>
	<td><?php echo $end_date ?></td>
    </tr>
    </tbody>
</table>
</body>
</html>