<!DOCTYPE html>
<html>

<head>
  <title>Students - List All</title>
  <link href="/css/site.css" rel="stylesheet">
</head>

<body>

<nav id="nav01"></nav>

<div id="main">
<div align="right">Welcome <b><?php session_start(); echo $_SESSION['name'];?></b> <a href="login.html">logout</a></div>
	<h1>Students - Personal Information</h1>
  <div id="id01" style="overflow-x:auto; overflow-y:auto" class="table-data"></div>
  <footer id="foot01"></footer>
</div>

<script src="/scripts/script1.js"></script>
<script src="/scripts/stu_layout.js"></script>


<!--
<script>
var xmlhttp = new XMLHttpRequest();
var url = "connect.php";

xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        myFunction(xmlhttp.responseText);
    }
}
xmlhttp.open("GET", url, true);
xmlhttp.send();

function myFunction(response) {
    var obj = JSON.parse(response);
    var arr = obj.records;
    var i;
    var out = "<table><tr><th>Name</th><th>City</th><th>Country</th></tr>";
    for(i = 0; i < arr.length; i++) {
        out += "<tr><td>" + 
        arr[i].Name +
        "</td><td>" +
        arr[i].City +
        "</td><td>" +
        arr[i].Country +
        "</td></tr>";
    }
    out += "</table>"
    document.getElementById("id01").innerHTML = out;
}
</script>
-->

<!--<script src="listTable/stu_listDAO.php"></script>-->



<script>
var xmlhttp = new XMLHttpRequest();
var url = "listTable/stu_listDAO1.php";

xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		document.getElementById("id01").innerHTML = xmlhttp.responseText;
    }
}
xmlhttp.open("GET", url, true);
xmlhttp.send();
</script>

</body>
</html>