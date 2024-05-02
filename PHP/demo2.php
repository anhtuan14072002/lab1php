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
    <?php
        // PHP code here
        $n = 13;
        $product = [
            "name" => "iPhone 15",
            "price" => 1000,
            "description" => "Sản phẩm đang hot"
        ];
    ?>
    <h1>Hello world!</h1>
    <h2>Số người đang có trên lớp: <?php echo $n; ?></h2>
    <div class="card" style="width: 18rem;">
        <img src="./images/ip15prm.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Thông tin sản phẩm</h5>
            <p class="card-text">
                Tên sản phẩm: <?php echo $product["name"]; ?><br>
                Giá: $<?php echo $product["price"]; ?><br>
                Mô tả: <?php echo $product["description"]; ?>
            </p>
            <a href="#" class="btn btn-primary">
                Xem chi tiết
            </a>
        </div>
    </div>
</body>
</html>
