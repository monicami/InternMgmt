<!DOCTYPE html>
<html>

<head>
  <title>Custom Report - Query Result</title>
  <link href="/css/site.css" rel="stylesheet">
</head>

<body>

<nav id="nav01"></nav>

<div id="main">
<h1>
	Custom Report - Query Result
	<a href="/cus_report.php"><img src="/images/back3.png" class="back-button" align="right"/></a>
	</h1>
<div id="id01" style="overflow-x:auto; overflow-y:auto" class="table-data">


<?php


$form_value = array(27);
for($i = 0; $i < 27 ; $i++)
{
	$form_value[$i]="";
}

$sql_form_value = array(27);
for($i = 0; $i < 27 ; $i++)
{
	$sql_form_value[$i]="";
}

$table_check = array(9);
for($i = 0; $i < 9 ; $i++)
{
	$table_check[$i]="";
}


function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$form_value[0] = test_input($_POST['fname']);
	$form_value[1] = test_input($_POST['mname']);
	$form_value[2] = test_input($_POST['lname']);
	$form_value[3] = test_input($_POST['stu_gender']);
	$form_value[4] = test_input($_POST['stu_status']);
	$form_value[5] = test_input($_POST["stu_semester"]);
	$form_value[6] = test_input($_POST['year']);
	$form_value[7] = test_input($_POST['stu_intern_status']);
	
	$form_value[8] = test_input($_POST['company_company_name']);
	$form_value[9] = test_input($_POST['company_company_type']);
	$form_value[10] = test_input($_POST['company_city']);
	$form_value[11] = test_input($_POST['company_country']);
	
	$form_value[12] = test_input($_POST['job_job_name']);
	$form_value[13] =  test_input($_POST['salary1']);
	$form_value[14] =  test_input($_POST['salary2']);
	
	$form_value[15] = test_input($_POST['job_group']);
	
	$form_value[16] = test_input($_POST['skill_level']);
	
	$form_value[17] = test_input($_POST['skill_name']);
	$form_value[18] = test_input($_POST['skill_type']);
	
	$form_value[19] = test_input($_POST['cer_titles']);
	$form_value[20] = test_input($_POST['cer_body']);
	
	$form_value[21] = test_input($_POST['edu_type']);
	$form_value[22] = test_input($_POST['major']);
	$form_value[23] = test_input($_POST['gpa1']);
	$form_value[24] = test_input($_POST['gpa2']);
	
	$form_value[25] = test_input($_POST['we_company_name']);
	$form_value[26] = test_input($_POST['we_position']);
	
	if(isset($_POST['student_check']) && test_input($_POST['student_check']))
	{
		$table_check[0] = test_input($_POST['student_check']);
	}
	if(isset($_POST['intern_check']) && test_input($_POST['intern_check']))
	{
		$table_check[1] = test_input($_POST['intern_check']);
	}
	if(isset($_POST['company_check']) && test_input($_POST['company_check']))
	{
		$table_check[2] = test_input($_POST['company_check']);
	}
	if(isset($_POST['job_check']) && test_input($_POST['job_check']))
	{
		$table_check[3] = test_input($_POST['job_check']);
	}
	if(isset($_POST['job_group_check']) && test_input($_POST['job_group_check']))
	{
		$table_check[4] = test_input($_POST['job_group_check']);
	}
	if(isset($_POST['skill_check']) && test_input($_POST['skill_check']))
	{
		$table_check[5] = test_input($_POST['skill_check']);
	}
	if(isset($_POST['certification_check']) && test_input($_POST['certification_check']))
	{
		$table_check[6] = test_input($_POST['certification_check']);
	}
	if(isset($_POST['education_check']) && test_input($_POST['education_check']))
	{
		$table_check[7] = test_input($_POST['education_check']);
	}
	if(isset($_POST['workexp_check']) && test_input($_POST['workexp_check']))
	{
		$table_check[8] = test_input($_POST['workexp_check']);
	}
	
	//$table_check[0] = test_input($_POST['student_check']);
	//$table_check[1] = test_input($_POST['intern_check']);
	//$table_check[2] = test_input($_POST['company_check']);
	//$table_check[3] = test_input($_POST['job_check']);
	//$table_check[4] = test_input($_POST['job_group_check']);
	//$table_check[5] = test_input($_POST['skill_check']);
	//$table_check[6] = test_input($_POST['certification_check']);
	//$table_check[7] = test_input($_POST['education_check']);
	//$table_check[8] = test_input($_POST['workexp_check']);
}


