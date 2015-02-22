<?php

  $host = "localhost";
  $db = "sigma";
  $user = "admin";
  $pass = "team3473";

  $uploadOk = 1;

  $teamNum = $_POST['teamNumber'];
  $robotType = $_POST['robotType'];
  $teamName = $_POST['teamName'];
  $cityOfOrigin = $_POST['cityOfOrigin'];
  $driveTrain = $_POST['driveTrain'];
  $isRookie = $_POST['isRookie'];
  $regional = $_POST['regional'];
  $handlesUDTotes = $_POST['handlesUDTotes'];
  $previousRegional = $_POST['previousRegional'];
  $gamePlan = $_POST['gamePlan'];

  $filename =  t . $teamNum;

//  echo $teamNum.",".$robotType.",".$teamName.",".$cityOfOrigin.",".$driveTrain.",".$isRookie.",".$regional.",".$handlesUDTotes.",".$previousRegional.",".$gamePlan;


    $con = mysqli_connect($host,$user,$pass,$db);

    if (!$con) die("con failed");

    $sql = "INSERT INTO pit (teamNum,robotType,teamName,cityOfOrigin,driveTrain,
    isRookie,regional,handlesUpsideDownTotes,previousRegional,gamePlan) VALUES ($teamNum,'$robotType',
    '$teamName','$cityOfOrigin','$driveTrain',$isRookie,'$regional',$handlesUDTotes,'$previousRegional',
    '$gamePlan')";

    $q = mysqli_query( $con , $sql );
    if (!$q){
      header('Location: http://sigma.team3473.com/fail.html');
      die;
    } else {
      echo "Success!";
    }

    header('Location: http://sigma.team3473.com/backgroundinfo.html');
?>
