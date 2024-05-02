<?php
    $id = $_GET["id"];
    
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "weathercity_php";

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Connect database failed: ");
    }

    $sql = "SELECT * FROM weather WHERE id = $id ";
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
    <title>Edit Weather</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1>Edit weather</h1>
    <form action="/update_weather.php?id=<?php echo $id;?>" method="post">
        <div class="mb-3">
            <label class="form-label">Namecity</label>
            <input value="<?php echo $weather["namecity"]; ?>" type="text" name="name" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Date</label>
            <input value="<?php echo $weather["date"]; ?>"  type="text" name="price" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Temperature</label>
            <input value="<?php echo $weather["temperature"]; ?>"  type="number" name="qty" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Humidity</label>
            <input value="<?php echo $weather["humidity"]; ?>"  type="number" name="qty" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description"class="form-control">
                <?php echo $weather["description"]; ?>
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>
