<html>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];
}

echo "ID: " .$_POST["id"]. "<br>";

include 'stu_delRecord.php';

include 'stu_delDAO.php';
del_Data($id);

?>
<br><br>
<div style="font-size:16px">The record  <?php echo $id ?>  has been deleted</div>

</body>
</html