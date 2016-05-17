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

	<form method="post" action="">
	<?php
		$sql = "select * from temp_view ";
		$con =  mysqli_connect("localhost","root","123456","imis");
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
		else
		{
			echo "<p>Connected!</><br><br>";
		}
		echo "Check the columns your want and click on \"Filter\" <br>";
		$result = mysqli_query($con, $sql);
		$num = 0;
		$column_name = array();
		if(mysqli_num_rows($result) > 0)
		{
			
			$retline = "<table class=\"data-table\"><tbody><tr>";
			
			$header = true;
			while($row = mysqli_fetch_assoc($result))
			{	
				if ($header) {
					$header = false;
					foreach($row as $x => $x_value)
					{
						$retline .= "<th>$x<input type=\"checkbox\" name=" . $x . " value=" . $x . " ></th>";
						$column_name[$num] = $x;
						$num++;
					}
				}
			}
			$retline .= "</tr></tbody></table>";
			echo $retline;
		}
	?>
	<input class="data-submit-btn" type="submit" value="Filter"/>
	</form>
	<?php
	/*
	for($i = 0;$i < $num;$i++)
	{
		echo $column_name[$i];
	}*/
	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$columns = array();
	for($i = 0;$i < $num;$i++)
	{
		$columns[$i] = 0;
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		for($i = 0;$i < $num;$i++)
		{
			if(isset($_POST[$column_name[$i]]) && test_input($_POST[$column_name[$i]]))
			{
				$columns[$i] = test_input($_POST[$column_name[$i]]);
			}
		}
	}
	$count_columns = 0;
	$checked_columns = array();
	for($i = 0; $i < $num ; $i++)
	{
		if($columns[$i])
		{
			$checked_columns[$count_columns]=$i;
			$count_columns++;
		}
	}
	$select_sql = "select ";
	for($i = 0; $i < $count_columns ; $i++)
	{
		$select_sql = $select_sql . $column_name[$checked_columns[$i]];
		if($i == $count_columns - 1)
		{
			continue;
		}
		$select_sql = $select_sql .",";
	}
	$select_sql = $select_sql . " from temp_view";
	//echo $num;
	//echo "Your Query Equals To This Statement: <br>" . $select_sql;
	if(mysqli_query($con, $select_sql)!=false)
	{
		$result = mysqli_query($con, $select_sql);
	}
	
	if(mysqli_num_rows($result) > 0)
	{
		
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
	
	?>

</div>
<footer id="foot01"></footer>
</div>

<script src="/scripts/script.js"></script>
<script src="/scripts/cus_report_layout.js"></script>

</body>
</html>