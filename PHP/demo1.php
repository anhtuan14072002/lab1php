<?php
// echo "DEMO";
$arr = []; //array
$arr[] = 5;
$arr[] = "XYZ";
$arr[] = 18;
$arr[] = 22;

for ($i = 0; $i<count($arr); $i++) {
    echo $i."=".$arr[$i]."<br/>";
}

foreach ($arr as $item){ //$item <=> $arr[$i]
    echo $item."<br/>";
}

foreach ($arr as $key=>$item){ //$item <=> $arr[$i]
    echo $key."=".$item."<br/>";
}
$student= [];
$student["name"] = "Nguyen Van An";
$student["age"] = 19;
$student["tel"] = "0965753987";
echo "<br/>Thong tin sinh vien <br/>";
foreach ($student as $data){
    echo $data."<br/>";
}
//echo $student["name"];
foreach ($student as $key=>$data){
    echo $key.":".$data."<br/>";
}

$product = [
    "name" => "iphone 15",
    "price" => 1000,
    "qty" => 5,
    "description" => "san phan dang hot"
];
echo "<br/> Thong tin san pham: <br/>";
echo $product["name"]."<br/>".$product["price"];
$list= [];
$list[] = [
    "name" => "iphone 14",
    "price" => 1000,
    "qty" => 5,
    "description" => "san phan dang hot"
];

$list[] = [
    "name" => "iphone 15",
    "price" => 1000,
    "qty" => 2,
    "description" => "san phan dang hot"
];

foreach ( $list as $p){
    echo "<br/> Thong tin san pham <br/>";
    echo $p["name"]."-".$p["price"];
}
