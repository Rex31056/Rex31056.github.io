<!doctype html>

<html lang="en">
<head>
</head>
<body>
<?php
$uploadOk = 1;

$host = "localhost";
$db = "sigma";
$user = "admin";
$pass = "team3473";

$con = mysqli_connect($host, $user, $pass, $db);
if (!$con) {
die( "con failed");
}
$count=0;
$teamNum = $_POST['teamNum'];
foreach (glob('t'.$teamNum.'*') as $filename) {
    $count++;
}
$filename =  t.$teamNum.'_'.$count; //todo think of file naming scheme, freplace 'host' with '$filename'
 
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       
        $uploadOk = 1;
    } else {
       
        $uploadOk = 0;
    }
}

if($uploadOk==1){
   
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $filename);

} else {
    die("Oops. Something went wrong!");
}

header('Location: http://sigma.team3473.com/performance.php?teamNum='.$teamNum);

?>
</body>
</html>
