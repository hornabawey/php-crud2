<?php 

if($_SERVER['REQUEST_METHOD']=="POST"){


    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];


    echo $name ."<br>";
    echo $price ."<br>";
    echo $description."<br>";
$data = json_decode(file_get_contents("../../data/products.json"), true);


$file=$_FILES['img'];
$img_name=$file['name'];
move_uploaded_file($file['tmp_name'], "../../uploads/".$img_name);
$data[]=[
    "name"=>$name,
    "price"=>$price,
    "description"=>$description,
    "img"=>$img_name,
];




$data=json_encode($data);
file_put_contents("../../data/products.json", $data);




}



?>