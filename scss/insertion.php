<?php 
$host = "localhost";
$db = "sigma";
$user = "admin";
$pass = "team3473";
$temp = $_POST['teamNumber'];
$array = "t".($temp);
//$arr = array($array);
$con = mysqli_connect($host, $user, $pass, $db);
if (!$con) {
die( "con failed");
}
$teamNum = "t" . $_GET["teamNum"];

$q = "CREATE TABLE $teamNum (
  `matchNumber` int(11) NOT NULL DEFAULT '0',
  `autoMobility` tinyint(1) NOT NULL DEFAULT '0',
  `autoMovesYellow` tinyint(1) NOT NULL DEFAULT '0',
  `autoMovesContainer` tinyint(1) NOT NULL DEFAULT '0',
  `autoStacks` tinyint(1) NOT NULL DEFAULT '0',
  `autoMovesStack` tinyint(1) NOT NULL DEFAULT '0',
  `autoComments` mediumtext NOT NULL,
  `teleMobility` tinyint(1) NOT NULL DEFAULT '0',
  `teleDriverSkill` int(11) NOT NULL DEFAULT '0',
  `teleRobotAbility` int(11) NOT NULL DEFAULT '0',
  `teleStep` tinytext NOT NULL,
  `teleUpsideDown` tinyint(4) NOT NULL DEFAULT '0',
  `teleStackCycles` tinytext NOT NULL,
  `teleComments` mediumtext NOT NULL,
  `teleTotesTotal` int(11) NOT NULL DEFAULT '0',
  `teleTripsTotal` int(11) NOT NULL,
  `teleBinsTotal` int(11) NOT NULL,
  `telePointsTotal` int(11) NOT NULL DEFAULT '0',
  `teleAvgTrips` int(11) NOT NULL DEFAULT '0',
  `teleAvgTotes` int(11) NOT NULL DEFAULT '0',
  `teleAvgBinTotal` int(11) NOT NULL DEFAULT '0',
  `teleAvgPointsTotal` int(11) NOT NULL DEFAULT '0',
  `teleAvgBins` int(11) NOT NULL DEFAULT '0',
  `teleAvgBinLevel` int(11) NOT NULL DEFAULT '0',
  `teleStackedTimes` int(11) NOT NULL DEFAULT '0'
)";


$qu = mysqli_query($con, $q);;
if($qu){
  echo success;
} else {
  echo fail;
}

?>