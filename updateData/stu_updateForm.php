<html>
<body>
<p>The current data shown as bellow</p>
<?php 
include 'stu_listDAO.php'; 
//printTable();
?>


<p>Please type the ID you want to modify</p>
<form action="stu_updateForm1.php" method="post">
<p>Student ID: <input type="text" name="id"></p>
<input type="submit" value="Submit">
</form>

</body>
</html>