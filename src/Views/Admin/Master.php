<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Dashboard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="./assets/Admin/css/main.css">
</head>

<body>
  <div class="container">
    <header class="header">
      <section class="header--wrapper">
        <section class="header--wrapper--left">
          <div class="header--logo">
            <a href="#">
              <img class="header--logo__img" src="https://picsum.photos/24/24" alt="">
            </a>
          </div>

          <div class="header--review">
            <a href="#" class="header--link">
              <i class='header--link__icon bx bx-home-alt'></i>
              <p class="header--link__text">Preview</p>
            </a>
          </div>

          <div class="header--addNew">
            <a href="#" class="header--link">
              <i class='header--link__icon bx bx-plus'></i>
              <p class="header--link__text">Add new</p>
            </a>
          </div>

        </section>
        <section class="header--wrapper--right">
          <section class="header--account">
            <a href="#" class="header--account--link">
              <p class="header--account__text">Welcome, <span>Thenam2kx</span></p>
              <img class="header--account__img" src="https://picsum.photos/28/28" alt="">
            </a>
          </section>
        </section>
      </section>
    </header>

    <main class="main">
      <aside class="aside">
        <ul class="menu">
          <li class="menu--item">
            <a class="menu--item__link active" href="">Dashbord</a>
          </li>

          <li class="menu--item haveDropdowns">
            <p class="menu--item__link">Products <i class='iconDropdowns bx bx-caret-right'></i></p>
            <ul class="dropdowns">
              <li class="dropdowns--item">
                <a class="dropdowns--item__link" href="">Show All products</a>
              </li>
              <li class="dropdowns--item">
                <a class="dropdowns--item__link" href="">Update Product</a>
              </li>
              <li class="dropdowns--item">
                <a class="dropdowns--item__link" href="">Add Product</a>
              </li>
            </ul>
          </li>

          <li class="menu--item haveDropdowns">
            <p class="menu--item__link">Category <i class='iconDropdowns bx bx-caret-right'></i></p>
            <ul class="dropdowns">
              <li class="dropdowns--item">
                <a class="dropdowns--item__link" href="">Show All Category</a>
              </li>
              <li class="dropdowns--item">
                <a class="dropdowns--item__link" href="">New Category</a>
              </li>
            </ul>
          </li>

          <li class="menu--item haveDropdowns">
            <p class="menu--item__link">Users <i class='iconDropdowns bx bx-caret-right'></i></p>
            <ul class="dropdowns">
              <li class="dropdowns--item">
                <a class="dropdowns--item__link" href="">Show All Users</a>
              </li>
              <li class="dropdowns--item">
                <a class="dropdowns--item__link" href="">Add New user</a>
              </li>
            </ul>
          </li>

          <li class="menu--item">
            <a class="menu--item__link" href="">Setting</a>
          </li>
        </ul>
      </aside>

    </main>

    <footer></footer>
  </div>

  <script type="module" src="./assets/Admin/js/main.js"></script>
</body>
</html>