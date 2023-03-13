<!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../asset/styles/grid.css" />
    <link rel="stylesheet" href="../asset/styles/style.css" />
    <title>AUB</title>
  </head>
  <body>
    <!-- start header -->
    <section class="home-page">
      <header>
        <div class="container">
          <nav class="navbar">
            <div class="ham-menu">
              <span></span>
            </div>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="./../" class="nav-link">صفحه اصلی</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link"
                  >درباره ما <i class="fas fa-chevron-down"></i
                ></a>
                <ul>
                  <li><a href="history.php">تاریخچه</a></li>
                  <li><a href="profile.php">پروفایل</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="products.php" class="nav-link">محصولات و خدمات</a>
              </li>
              <li class="nav-item">
                <a href="notification.php" class="nav-link">اطلاعیه ها</a>
              </li>
              <li class="nav-item">
                <a href="contact.php" class="nav-link">تماس با ما</a>
              </li>
            </ul>
            <div class="logo">
              <img src="../asset/img/logo.png" alt="" />
            </div>
          </nav>
        </div>

        <div class="overlay"></div>

        <div class="nav-res">
          <div class="close-menu">
            <i class="fas fa-times"></i>
          </div>
          <img src="../asset/img/logo.png" alt="" />
          <ul>
            <li><a href="./">صفحه اصلی </a></li>
            <li>
              <a href="#">درباره ما</a>
              <span class="submenu"
                ><i class="fas fa-plus"></i><i class="fas fa-minus"></i
              ></span>
              <ul>
                <li><a href="history.php">تاریخچه</a></li>
                <li><a href="profile.php">پروفایل</a></li>
              </ul>
            </li>
            <li><a href="products.php">محصولات</a></li>
            <li><a href="contact.php">تماس با ما</a></li>
          </ul>
        </div>
      </header>
    </section>
    <!-- end header -->
