<?php
include_once "header.php";
include_once 'db.php';
$sql = "SELECT * FROM `products` WHERE `id` = ?";
$result = $connect->prepare($sql);
$result->bindValue(1, $_GET['id']);
$result->execute();
$data = $result->fetch(PDO::FETCH_OBJ);
?>
<!-- story -->
<div class="pages">
  <div class="container">
    <h2 class="home-title">معرفی محصول: <?=$data->title?></h2>
    <hr class="hr-style" />
    <div class="row align-items-center data-style">
      <div class="col-12 col-sm-6 show-post">
        <div class="text-post">
          <h3 class="text-color"><?= $data->title ?> </h3>
          <br />
          <p class="text-color">
            <?= $data->description ?>
          </p>
        </div>
      </div>
      <div class="col-12 col-sm-6 show-post">
      <img src="img-posts/<?= $data->img ?>" alt="">
      </div>
    </div>
  </div>
</div>
<!-- end story -->

<?php include_once 'footer.php'; ?>