<?php include_once 'header.php'; ?>
<!-- slider -->
<section class="slider">
  <div class="slider-item">
    <div class="item active">
      <div class="img" style="background-image: url('asset/img/slider1.jpg')"></div>
      <div class="caption">
        <h1>تایتل متن دلخواه</h1>
        <p>توضیحات تکمیلی تایتل</p>
      </div>
    </div>
    <div class="item">
      <div class="img" style="background-image: url('asset/img/slider2.jpg')"></div>
      <div class="caption">
        <h1>تایتل متن دلخواه</h1>
        <p>توضیحات تکمیلی تایتل</p>
      </div>
    </div>
    <div class="item">
      <div class="img" style="background-image: url('asset/img/slider3.jpg')"></div>
      <div class="caption">
        <h1>تایتل متن دلخواه</h1>
        <p>توضیحات تکمیلی تایتل</p>
      </div>
    </div>
  </div>
  <div class="controls">
    <div class="next"><i class="fas fa-chevron-right"></i></div>
    <div class="prev"><i class="fas fa-chevron-left"></i></div>
  </div>
  <div class="progress"></div>
</section>
<!-- end slider-->

<!-- story -->
<div class="history">
  <div class="container">
    <h2 class="home-title">تاریخچه</h2>
    <hr class="hr-style" />
    <div class="row align-items-center data-style">
      <div class="col-12 col-sm-6 show-post">
        <div class="text-post">
          <h3 class="text-color">تاریخچه مختصر از بانک</h3>
          <br />
          <p class="text-color">
            افغان یونایتد بانک یک بانک عصری شخصی تجارتی میباشد که به تاریخ 4
            ماه اکتوبر 2007 تأسیس گردیده است. این بانک جواز کاری خویش را نظر
            به قانون بانکداری افغانستان از بانک مرکزی( د افغانستان بانک) و
            جواز تجارتی خویش را از اداره حمایه سرمایه گذاری افغانستان(آیسا)
            بدست آورده است. بانک مذکور با داشتن 27 نماینده گی در ولایت های
            کابل، ننگرهار، کندهار، بلخ، هرات، کندز، پروان، هلمند، نیمروز،
            خوست، و دیگر شهرهای بزرگ کشور فعالیت دارد. و در تمام نماینده گای
            های خویش خدمات مالی در بخش های بانکداری اسلامی و عمومی عرضه
            مینماید.
          </p>
        </div>
      </div>
      <div class="col-12 col-sm-6 show-post">
        <img src="asset/img/chart.jpg" alt="" />
      </div>
    </div>
  </div>
</div>
<!-- end story -->

<!-- start • product -->
<section class="cards">
  <div class="container">
    <div class="top-text">
      <h2 class="home-title">محصولات</h2>
      <span class="show-all"><a href="products.php">نمایش همه محصولات</a> </span>
    </div>
    <hr class="hr-style" />

    <div class="row">
      <?php
      include_once "db.php";
      $sql1 = "SELECT * FROM `products` ORDER BY `id` DESC LIMIT 4";
      $result1 = $connect->query($sql1);
      $rows1 = $result1->fetchAll(PDO::FETCH_ASSOC);
      foreach ($rows1 as $row1) { ?>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="cards-item product-back m-height">
            <a href="product.php?id=<?= $row1['id'] ?>">
              <img src="img-posts/<?= $row1['img'] ?>" alt="">
              <h4 class="m-top-p"><?= $row1['title'] ?></h4>
              <p class="desc text-color"><?= substr($row1['description'], 0, 71) ?>...</p>
            </a>
          </div>
        </div>
      <?php } ?>
    </div>

  </div>
  </div>
</section>
<!-- end • product -->

<!-- start • noitf -->
<section class="cards">
  <div class="container">
    <div class="top-text">
      <h2 class="home-title">اطلاعیه ها</h2>
      <span class="show-all"><a href="notification.php">نمایش همه اطلاعیه</a> </span>
    </div>
    <hr class="hr-style" />
    <div class="row">
    <?php
      include_once "db.php";
      $sql1 = "SELECT * FROM `notifications` ORDER BY `id` DESC LIMIT 4";
      $result1 = $connect->query($sql1);
      $rows1 = $result1->fetchAll(PDO::FETCH_ASSOC);
      foreach ($rows1 as $row1) { ?>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="cards-item notif-back">
          <a href="notif.php?id=<?=$row1['id']?>">
              <img src="img-posts/<?= $row1['img'] ?>" alt="">
              <h4 class="m-top-p text-color"><?= $row1['title'] ?></h4>
              <p class="desc"><?= substr($row1['description'], 0, 71) ?>...</p>
              <div class="date"><?= $row1['date'] ?></div>
            </a>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- end •  noitf -->

<!-- start • Bank accounts -->
<section class="cards">
  <div class="container">
    <div class="top-text">
      <h2 class="home-title">حسابات بانکی</h2>
    </div>
    <hr class="hr-style" />
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="cards-item account-back">
          <a href="acount.html">
            <img src="asset/img/account1.jpg" alt="" />
            <h3>dfgfgfdgfdgfg fdg fdgfdg f bank</h3>
          </a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="cards-item account-back">
          <a href="acount.html">
            <img src="asset/img/account2.jpg" alt="" />
            <h3>acount bank</h3>
          </a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="cards-item account-back">
          <a href="acount.html">
            <img src="asset/img/account3.jpg" alt="" />
            <h3>acount bank</h3>
          </a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="cards-item account-back">
          <a href="acount.html">
            <img src="asset/img/account4.jpg" alt="" />
            <h3>acount bank</h2>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end • Bank accounts -->

<?php include_once 'footer.php'; ?>