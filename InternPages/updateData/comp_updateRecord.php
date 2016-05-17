<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--<p>Student information records</p>-->
<div class="formtitle"><span>Updated company record</span></div>
<table class="tablelist">
    <thead>
    <tr>
    <th>Company Name</th>
    <th>Type</th>
    <th>Website</th>
    <th>Address</th>
	<th>City</th>
	<th>Country</th>
	<th>Postal Code</th>
	<th>Description</th>
    </tr>
    </thead>
	<tbody>
	<tr>
    <td><?php echo $cname ?></td>
	<td><?php echo $ctype ?></td>
	<td><?php echo $website ?></td>
	<td><?php echo $address ?></td>
	<td><?php echo $city ?></td>
	<td><?php echo $country ?></td>
	<td><?php echo $postalcode ?></td>
	<td><?php echo $note ?></td>
    </tr>
    </tbody>
</table>
    	
</body>
</html>