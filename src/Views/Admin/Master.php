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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <link rel="stylesheet" href="./assets/Admin/css/main.css">
</head>

<body>
  <div class="container">
    <header class="header">
      <section class="header--wrapper">
        <section class="header--wrapper--search">


        </section>


        <section class="header--wrapper--right">

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

      <section class="content">
        <?php include './src/Views/Admin/ShowAllPrdView.php' ?>

      </section>

    </main>

    <footer></footer>
  </div>


  <script>
    
  </script>

  <script type="module" src="./assets/Admin/js/main.js"></script>
</body>

</html>