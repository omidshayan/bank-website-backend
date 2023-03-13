<?php
session_start();
include_once 'header.php'; 

if(!isset($_SESSION['admin-panel']) ){
        header("location:index.php");
        exit();
}else{ ?>
<h2 class="admin-title">بخش مدیریت</h2>
<div class="admin-panel">
    <div class="admin-menu">
        <a href="conferences.php">کنفرانس ها</a>
        <a href="products.php"> محصولات</a>
    </div>
</div>

<div class="exit">
    <a href="exit.php">خروج از بخش مدیریت</a>
</div>

<?php }
?>

<?php include_once 'footer.php'; ?>