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
    <th><?php echo $cname ?></th>
	<th><?php echo $ctype ?></th>
	<th><?php echo $website ?></th>
	<th><?php echo $address ?></th>
	<th><?php echo $city ?></th>
	<th><?php echo $country ?></th>
	<th><?php echo $postalcode ?></th>
	<th><?php echo $note ?></th>
    </tr>
    </tbody>
</table>
    	
</body>
</html>