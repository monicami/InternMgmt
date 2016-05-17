<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--<p>Student information records</p>-->
<div class="formtitle"><span>The newly added internship record</span></div>
<table class="tablelist">
    <thead >
    <tr>
    <th>Student ID</th>
    <th>Job Name</th>
    <th>Company Name</th>
    <th>Contact Last Name</th>
	<th>Contact First Name</th>
	<th>Telephone</th>
	<th>Email</th>
	<th>Description</th>
    </tr>
    </thead>
	<tbody >
	<tr>
    <td><?php echo $student_ID ?></td>
	<td><?php echo $job_name ?></td>
	<td><?php echo $comp_name ?></td>
	<td><?php echo $contact_LN ?></td>
	<td><?php echo $contact_FN ?></td>
	<td><?php echo $telephone ?></td>
	<td><?php echo $email ?></td>
	<td><?php echo $note ?></td>
    </tr>
    </tbody>
</table>
</body>
</html>