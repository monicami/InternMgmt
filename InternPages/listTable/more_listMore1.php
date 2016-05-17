<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>More Data</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<a href="../student1.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
</div>
<br>
<br>
<div class="formtitle"><span>Student Education Information</span></div>
<br>
<table class="tablelist">
    <thead>
    <tr>
	<!--<th><input name="" type="checkbox" value="" checked="checked"/></th>-->
    <th>Education ID</th>
    <th>Student ID</th>
	<th>Student Last Name</th>
	<th>Student First Name</th>
    <th>Degree</th>
	<th>Major</th>
	<th>GPA</th>
	<th>University</th>
	<th>location</th>
    </tr>
    </thead>
	<tbody>
	<tr>
<?php  
$conn=mysqli_connect("localhost","root","123456");   
if(!$conn) echo "Connection failed!";   
mysqli_select_db($conn,"imis");   
$sql = "SELECT edu_record.education_ID, edu_record.student_ID, stu_LName,stu_FName, edu_type, major, gpa, uni_name, uni_location FROM edu_record, education, student where edu_record.education_ID=education.education_ID and edu_record.student_ID=student.student_ID";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	//output data of each row

	while($row = mysqli_fetch_assoc($result)) {		
		echo "<tr>";
		//echo "<td> <input type=$a> </td>";
	    foreach($row as $x => $x_value) {			
           echo "<td>". $x_value . "</td>";		   
       }
	}
    	
} else {
	echo "no result";
}
mysqli_close($conn);
?> 
	
	</tr>
	</tr>
    </tbody>
</table>
 <br> <br>
 <div class="formtitle"><span>Student Skill Information</span></div>

<br>
 <table class="tablelist">
    <thead>
    <tr>
	<!--<th><input name="" type="checkbox" value="" checked="checked"/></th>-->
    <th>Skill ID</th>
    <th>Student ID</th>
	<th>Student Last Name</th>
	<th>Student First Name</th>
	<th>Skill Name</th>
	<th>Skill Type</th>
    <th>Level</th>
    </tr>
    </thead>
	<tbody>
	<tr>
<?php   
$conn=mysqli_connect("localhost","root","123456");   
if(!$conn) echo "Connection failed!";   
mysqli_select_db($conn,"imis");   
$sql = "SELECT own_skill.skill_ID, own_skill.student_ID, stu_LName,stu_FName, skill_name, skill_type, skill_level FROM own_skill, skill, student where own_skill.skill_ID=skill.skill_ID and own_skill.student_ID=student.student_ID";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	//output data of each row

	while($row = mysqli_fetch_assoc($result)) {		
        echo "<tr>";
		//echo "<td> <input type=$a> </td>";
	    foreach($row as $x => $x_value) {			
           echo "<td>". $x_value . "</td>";
       }
	}	
} else {
	echo "no result";
}
mysqli_close($conn);
?> 
    </tr>
	</tr>
    </tbody>
</table>
<br><br>
<div class="formtitle"><span>Student Work Experience </span></div>

<br>
<table class="tablelist">
    <thead>
    <tr>
	<!--<th><input name="" type="checkbox" value="" checked="checked"/></th>-->
    <th>Experience ID</th>
    <th>Student ID</th>
	<th>Student Last Name</th>
	<th>Student First Name</th>
    <th>Company Name</th>
	<th>Company Location</th>
	<th>Position</th>
	<th>Start Date</th>
	<th>End Date</th>
    </tr>
    </thead>
	<tbody>
	<tr>
<?php   
$conn=mysqli_connect("localhost","root","123456");   
if(!$conn) echo "Connection failed!";   
mysqli_select_db($conn,"imis");   
$sql = "SELECT workexp_ID, workexp.student_ID, stu_LName,stu_FName, company_name, company_location, position,start_date, end_date FROM workexp, student where workexp.student_ID=student.student_ID";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	//output data of each row

	while($row = mysqli_fetch_assoc($result)) {		
echo "<tr>";
		//echo "<td> <input type=$a> </td>";
	    foreach($row as $x => $x_value) {			
           echo "<td>". $x_value . "</td>";
       }
	}	
} else {
	echo "no result";
}
mysqli_close($conn);
?> 
    </tr>
	</tr>
    </tbody>
</table>
<br><br>
</table>
 <br> <br>
 <div class="formtitle"><span>Student Certification Information</span></div>

<br>
 <table class="tablelist">
    <thead>
    <tr>
	<!--<th><input name="" type="checkbox" value="" checked="checked"/></th>-->
    <th>Certification ID</th>
    <th>Student ID</th>
	<th>Student Last Name</th>
	<th>Student First Name</th>
	<th>Certification title</th>
	<th>Certification body</th>
    </tr>
    </thead>
	<tbody>
	<tr>
<?php   
$conn=mysqli_connect("localhost","root","123456");   
if(!$conn) echo "Connection failed!";   
mysqli_select_db($conn,"imis");   
$sql = "SELECT cer_record.certification_ID, cer_record.student_ID, stu_LName,stu_FName, cer_titles, cer_body FROM certification, cer_record, student where certification.certification_ID=cer_record.certification_ID and cer_record.student_ID=student.student_ID";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	//output data of each row

	while($row = mysqli_fetch_assoc($result)) {		
	    echo "<tr>";
		//echo "<td> <input type=$a> </td>";
	    foreach($row as $x => $x_value) {			
           echo "<td>". $x_value . "</td>";
       }
	}	
} else {
	echo "no result";
}
mysqli_close($conn);
?> 
    </tr>
    </tr>
    </tbody>
</table>
<br><br>
</body>
</html>