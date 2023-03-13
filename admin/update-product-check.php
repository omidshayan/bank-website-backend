<?php
include_once '../db.php';

$src = "../img-posts/" . $_FILES['img']["name"];
$notif_title = $_POST['title'];
$notif_desc = $_POST['description'];

$sql = "UPDATE `products` SET `title` =?, `description` = ?, `img` = ? WHERE `id` = ?;";
$result = $connect->prepare($sql);
$result->bindValue(1, $notif_title);
$result->bindValue(2, $notif_desc);
$result->bindValue(3, $src);
$result->bindValue(4, $_POST["news_id"]);
if ($result->execute()) {
    move_uploaded_file($_FILES['img']['tmp_name'], $src);
    header("location:update-product.php?ok=10&id=" . $_POST["news_id"]);
} else {
    header("location:update-product.php?error=11&id=" . $_POST["news_id"]);
}
