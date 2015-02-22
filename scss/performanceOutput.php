$mysql_host = "locahost";
$mysql_database = "sigma";
$mysql_user = "admin";
$mysql_password = "team3473"; $temp = $_POST['teamNumber'];
$array = "t".($temp);
//$arr = array($array);
$conn = mysqli_connect("mysql14.000webhost.com", "a1100107_team", "team3473", "a1100107_team");
if (!$conn) 
{
echo "con failed";

}

$sql = 'SELECT teamName, teamNum, cityOfOrigin FROM pit'; 
echo "{$row[0]}"


?>