if ($form_value[0]) 
{
	$sql_form_value[0] = "student.stu_FName = \"$form_value[0]\" ";
}
if ($form_value[1]) 
{
	$sql_form_value[1] = "student.stu_MName = \"$form_value[1]\" ";
}
if ($form_value[2]) 
{
	$sql_form_value[2] = "student.stu_LName = \"$form_value[2]\" ";
}
if ($form_value[3]) 
{
	$sql_form_value[3] = "student.gender = \"$form_value[3]\" ";
}
if ($form_value[4])
{
	$sql_form_value[4] = "student.status = \"$form_value[4]\" ";
}
if ($form_value[5])
{
	$sql_form_value[5] = "student.semenster = \"$form_value[5]\" ";
}
if ($form_value[6])
{
	$sql_form_value[6] = "student.year = \'$form_value[6]\' ";
}
if ($form_value[7])
{
	$sql_form_value[7] = "student.intern_status = \"$form_value[7]\" ";
}
if ($form_value[8])
{
	$sql_form_value[8] = "company.comp_name = \"$form_value[8]\" ";
}
if ($form_value[9])
{
	$sql_form_value[9] = "company.comp_type = \"$form_value[9]\" ";
}
if ($form_value[10])
{
	$sql_form_value[10] = "company.city = \"$form_value[10]\" ";
}
if ($form_value[11])
{
	$sql_form_value[11] = "company.country = \"$form_value[11]\" ";
}
if ($form_value[12])
{
	$sql_form_value[12] = "job.job_name = \"$form_value[12]\" ";
}
if ($form_value[13])
{
	$sql_form_value[13] = "job.salary > $form_value[13] ";
}
if ($form_value[14])
{
	$sql_form_value[14] = "job.salary < $form_value[14] ";
}
if ($form_value[13]&&$form_value[14])
{
	$sql_form_value[13] = " $sql_form_value[13] and $sql_form_value[14] ";
	$sql_form_value[14] = "";
}
if ($form_value[15])
{
	$sql_form_value[15] = "job_group.group_name = \"$form_value[15]\" ";
}
if ($form_value[16])
{
	$sql_form_value[16] = "own_skill.skill_level = \"$form_value[16]\" ";
}
if ($form_value[17])
{
	$sql_form_value[17] = "skill.skill_name = \"$form_value[17]\" ";
}
if ($form_value[18])
{
	$sql_form_value[18] = "skill.skill_type = \"$form_value[18]\" ";
}
if ($form_value[19])
{
	$sql_form_value[19] = "certification.cer_titles = \"$form_value[19]\" ";
}
if ($form_value[20])
{
	$sql_form_value[20] = "certification.cer_body = \"$form_value[20]\" ";
}
if ($form_value[21])
{
	$sql_form_value[21] = "education.edu_type = \"$form_value[21]\" ";
}
if ($form_value[22])
{
	$sql_form_value[22] = "education.major = \"$form_value[22]\" ";
}
if ($form_value[23])
{
	$sql_form_value[23] = "education.gpa > $form_value[23] ";
}
if ($form_value[24])
{
	$sql_form_value[24] = "education.gpa < $form_value[24] ";
}
if ($form_value[23]&&$form_value[24])
{
	$sql_form_value[23] = " $sql_form_value[23] and $sql_form_value[24] ";
	$sql_form_value[24] = "";
}
if ($form_value[25])
{
	$sql_form_value[25] = "workexp.company_name = \"$form_value[25]\" ";
}
if ($form_value[26])
{
	$sql_form_value[26] = "workexp.position = \"$form_value[26]\" ";
}

//generate SQL
$con =  mysqli_connect("localhost","root","123456","imis");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
else
{
	echo "<p>Connected!</><br>";
}


$table_usage = array(9);
for($i = 0; $i < 9 ; $i++)
{
	$table_usage[$i] = 0;
}

