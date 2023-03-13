<?php
session_start();
include_once "header.php"; ?>
<div class="exit">
    <a href="exit.php">خروج</a>
</div>

<div class="title">
    <h4>ویرایش اطلاعیه</h4>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 insert-item">
            <form action="update-notification-check.php" method="post" enctype="multipart/form-data" class="myForm">
                <?php
                if (isset($_GET['ok'])) {
                    echo '<div class="myOk">اطلاعیه جدید با موفقیت ویرایش شد!</div>';
                }
                if (isset($_GET['error'])) {
                    echo '<div class="error">خطا در ویرایش اطلاعیه!</div>';
                }
                include_once '../db.php';
                $sql = "SELECT * FROM `notifications` WHERE `id` = ?";
                $result = $connect->prepare($sql);
                $result->bindValue(1, $_GET['id']);
                $result->execute();
                $data = $result->fetch(PDO::FETCH_OBJ);
                ?>
                <label for="newsTitle"><b>عنوان اطلاعیه </b></label>
                <input type="text" placeholder="عنوان خبر..." value="<?= $data->title ?>" name="title" required>
                <label for="newsDesc"><b> متن کامل اطلاعیه</b></label>
                <textarea placeholder="متن خبر... " name="description" required><?= $data->description ?></textarea>
                <label for="insert-img"><b> انتخاب عکس برای این اطلاعیه &nbsp;&nbsp;&nbsp; </b></label>
                <input type="file" name="img">
                <input type="hidden" value="<?= $_GET["id"] ?>" name="news_id">

                <button type="submit">ویرایش </button>
                <a href="notifications.php">مشاهده اطلاعیه ها</a>
            </form>
        </div>
    </div>
</div>

<?php include_once "footer.php"; ?>