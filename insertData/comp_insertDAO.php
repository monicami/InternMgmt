
<?php
function insert_DB($cname,$type,$website,$address,$city,$country,$postalcode,$note) {
	//URL
    $url = "localhost";
    //username
    $user = "root";
    //password
    $password = "123456";
    //connection
    $con = mysqli_connect($url,$user,$password);
    if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
    }
    //encoding
    mysqli_set_charset($con,"utf8");
    //connect to db
    mysqli_select_db($con,"imis");
    $sql = "insert into company (comp_name,comp_type,websit,address,city,country,postalcode,note)  values('$cname','$type','$website','$address','$city','$country','$postalcode','$note')";
    if (!mysqli_query($con,$sql))
    {
      die('Error: ' . mysqli_error($con));
    }
    echo "<br><br>"."This company has been added to the database!";
    //close connection
    mysqli_close($con);
}
?>