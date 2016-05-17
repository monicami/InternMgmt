<!DOCTYPE html>
<html>

<head>
  <title>Internship - List All</title>
  <link href="/css/site.css" rel="stylesheet">
</head>

<body>

<nav id="nav01"></nav>

<div id="main">
<div align="right">Welcome <b>Administrator</b> <a href="login.html">logout</a></div>
	<h1>Internship - List All</h1>
  <div id="id01" style="overflow-x:auto; overflow-y:auto" class="table-data"></div>
  <footer id="foot01"></footer>
</div>

<script src="/scripts/script.js"></script>
<script src="/scripts/intern_layout.js"></script>


<script>
var xmlhttp = new XMLHttpRequest();
var url = "listTable/intern_listDAO.php";

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