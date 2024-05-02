<?php 
$id = $_GET["id"];

$namecity = $_POST["namecity"];
$date = $_POST["date"];
$temperature = $_POST["temperature"];
$humidity = $_POST["humidity"];
$description = $_POST["description"];

// code save to db
$host = "localhost";
$user = "root";
$pass = "root";
$db = "weather_php";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
  die("Connect database failed");
}
$sql = "UPDATE products set namecity='$namecity', date=$date, temperature=$temperature, humidity=$humidity,
            description='$description' WHERE id = $id";
$conn->query($sql);
header("Location: /weather.php");