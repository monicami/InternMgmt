<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $cname = $_POST["cname"];
}

//echo "ID: " .$_POST["id"]. "<br>";

include 'comp_delRecord.php';
include 'comp_delDAO.php';
del_Data($cname);

?>
<br>
<br>
<br><br>
<div class="listtitle"><a href="../listTable/comp_listDAO.php">Return to home page</a></div>

</body>
</html