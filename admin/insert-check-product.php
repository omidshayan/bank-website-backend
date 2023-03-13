<?php
include_once '../db.php';

$src = "../img-posts/" . $_FILES['img']["name"];
$notif_title = $_POST['title'];
$notif_desc = $_POST['description'];

$sql = "INSERT INTO `products` (`id`, `title`,`description`, `img`) VALUES (NULL, ?, ?, ?);";
$result = $connect->prepare($sql);
$result->bindValue(1, $notif_title);
$result->bindValue(2, $notif_desc);
$result->bindValue(3, $src);
if ($result->execute()) {
    move_uploaded_file($_FILES['img']['tmp_name'], $src);
    header("location:insert-product.php?ok=10&id=" . $_POST["news_id"]);
} else {
    header("location:insert-product.php?error=11&id=" . $_POST["news_id"]);
}
