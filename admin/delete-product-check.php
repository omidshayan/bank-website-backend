<?php
include '../db.php';
$sql5 = "DELETE FROM `products` WHERE `id` = ?";
$result5 = $connect->prepare($sql5);
$result5->bindValue(1, $_GET["id"]);
if($result5->execute()) {
    header("location:products.php?success=10");
}