if($form_value[0]||$form_value[1]||$form_value[2]||$form_value[3]||$form_value[4]||$form_value[5]||$form_value[6]||$form_value[7])
{
	$table_usage[0] = "student";	//student
}
if($form_value[8]||$form_value[9]||$form_value[10]||$form_value[11])
{
	$table_usage[1] = "company";	//company
}
if($form_value[12]||$form_value[13]||$form_value[14])
{
	$table_usage[2] = "job";	//job
}
if($form_value[15])
{
	$table_usage[3] = "job_group";	//job_group
}
if($form_value[16])
{
	$table_usage[4] = "own_skill";	//own_skill
}
if($form_value[17]||$form_value[18])
{
	$table_usage[5] = "skill";	//skill
}
if($form_value[20]||$form_value[19])
{
	$table_usage[6] = "certification";	//certification
}
if($form_value[21]||$form_value[22]||$form_value[23]||$form_value[24])
{
	$table_usage[7] = "education";	//education
}
if($form_value[25]||$form_value[26])
{
	$table_usage[8] = "workexp";	//workexp
}

$count_arg = 0;
$argv = array();
$count_table = 0;
$table = array();
for($i = 0; $i < 27;$i++)
{
	if($sql_form_value[$i])
	{
		$argv[$count_arg]=$i;
		$count_arg++;
	}
}
for($i = 0; $i < 9;$i++)
{
	if($table_usage[$i])
	{
		$table[$count_table]=$i;
		$count_table++;
	}
}
$count_check = 0;
$check = array();
for($i = 0; $i < 9;$i++)
{
	if($table_check[$i])
	{
		$check[$count_check]=$i;
		$count_check++;
	}
}

$sql1 = $sql2 = $sql3 = $sql4 = $sql ="";
//generate the route among the tables
$route = array(8);
for($i = 0; $i < 8 ; $i++)
{
	$route[$i]= "" ;		//initialization
}
$route_table = array(8);
for($i = 0; $i < 8 ; $i++)
{
	$route_table[$i]= "" ;		//initialization
}
if($table_usage[2]||$table_check[3])
{
	$route_table[0] = "student,intern,job";
	$route[0] = "job.job_name = intern.job_name and intern.student_ID = student.student_ID" ;		//route to job
}
if($table_usage[1]||$table_check[2])
{
	$route_table[1] = "student,intern,company";
	$route[1] = "company.comp_name = intern.comp_name and intern.student_ID = student.student_ID " ;		//route to company
}
if($table_usage[3]||$table_check[4])
{
	$route_table[2] = "student,intern,job_group";
	$route[2] = "job_group.job_name = intern.job_name and intern.student_ID = student.student_ID " ;		//route to job_group
}
if($table_usage[6]||$table_check[6])
{
	$route_table[3] = "student,cer_record,certification";
	$route[3] = "certification.certification_ID = cer_record.certification_ID and cer_record.student_ID = student.student_ID " ;		//route to certification
}
if($table_usage[7]||$table_check[7])
{
	$route_table[4] = "student,edu_record,education";
	$route[4] = "education.education_ID = edu_record.education_ID and edu_record.student_ID = student.student_ID " ;		//route to education
}
if($table_usage[4] || $table_usage[5] ||$table_check[5])
{
	if($table_usage[5]||$table_check[5])		//route to skill
	{
		$route_table[5] = "student,own_skill,skill";
		$route[5] = "skill.skill_ID = own_skill.skill_ID and own_skill.student_ID = student.student_ID ";
	}
	else
	{
		$route_table[5] = "student,own_skill";
		$route[5] = "own_skill.student_ID = student.student_ID " ;
	}	
}
if($table_usage[8]||$table_check[8])
{
	$route_table[6] = "student,workexp";
	$route[6] = "workexp.student_ID = student.student_ID " ;		//route to workexp
}
if($table_check[1])
{
	$route_table[7] = "student,intern";
	$route[7] = "intern.student_ID = student.student_ID " ;		//route to intern
}
$count_route = 0;
$route_usage = array();
for($i = 0; $i < 8;$i++)
{
	if($route[$i])
	{
		$route_usage[$count_route]=$i;
		$count_route++;
	}
}
$count_route_table = 0;
$route_table_usage = array();
for($i = 0; $i < 8;$i++)
{
	if($route_table[$i])
	{
		$route_table_usage[$count_route_table]=$i;
		$count_route_table++;
	}
}


