<?php
  // query to DB 
  //1. connect db
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "tun_php";

    $conn = new mysqli($host,$user,$pass,$db);
    if($conn->connect_error){
      die("Connect database failed");
    }
  //2. query SQL
    //2.1 lấy tham số
    $search = isset($_GET["search"]) ? $_GET["search"] :"";
    //2.2. áp dụng giá trị tham số vào truy vấn
    $sql = "SELECT * FROM categories  WHERE name LIKE '%$search%' ";
    $result = $conn->query($sql);
    $list = []; 
    while($row = $result->fetch_assoc()){
      $list[] = $row;
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <form action="#" method="GET">
            <div class="row">
                <div class="col">
                    <input name="search" placeholder="Search" type="text" class="form-control" />
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list as $sp) { ?>
                    <tr>
                        <th scope="row"><?php echo $sp["id"]; ?></th>
                        <td><?php echo $sp["name"]; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>