<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Data</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$eduID = $_POST["eduID"];
} 
?>
<div class="formbody">
<div class="welinfo">
    <span><img src="../images/d02.png" /></span>
    <b>Update Education information</b>
</div>
<br>
<form action="intern_updateController.php" method="post">
<ul class="forminfo">
<li><label>Education ID: </label><input type="text" name="edu_ID" value= <?php echo $eduID ?> class="dfinput" /></li>
<li><label>Education Type: </label>
			<input type="radio" name="edu_type" value="Undergraduate">Undergraduate
			<input type="radio" name="edu_type" value="Graduate">Graduate
</li>
<li><label>Major: </label><input type="text" name="contact_FN" class="dfinput" /></li>
<li><label>GPA: </label><input type="text" name="telephone" class="dfinput" /></li>
<li><label>University Name:</label><input type="text" name="email" class="dfinput" /></li>
<li><label>Location:</label><input type="text" name="note" class="dfinput" /></li>
<br>

<br>
<li><label>&nbsp;</label><input name="" type="submit" class="btn" value="Submit"/></li>
</ul>
</form>
</div>
<br><br>
<li><span><a href="../listTable/intern_listDAO.php" class="ibtn">Back to Home</a></span></li>
</body>
</html>