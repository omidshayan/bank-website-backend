<?php include_once 'header.php'; ?>

<!-- start • noitf -->
<section class="cards m-top">
  <div class="container">
    <div class="top-text">
      <h2 class="home-title">اطلاعیه ها</h2>
      <span class="show-all"><a href="views/products.php">نمایش همه اطلاعیه</a> </span>
    </div>
    <hr class="hr-style" />
    <div class="row">
      <?php
      include_once "db.php";
      $sql = "SELECT * FROM `notifications` ORDER BY `id` DESC";
      $result = $connect->query($sql);
      $rows = $result->fetchAll(PDO::FETCH_ASSOC);
      foreach ($rows as $row) { ?>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="cards-item notif-back">
            <a href="notif.php?id=<?=$row['id']?>">
            <img src="img-posts/<?=$row['img']?>" alt="">
              <h3><?=$row['title']?></h3>
              <div class="date"><?=$row['date']?></div>
            </a>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</section>
<!-- end •  noitf -->


<?php include_once 'footer.php'; ?>