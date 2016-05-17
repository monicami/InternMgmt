<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<a href="../jobs.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
</div>
<br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $job_id = $_POST["job_id"];
}
include 'job_delRecord.php';
include 'job_delDAO.php';
del_Data($job_id);
?>
<div class="welinfo">
    <span><img src="../images/dp.png" /></span>
    <b>Operation successful</b>
</div>
<ul class="infolist">
    <li><span>The Job "<?php echo $job_id ?>" has been deleted !</span></li>
</ul>

</body>
</html