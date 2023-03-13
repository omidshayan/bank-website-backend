<?php
session_start();
include_once "header.php";

if (!isset($_SESSION['admin-panel'])) {
    header("location:index.php");
    exit();
} else { ?>
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
                        <a href="conferences.php">اطلاعیه ها</a>
                        <a href="products.php">محصولات</a>
                    </div>
                    <h5>مدیریت اطلاعیه ها </h5>
                    <?php
                    if (isset($_GET['success'])) {
                        echo '<div class="myOk">اطلاعیه مورد نظر با موفقیت حذف شد!</div>';
                    }
                    ?>
                    <div class="data-over">
                        <table class="table-users">
                            <tr class="tr-main">
                                <td>#</td>
                                <td>عنوان اطلاعیه</td>
                                <td>متن </td>
                                <td>تاریخ انتشار</td>
                                <td>ویرایش</td>
                                <td>حذف</td>
                            </tr>

                            <?php

                            include_once '../db.php';
                            $sql = "select * from notifications ORDER BY `id` DESC";
                            $result = $connect->query($sql);
                            $rows = $result->fetchAll(PDO::FETCH_ASSOC);
                            $number = 1;
                            foreach ($rows as $row) {
                                echo '<tr> 
                        <td>' . $number . '</td>
                        <td>' . $row['title'] . '</td>
                        <td>' . substr($row['description'], 0, 30) . '...</td>
                        <td>' . $row['date'] . '</td> 
                        <td><a href="update-conference.php?id=' . $row['id'] . '">ویرایش</a></td> 
                        <td><a href="delete-conference-check.php?id=' . $row['id'] . '" style="color:red" id="btn">حذف</a></td> 
                    </tr>';
                                $number++;
                            }
                            ?>


                        </table>
                    </div>
                    <div class="new-item">
                        <a href="insert-notification.php" class="new-item">ثبت اطلاعیه جدید</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php }

include_once "footer.php"; ?>