//check one
switch ($count_check)
{
	case 0:	//no check box 
		{
			if($count_arg==1)	//single option in one table
			{
				$sql1="select * ";
				$temp1 = $table_usage[$table[0]];
				$sql2="from $temp1 " ;
				$temp2 = $sql_form_value[$argv[0]];
				$sql3="where $temp2";
				break;
			}
			else if($count_arg>=2)	//multi-options in one table
			{
				if ($count_table>1)
				{
					echo "Check one table to do the multi-query";
					break;
				}
				$sql3 = "where ";
				$sql1="select * ";
				$temp1 = $table_usage[$table[0]];
				$sql2="from $temp1 " ;
				for($i = 0;$i < $count_arg;$i++)
				{
					$temp2 = $sql_form_value[$argv[$i]];
					$sql3 = $sql3 . $temp2;
					if($i==($count_arg-1))
					{
						continue;
					}
					$sql3 = $sql3 . " and ";
				}
				break;
			}
		}
	case 1:
		{
			if($count_arg==0)	//show the table checked
			{
				$sql1="select * ";
				$temp1 = $table_check[$check[0]];
				$sql2="from $temp1 " ;
				$sql3 = "";
				break;
			}
			else if ($count_arg >= 1)	//based on the table checked do the multi tables query
			{
				$sql1 = "select * ";
				$sql2 = "from ";
				$temp_sql2 = "";
				$sql3 = " where ";
				$sql4 = " group by " . $table_check[$check[0]] . "." . $table_check[$check[0]] . "_ID";
				
				for($i = 0;$i < $count_route_table;$i++)
				{
					$temp1 = $route_table[$route_table_usage[$i]];
					$temp_sql2 = $temp_sql2 . $temp1;
					if($i==($count_route_table-1))
					{
						continue;
					}
					$temp_sql2 = $temp_sql2 . ",";
				}
				
				for($i = 0;$i < $count_arg;$i++)
				{
					$temp2 = $sql_form_value[$argv[$i]];
					$sql3 = $sql3 . $temp2;
					if($i==($count_arg-1))
					{
						continue;
					}
					$sql3 = $sql3 . " and ";
				}
				
				$sql3 = $sql3 . " and ";
				
				for($i = 0;$i < $count_route;$i++)
				{
					$temp3 = $route[$route_usage[$i]];
					$sql3 = $sql3 . $temp3;
					if($i==($count_route-1))
					{
						continue;
					}
					$sql3 = $sql3 . " and ";
				}
				
				$temp_sql2 = implode(',',array_unique(explode(',', $temp_sql2)));
				$sql2 = $sql2 . $temp_sql2;
				break;
				
			}
			
			else
			{
				echo "read the usage and check input <br>";
				break;
			}
		}
	case 2:
		{
			if ($count_arg == 0)	//join two table checked
			{
				if($table_check[0]&&$table_check[1])
				{
					$sql1="select * ";
					$sql2="from student , intern ";
					$sql3="where student.student_ID = intern.student_ID group by student.student_ID";
					break;
				}
				if($table_check[0]&&$table_check[8])
				{
					$sql1="select * ";
					$sql2="from student , workexp ";
					$sql3="where student.student_ID = workexp.student_ID group by student.student_ID";
					break;
				}
				if($table_check[0]&&$table_check[5])
				{
					$sql1="select * ";
					$sql2="from student , skill , own_skill ";
					$sql3="where student.student_ID = own_skill.student_ID and own_skill.skill_ID = skill.skill_ID group by student.student_ID";
					break;
				}
				if($table_check[0]&&$table_check[6])
				{
					$sql1="select * ";
					$sql2="from student , certification , cer_record ";
					$sql3="where student.student_ID = cer_record.student_ID and cer_record.certification_ID = certification.certification_ID group by student.student_ID";
					break;
				}
				if($table_check[0]&&$table_check[7])
				{
					$sql1="select * ";
					$sql2="from student , education , edu_record ";
					$sql3="where student.student_ID = edu_record.student_ID and edu_record.education_ID = education.education_ID group by student.student_ID";
					break;
				}
				if($table_check[2]&&$table_check[1])
				{
					$sql1="select * ";
					$sql2="from company , intern ";
					$sql3="where company.comp_name = intern.comp_name group by company.comp_name";
					break;
				}
				if($table_check[4]&&$table_check[1])
				{
					$sql1="select * ";
					$sql2="from job_group , intern ";
					$sql3="where job_group.job_name = intern.job_name group by intern.job_name";
					break;
				}
				if($table_check[2]&&$table_check[3])
				{
					$sql1="select * ";
					$sql2="from job , company ";
					$sql3="where job.comp_name = company.comp_name group by company.comp_name";
					break;
				}
				if($table_check[1]&&$table_check[3])
				{
					$sql1="select * ";
					$sql2="from job , intern ";
					$sql3="where job.job_name = intern.job_name group by intern.student_ID";
					break;
				}
				if($table_check[4]&&$table_check[3])
				{
					$sql1="select * ";
					$sql2="from job , job_group ";
					$sql3="where job.job_name = job_group.job_name group by job.job_ID";
					break;
				}
				echo "This two tables are not related<br>";
				break;
			}
			else
			{
				echo "do not fill the option while checking two tables<br>";
				break;
			}
		}
	default:
		echo "read the usage and check input <br>";
		break;
}

