<html>

<body>
<p>The current data shown as bellow</p>

<?php 
include 'stu_listDAO.php'; 
?>

<p>Please type the student ID you want to delete</p>
<form action="stu_delController.php" method="post">
<p><label>Student ID:  </label><input type="text" name="id">
<input type="submit" value="Submit"></p>

</form>

</body>
</html>