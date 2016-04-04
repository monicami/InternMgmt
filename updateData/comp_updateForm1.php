<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modify</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$cname = $_POST["cname"];
} 
include 'comp_currentRecord.php';
?>
<div class="formbody">
<div class="formtitle"><span>Update company information</span></div>

<div class="titlelist"><span>The ID of the company to be updated is <?php echo $cname ?> </span></div>

<form action="comp_updateController.php" method="post">
<ul class="forminfo">
<!--ID: <input type="text" name="id" value=<?php echo $id ?> ><br>-->
<li><label>Company Name: </label><input type="text" name="cname" value=<?php echo $cname ?> class="dfinput" /></li>
<li><label>Type: </label> <select name="ctype" class="dfinput">
    <option value="Company">Company</option>
    <option value="Startup Company">Startup Company</option>
    <option value="Research Project">Research Project</option>
    <option value="MAC Project">MAC Project</option>
    <option value="Other">Other</option>
  </select></li>
<li><label>Website: </label><input type="text" name="websit" class="dfinput" /><i>Exp. https://www.microsoft.com</i></li>
<li><label>Address: </label><input type="text" name="address" class="dfinput" /></li>
<li><label>City: </label><input type="text" name="city" class="dfinput" /></li>
<li><label>Country: </label><input type="text" name="country" class="dfinput" /></li>
<li><label>Postal Code:</label><input type="text" name="postalcode" class="dfinput" /></li>
<li><label>Description:</label><input type="text" name="note" class="dfinput" /></li>
<br>

<br>
<li><label>&nbsp;</label><input name="" type="submit" class="btn" value="Submit"/></li>

<!--<input type="submit" value="Submit"> -->

</ul>
</div>
<br><br>
<div class="listtitle"><a href="../listTable/comp_listDAO.php">Return to home page</a></div>
</body>
</html>