/*
echo $sql1;
echo $sql2;
echo $sql3;
echo $sql4;
echo "<br>";
echo $sql;
*/
$sql = $sql1 . $sql2 . $sql3 . $sql4;
echo "<br>";

/*
if($sql)
{
	$result = mysqli_query($con, $sql);
	if(mysqli_num_rows($result) > 0)
	{
		echo "Your Statement:<br>";
		for($i = 0;$i < $count_arg;$i++)
		{
			echo $sql_form_value[$argv[$i]];
			echo " ";
		}
		echo "<br></br>";
		while($row = mysqli_fetch_assoc($result))
		{
			foreach($row as $x => $x_value)
			{
				echo "$x ";
				echo "$x_value <br>";
			}
			echo "<br>";
		}
	}
	else
	{
		echo "no result";
	}
}
else 
{
	echo "Empty query";
}
*/

//-----------------------

if($sql)
{
	$result = mysqli_query($con, $sql);
	if(mysqli_num_rows($result) > 0)
	{
		echo "Your Query Equals To This Statement:<br>";
		for($i = 0;$i < $count_arg;$i++)
		{
			echo $sql_form_value[$argv[$i]];
			echo " ";
		}
		echo "<br></br>";
		
		echo "<form method=\"post\" action=\"filter.php\"><input class=\"data-submit-btn\" type=\"submit\" value=\"Filter Result\"/></form>";
		
		$retline = "<table class=\"data-table\"><tbody>";
		$header = true;
		
		while($row = mysqli_fetch_assoc($result))
		{
			$retline .= "<tr>";
			
			if ($header) {
				$header = false;
				$header_row = "";
				$data_row = "";
			
				foreach($row as $x => $x_value)
				{
						$header_row .= "<th>$x</th>";
						$data_row .= "<td>$x_value</td>";
				}
				$retline .= $header_row . "</tr><tr>" . $data_row;
			} else {
				foreach($row as $x => $x_value)
				{
					$retline .= "<td>$x_value</td>";
				}
			}
			
			$retline .= "</tr>";
		}
		
		$retline .= "</tbody></table>";
		echo $retline;
	}
	else
	{
		echo "no result";
	}
}
else 
{
	echo "Empty query";
}

$sql_view = "create or replace view temp_view as ";
$sql_view = $sql_view . $sql;
if(mysqli_query($con, $sql_view)==false)
{
	echo "<br>cannot create the view</br>";
}

mysqli_close($con);
?>



</div>
<footer id="foot01"></footer>
</div>

<script src="/scripts/script.js"></script>
<script src="/scripts/cus_report_layout.js"></script>

</body>
</html>