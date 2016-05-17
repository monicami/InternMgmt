<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--<p>Student information records</p>-->
<div class="formtitle"><span>Updated certification record</span></div>
<table class="tablelist">
    <thead>
    <tr>
    <th>Certification ID</th>
    <th>Student ID</th>
    <th>Certification title</th>
    <th>Certification body</th>
    </tr>
    </thead>
	<tbody>
	<tr>
    <td><?php echo $cer_ID ?></td>
	<td><?php echo $student_ID ?></td>
	<td><?php echo $cer_titles ?></td>
	<td><?php echo $cer_body ?></td>
    </tr>
    </tbody>
</table>
    	
</body>
</html>