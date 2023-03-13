<?php include_once 'header.php'; ?>

    <!-- start • product -->
    <section class="cards m-top">
      <div class="container">
        <div class="top-text">
          <h2 class="home-title">همه محصولات</h2>
        </div>
        <hr class="hr-style" />
        <div class="row">
        <?php 
        include_once "db.php"; 
        $sql = "SELECT * FROM `products` ORDER BY `id` DESC";
        $result = $connect->query($sql);
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        foreach($rows as $row){ ?>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="cards-item product-back m-height">
                        <a href="product.php?id=<?=$row['id']?>">
                            <img src="img-posts/<?=$row['img']?>" alt="">
                            <h2 class="m-top-p desc"><?=$row['title']?></h2>
                            <p class="desc"><?=substr($row['description'],0,71)?>...</p>
                        </a>
                    </div>
                </div>
        <?php } ?>

        </div>
      </div>
    </section>
    <!-- end • product -->

    <?php include_once 'footer.php'; ?>