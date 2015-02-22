<?php
session_start();

$host = "localhost";
$db = "sigma";
$user = "admin";
$pass = "team3473";

$con = mysqli_connect($host, $user, $pass, $db);

$matchNumber = mysqli_real_escape_string($con, $_POST['matchNumber']);
$teamNumber = mysqli_real_escape_string($con, $_POST['teamNumber']);
$tableName ="t". $teamNumber;
$autoMobility = mysqli_real_escape_string($con, $_POST['autoMobility']);
$autoMovesYellow = mysqli_real_escape_string($con, $_POST['autoMovesYellow']);
$autoMovesContainer = mysqli_real_escape_string($con, $_POST ['autoMovesContainer']);
$autoStacks = mysqli_real_escape_string($con, $_POST ['autoStacks']);
$autoMovesStack = mysqli_real_escape_string($con, $_POST ['autoMovesStack']);
$autoComments = mysqli_real_escape_string($con, $_POST ['autoComments']);
$teleMobility = mysqli_real_escape_string($con, $_POST ['teleMobility']);
$teleDriverSkill = mysqli_real_escape_string($con, $_POST ['teleDriverSkill']);
$teleRobotAbility = mysqli_real_escape_string($con, $_POST ['teleRobotAbility']);
$teleStep = mysqli_real_escape_string($con, $_POST['teleStep']);
$teleUpsideDown = mysqli_real_escape_string($con, $_POST ['teleUpsideDown']);
$teleComments = mysqli_real_escape_string($con, $_POST ['teleComments']);
$teleStackedTimes = mysqli_real_escape_string($con, $_POST['teleStackedTimes']);
$teleBinLevel = mysqli_real_escape_string($con, $_POST['teleBinLevel']);
$teleTotes = mysqli_real_escape_string($con, $_POST['teleTotes']);
$teleTrips = mysqli_real_escape_string($con, $_POST['teleTrips']);
$teleBins = mysqli_real_escape_string($con, $_POST['teleBins']);
$telePoints = mysqli_real_escape_string($con, $_POST['telePoints']);
$teleNoodles = mysqli_real_escape_string($con, $_POST['teleNoodles']);
$teleCStack = mysqli_real_escape_string($con, $_POST['teleCStack']);
$teleCSet = mysqli_real_escape_string($con, $_POST['teleCSet']);

if (!$con) die( "con failed");

$tableName ="t". $_POST['teamNumber'];
$q ="Select * from information_schema.tables";
$r= mysqli_query($con, $q);
$tablenames = array();
while ($row = mysqli_fetch_array($r))
{
  if(strcasecmp($row[1],"sigma")==0)
  {
        $tablenames[]= $row[2];
  }
}
$exists =0;
foreach($tablenames as $value){
  if(strcasecmp($value,$tableName)==0){
    $exists = 1;
  }
}

if($exists==1)
{
  $q1 = mysqli_query($con, "INSERT INTO $tableName (matchNumber,autoMobility,autoMovesYellow,autoMovesContainer,
  autoStacks,autoMovesStack,autoComments,teleDriverSkill,teleRobotAbility,teleStep,teleMobility,teleUpsideDown,
  teleTotes,teleTrips,teleBins,teleNoodles,telePoints,teleStackedTimes,teleBinLevel,teleCStack,
  teleCSet,teleComments) VALUES ('$matchNumber',
  $autoMobility,$autoMovesYellow,$autoMovesContainer,$autoStacks,$autoMovesStack,
  '$autoComments','$teleDriverSkill','$teleRobotAbility','$teleStep',$teleMobility,$teleUpsideDown,
  '$teleTotes','$teleTrips','$teleBins','$teleNoodles','$telePoints','$teleStackedTimes','$teleBinLevel',$teleCStack,
  $teleCSet,'$teleComments')");

//enter insert query
  // Hi Shannen,
  // I just thought I would type my last will here
  // It was a brilliant day in the dungeon, one of the finest if I may say.
  // Hall o_o
  // Please free noddles
  // xXxWilliamxxxu

}
else {
  $q = mysqli_query($con,"CREATE TABLE $tableName (
    `matchNumber` int(11) NOT NULL DEFAULT '0' PRIMARY KEY,
    `autoMobility` tinyint(1) NOT NULL DEFAULT '0',
    `autoMovesYellow` tinyint(1) NOT NULL DEFAULT '0',
    `autoMovesContainer` tinyint(1) NOT NULL DEFAULT '0',
    `autoStacks` tinyint(1) NOT NULL DEFAULT '0',
    `autoMovesStack` tinyint(1) NOT NULL DEFAULT '0',
    `autoComments` mediumtext NOT NULL,
    `teleDriverSkill` int(11) NOT NULL DEFAULT '0',
    `teleRobotAbility` int(11) NOT NULL DEFAULT '0',
    `teleStep` int(11) NOT NULL DEFAULT '0',
    `teleMobility` tinyint(1) NOT NULL DEFAULT '0',
    `teleUpsideDown` tinyint(1) NOT NULL DEFAULT '0',
    `teleTotes` int(11) NOT NULL DEFAULT '0',
    `teleTrips` int(11) NOT NULL DEFAULT '0',
    `teleBins` int(11) NOT NULL DEFAULT '0',
    `teleNoodles` int(11) NOT NULL DEFAULT '0',
    `telePoints` int(11) NOT NULL DEFAULT '0',
    `teleStackedTimes` int(11) NOT NULL DEFAULT '0',
    `teleBinLevel` int(11) NOT NULL DEFAULT '0',
    `teleCStack` tinyint(1) NOT NULL DEFAULT '0',
    `teleCSet` tinyint(1) NOT NULL DEFAULT '0',
    `teleComments` mediumtext NOT NULL)");

    $q1 = mysqli_query($con, "INSERT INTO $tableName (matchNumber,autoMobility,autoMovesYellow,autoMovesContainer,
    autoStacks,autoMovesStack,autoComments,teleDriverSkill,teleRobotAbility,teleStep,teleMobility,teleUpsideDown,
    teleTotes,teleTrips,teleBins,teleNoodles,telePoints,teleStackedTimes,teleBinLevel,teleCStack,
    teleCSet,teleComments) VALUES ('$matchNumber',
    $autoMobility,$autoMovesYellow,$autoMovesContainer,$autoStacks,$autoMovesStack,
    '$autoComments','$teleDriverSkill','$teleRobotAbility','$teleStep',$teleMobility,$teleUpsideDown,
    '$teleTotes','$teleTrips','$teleBins','$teleNoodles','$telePoints','$teleStackedTimes','$teleBinLevel',$teleCStack,
    $teleCSet,'$teleComments')");

  //create table
  //then insert query
}

