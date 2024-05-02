
<?php 
$id = $_GET["id"];

// code save to db
$namecity = "namecity";
$date = "date";
$temperature = "temperature";
$humidity = "humidity";
$description = "description";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
  die("Connect database failed");
}
$sql = "DELETE FROM weather WHERE id = $id";
$conn->query($sql);
header("Location: /weather.php");
