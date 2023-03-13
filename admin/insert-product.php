<?php include_once "header.php"; ?>
<div class="exit">
    <a href="exit.php">خروج از بخش مدیریت</a>
</div>

<div class="title">
    <h4>ثبت محصول جدید</h4>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 insert-item">
                <form action="insert-check-product.php" method="post" enctype="multipart/form-data" class="myForm">
                    <?php  
                        if(isset($_GET['ok'])){
                            echo '<div class="myOk">محصول جدید با موفقیت ثبت شد!</div>';
                        }
                    ?>
                    <label for="newsTitle"><b>عنوان محصول </b></label>
                    <input type="text" placeholder="عنوان محصول..." name="title" required>
                    <label for="newsDesc"><b> متن کامل محصول</b></label>
                    <textarea  placeholder="متن محصول... " name="description" required></textarea>
                    <label for="insert-img"><b> انتخاب عکس برای این محصول  &nbsp;&nbsp;&nbsp; </b></label>
                    <input type="file" name="img">
                    <button type="submit">ثبت محصول</button>
                    <a href="products.php">مشاهده محصولات</a>
                </form>
        </div>
    </div>
</div>



<?php include_once "footer.php"; ?>