<?php
session_start();
include_once "header.php"; ?>
<div class="exit">
    <a href="exit.php">خروج از بخش مدیریت</a>
</div>
<div class="title">
    <h4> بخش مدیریت </h4>
</div>
<div class="container">
    <div class="row"> 
        <div class="col-12 col-sm-12 login-form">
            <div class="admin-panel">
                <div class="admin-menu">
                    <a href="notifications.php">اطلاعیه ها</a>
                    <a href="products.php"> محصولات</a>
                </div>
                <h5>مدیریت محصولات </h5>
                <?php
                if (isset($_GET['success'])) {
                    echo '<div class="myOk">محصول مورد نظر با موفقیت حذف شد!</div>';
                }
                ?>
                <div class="data-over">
                    <table class="table-users">
                        <tr class="tr-main">
                            <td>#</td>
                            <td>عنوان محصول</td>
                            <td>توضیحات </td>
                            <td>ویرایش</td>
                            <td>حذف</td>
                        </tr>
                        <?php
                        include_once '../db.php';
                        $sql = "select * from products ORDER BY `id` DESC";
                        $result = $connect->query($sql);
                        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
                        $number = 1;
                        foreach ($rows as $row) {
                            echo '<tr> 
                        <td>' . $number . '</td>
                        <td>' . $row['title'] . '</td>
                        <td>' . substr($row['description'], 0, 30) . '...</td>
                        <td><a href="update-product.php?id=' . $row['id'] . '">ویرایش</a></td> 
                        <td><a href="delete-product-check.php?id=' . $row['id'] . '" style="color:red" id="btn">حذف</a></td> 
                    </tr>';
                            $number++;
                        }
                        ?>
                    </table>
                </div>
                <div class="new-item">
                    <a href="insert-product.php" class="new-item">ثبت محصول جدید</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once "footer.php"; ?>