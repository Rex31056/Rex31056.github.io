<?php 

$matchNum = $_POST['matchNumber']; 
$autoMobility = $_POST['autoMobility']; 
$autoMovesYellow = $_POST['autoMovesYellow']; 
$autoMovesContainer = $_POST ['autoMovesContainer'];
$autoStacks = $_POST ['autoStacks'];
$autoMovesStacks = $_POST ['autoMovesStacks'];
$autoComments = $_POST ['autoComments'];
$teleMobility = $_POST ['teleMobility'];
$teleDriverSkill = $_POST ['teleDriverSkill'];
$teleRobotAbility = $_POST ['teleRobotAbility'];
$teleStep = $_POST ['teleStep'];
$teleUpsideDown = $_POST ['teleUpsideDown'];
$teleStackCycles = $_POST ['teleStackCycles'];
$teleComments = $_POST ['teleComments'];

$servername = "mysql14.000webhost.com";
$mysql_database = "a1100107_team";
$username= "a1100107_team";
$password = "team3473";
$temp = $_POST['teamNumber'];
$array = "t".($temp);
echo "$autoStacks";
//$arr = array($array);
$conn = mysqli_connect("mysql14.000webhost.com", "a1100107_team", "team3473", "a1100107_team");
if (!$conn) 
{
echo "con failed";
}

if (mysqli_query($conn, "DESCRIBE `$array`"))
{
    echo "table exists";
    $sql = "INSERT INTO $array ('autoMobility', 'autoMovesYellow', 'autoMovesContainer', 'autoStacks', 'autoMovesStack', 'autoComments', 'teleMobility', 'teleDriverSkill', 'teleRobotAbility', 'teleStep', 'teleUpsideDown', 'teleStackCycles', 'teleComments') VALUES ('$autoMobility', '$autoMovesYellow', '$autoMovesContainer', '$autoStacks', '$autoMovesStacks', '$autoComments', '$teleDriverSkill', '$teleRobotAbility', '$teleStep', '$teleUpsideDown', '$teleStackCycles', '$teleComments')";
      $q = mysqli_query($conn, $sql);
}
else
{
      $sql = "CREATE TABLE $array ('autoMobility' TINYINT, 'autoMovesYellow' TINYINT, 'autoMovesContainer' TINYINT, 'autoStacks'TINYINT, 'autoMovesStack'TINYINT, 'autoComments'TINYTEXT, 'teleMobility'TINYINT, 'teleDriverSkill'TINYINT, 'teleRobotAbility'TINYINT, 'teleStep'TINYINT, 'teleUpsideDown'TINYINT, 'teleStackCycles'TINYINT, 'teleComments' TINYTEXT)";
      $q = mysqli_query($conn,$sql);    
      $sql1 = "INSERT INTO $array ('autoMobility', 'autoMovesYellow', 'autoMovesContainer', 'autoStacks', 'autoMovesStack', 'autoComments', 'teleMobility', 'teleDriverSkill', 'teleRobotAbility', 'teleStep', 'teleUpsideDown', 'teleStackCycles', 'teleComments') VALUES ('$autoMobility', '$autoMovesYellow', '$autoMovesContainer', '$autoStacks', '$autoMovesStacks', '$autoComments', '$teleDriverSkill', '$teleRobotAbility', '$teleStep', '$teleUpsideDown', '$teleStackCycles', '$teleComments')";
      $q1 = mysqli_query($conn, $sql1);
} 
    

     
    if( !$q || !$q1){
       echo "failed";
       }
   else echo"success!";




?>
        

   
   						