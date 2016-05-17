<!DOCTYPE html>
<html>
<head>
<head>
  <title>Add Students account</title>
  <link href="/css/site.css" rel="stylesheet">
</head>
</head>

<body>

<nav id="nav01"></nav>

<div id="main">

	<h1>Add Student Account</h1>
  <div id="id01" style="overflow-x:auto; overflow-y:auto" class="table-data"></div>
  <footer id="foot01"></footer>
</div>

<script src="/scripts/script.js"></script>
<script src="/scripts/add_student.js"></script>



<script>
var xmlhttp = new XMLHttpRequest();
var url = "insertData/add_student.php";

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