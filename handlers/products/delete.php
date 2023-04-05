<?php 
$id=$_GET['id'];
$data = json_decode(file_get_contents("../../data/products.json"), true);
unset($data[$id]);
$data=json_encode($data);
file_put_contents("../../data/products.json", $data);
header("location:../../index.php");
var_dump($data[$id]);


?>