if(!$q || !$q1){
  header('Location: http://sigma.team3473.com/fail.html');
  die;
} else {
  echo "Success!";
}

  $row = mysqli_query($con, "SELECT * FROM $tableName");
  $numRow = mysqli_num_rows($row);

 // $result = mysqli_query($con, "SELECT SUM(telePoints) AS sum FROM $tableName");
  //$row = mysqli_fetch_assoc($result);
  //$sum = $row['sum'];

  $result1 = mysqli_query($con, "SELECT SUM(teleStackedTimes) AS sum FROM $tableName");
  $row1 = mysqli_fetch_assoc($result1);
  $sum1 = $row1['sum'];
  $avgStacked = $sum1/$numRow;

  mysqli_query($con, "UPDATE pit SET overallStacked=$sum1 WHERE teamNum=$teamNumber");
  mysqli_query($con, "UPDATE pit SET avgStacked=$avgStacked WHERE teamNum=$teamNumber");

  $result2 = mysqli_query($con, "SELECT SUM(teleBins) AS sum FROM $tableName");
  $row2 = mysqli_fetch_assoc($result2);
  $sum2 = $row2['sum'];
  $avgBins = $sum2/$numRow;

  mysqli_query($con, "UPDATE pit SET overallBins=$sum2 WHERE teamNum=$teamNumber");
  mysqli_query($con, "UPDATE pit SET avgBins=$avgBins WHERE teamNum=$teamNumber");

  $result3 = mysqli_query($con, "SELECT SUM(teleTotes) AS sum FROM $tableName");
  $row3 = mysqli_fetch_assoc($result3);
  $sum3 = $row3['sum'];
  $avgTotes = $sum3/$numRow;

  mysqli_query($con, "UPDATE pit SET overallTotes=$sum3 WHERE teamNum=$teamNumber");
  mysqli_query($con, "UPDATE pit SET avgTotes=$avgTotes WHERE teamNum=$teamNumber");

  $result4 = mysqli_query($con, "SELECT SUM(teleTrips) AS sum FROM $tableName");
  $row4 = mysqli_fetch_assoc($result4);
  $sum4 = $row4['sum'];
  $avgTrips = $sum4/$numRow;

  mysqli_query($con, "UPDATE pit SET overallTrips=$sum4 WHERE teamNum=$teamNumber");
  mysqli_query($con, "UPDATE pit SET avgTrips=$avgTrips WHERE teamNum=$teamNumber");

/*
  $result5 = mysqli_query($con, "SELECT SUM(teleStackedTimes) AS sum FROM $tableName");
  $row5 = mysqli_fetch_assoc($result5);
  $sum5 = $row5['sum'];
  $avgStacked = $sum5/$numRow;
*/

  $result5 = mysqli_query($con, "SELECT SUM(telePoints) AS sum FROM $tableName");
  $row5 = mysqli_fetch_assoc($result5);
  $sum5 = $row5['sum'];
  $avgPoints = $sum5/$numRow;
  mysqli_query($con, "UPDATE pit SET overallPoints=$sum5 WHERE teamNum=$teamNumber");
  mysqli_query($con, "UPDATE pit SET avgPoints=$avgPoints WHERE teamNum=$teamNumber");

  $result6 = mysqli_query($con, "SELECT SUM(teleBinLevel) AS sum FROM $tableName");
  $row6 = mysqli_fetch_assoc($result6);
  $sum6 = $row6['sum'];
  $avgBinLevel = $sum6/$numRow;
  mysqli_query($con, "UPDATE pit SET binLevel=$sum6 WHERE teamNum=$teamNumber");
  mysqli_query($con, "UPDATE pit SET avgBinLevel=$avgBinLevel WHERE teamNum=$teamNumber");

  $result7 = mysqli_query($con, "SELECT SUM(teleRobotAbility) AS sum FROM $tableName");
  $row7 = mysqli_fetch_assoc($result7);
  $sum7 = $row7['sum'];
  $avgBinLevel = $sum6/$numRow;
  mysqli_query($con, "UPDATE pit SET avgRobotAbility=$avgRobotAbility WHERE teamNum=$teamNumber");

  header('Location: http://sigma.team3473.com/matchinput.html');
?>
