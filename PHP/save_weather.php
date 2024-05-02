
<?php 
// received data from FORM
$namecity = $_POST["namecity"];
$date = $_POST["date"];
$temperature = $_POST["temperature"];
$humidity = $_POST["humidity"];
$description = $_POST["description"];
// code save to db
$host = "localhost";
$user = "root";
$pass = "root";
$db = "tun_php";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
  die("Connect database failed");
}
$sql = "INSERT INTO products(namecity,date,temperature,humidity,description) 
                VALUES('$namecity',$date,$temperature,$humidity,'$description')";
$conn->query($sql);
header("Location: /weather.php");
