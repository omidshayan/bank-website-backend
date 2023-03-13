<?php include_once "header.php"; ?>
<div class="exit">
    <a href="exit.php">خروج از بخش مدیریت</a>
</div>

<div class="title">
    <h4>ثبت اطلاعیه جدید</h4>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 insert-item">
            <form action="insert-notification-check.php" method="post" enctype="multipart/form-data" class="myForm">
                <?php
                if (isset($_GET['ok'])) {
                    echo '<div class="myOk">اطلاعیه جدید با موفقیت ثبت شد!</div>';
                }
                ?>
                <label for="newsTitle"><b>عنوان اطلاعیه </b></label>
                <input type="text" placeholder="عنوان اطلاعیه..." name="title" required>
                <label for="newsDesc"><b> متن کامل اطلاعیه</b></label>
                <textarea placeholder="متن اطلاعیه... " name="description" required></textarea>
                <label for="insert-img"><b> انتخاب عکس برای این اطلاعیه &nbsp;&nbsp;&nbsp; </b></label>
                <input type="file" name="img">
                <button type="submit">ثبت </button>
                <a href="notifications.php">مشاهده اطلاعیه ها</a>
            </form>
        </div>
    </div>
</div>



<?php include_once "footer.php"; ?>