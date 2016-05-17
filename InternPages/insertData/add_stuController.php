<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add user</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<a href="../homea.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
</div>
<br>
<?php
//$cname = $type = $website = $address = $website = "";
function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		//if(isset($_POST['user_name']) && test_input($_POST['user_name']))
		//{
			$user_name = test_input($_POST['user_name']);
		//}
		//if(isset($_POST['user_ID']) && test_input($_POST['user_ID']))
		//{
			$stu_id = test_input($_POST['user_ID']);
		//}
	
	}
include 'add_stuDAO.php';

?>
<div class="welinfo">
    <span><img src="../images/dp.png" /></span>
    <b>Operation successful</b>
</div>
<ul class="infolist">
    <li><span>The user "<?php echo $user_name ?>" has been added!</span></li>
</ul>

</body>
</html