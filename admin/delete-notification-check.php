<?php
include '../db.php';
$sql5 = "DELETE FROM `notifications` WHERE `id` = ?";
$result5 = $connect->prepare($sql5);
$result5->bindValue(1, $_GET["id"]);
if($result5->execute()) {
    header("location:notifications.php?success=10");
}
