<?php
include_once "../db.php";

$src = "../img-posts/".$_FILES['img'] ["name"];

$notif_title = $_POST['title'];
$notif_desc = $_POST['description'];
$date = date("Y/m/d");

$sql = "INSERT INTO `notifications` (`id`, `title`,`description`, `img`, `date`) VALUES (NULL, ?, ?, ?, ?);";
$result = $connect->prepare($sql);
$result->bindValue(1,$notif_title);
$result->bindValue(2,$notif_desc);
$result->bindValue(3,$src);
$result->bindValue(4,$date);
if($result->execute()){
    move_uploaded_file($_FILES['img'] ['tmp_name'],$src);
    header("location:insert-notification.php?ok=20");
}
else{
    header("location:admin-panel.php?error=39");
}


