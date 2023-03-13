<?php include_once 'header.php'; ?>
<div class="col-12 col-sm-6 login-form">   
        <h3>ورود به بخش مدیریت</h3>
        <form action="admin-check-login.php" method="post" class="myForm">
        <div class="imgcontainer">
            <img src="../asset/img/avatar-login.png" alt="Avatar" class="avatar">
        </div>
<?php
    if(isset( $_GET['error'])){
        echo '<h5 class="my-event">اطلاعات وارد شده اشتباه است!</h5>';
    }

?>
        <div class="container">
            <label for="uname"><b>نام کاربری</b></label>
            <input type="text" placeholder="ایمیل خود را وارد نمایید... " name="username" required>
            <label for="psw"><b>رمز عبور</b></label>
            <input type="password" placeholder="رمز عبور خود را وارد کنید... " name="password" required>
            <button type="submit">ورود</button>
        </div>
        </form>
    </div>
    <?php include_once 'footer.php'; ?>