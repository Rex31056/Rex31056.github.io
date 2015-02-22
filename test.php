<?php
$host = "localhost";
$db = "sigma";
$user = "admin";
$pass = "team3473";


$con = mysqli_connect($host, $user, $pass, $db);
if (!$con) {
die( "con failed");
}
 $q ="Select * from information_schema.tables";
//$row = mysqli_fetch_array(mysqli_query($con, $q));
$r= mysqli_query($con, $q);
          $tablenames = array();
        while ($row = mysqli_fetch_array($r)) {
if(strcasecmp($row[1],"sigma")==0){
if(strcasecmp($row[2], "pit") !=0 ){
        $tablenames[]= $row[2];
}
}
}
foreach($tablenames as $value){
	echo $value;
}
mysql_close();
?>