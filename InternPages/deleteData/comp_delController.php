<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<a href="../company.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
</div>
<br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $cname = $_POST["cname"];
}

//echo "ID: " .$_POST["id"]. "<br>";

include 'comp_delRecord.php';
include 'comp_delDAO.php';
del_Data($cname);

?>
<div class="welinfo">
    <span><img src="../images/dp.png" /></span>
    <b>Operation successful</b>
</div>
<ul class="infolist">
    <li><span>The company "<?php echo $cname ?>" has been deleted !</span></li>
</ul>
</body>
</html