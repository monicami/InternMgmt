<?php
function update_Data($cname,$ctype,$website,$address,$city,$country,$postalcode,$note) {
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
    $sql = "update company set comp_name='$cname', comp_type='$ctype', websit='$website', address='$address', city='$city', country='$country', postalcode='$postalcode', note='$note' where comp_name=\"$cname\"";
    if (!mysqli_query($con,$sql))
    {
      die('Error: ' . mysqli_error($con));
    }
    //close connection
    mysqli_close($con);
}
?>