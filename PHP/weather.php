<?php
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "weathercity_php";

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Connect database failed: ");
    }

    $search = isset($_GET["search"]) ? $_GET["search"] :"";
    $sql = "SELECT * FROM weather WHERE namecity LIKE '%$search%'";
    $result = $conn->query($sql);
    $list = [];
    while ($row = $result->fetch_assoc()) {
        $list[] = $row;
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php foreach ($list as $wea): ?>
            <div class="card" style="width: 18rem; margin-top: 20px;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $wea["namecity"]; ?></h5>
                    <p class="card-text">Date: <?php echo $wea["date"]; ?></p>
                    <p class="card-text">Temperature: <?php echo $wea["temperature"]; ?></p>
                    <p class="card-text">Humidity: <?php echo $wea["humidity"]; ?></p>
                    <p class="card-text">Description: <?php echo $wea["description"]; ?></p>
                    <a href="/edit_weather.php?id=<?php echo $wea["id"]; ?>">Edit</a>
                    <a onclick="return confirm('Are you sure delete product?')" 
                    class="text-danger" href="/delete_weather.php?id=<?php echo $wea["id"]; ?>">
                    Delete</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
