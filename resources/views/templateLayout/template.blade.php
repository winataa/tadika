<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/admin.css" />

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <script src="https://kit.fontawesome.com/e10401adfd.js" crossorigin="anonymous"></script>

    <title>Admin Dashboard Panel</title>
  </head>
  <body>
    <nav>
      <div class="logo-name">
        <div class="logo-image">
          <img src="img/logo.png" alt="" />
        </div>

        <span class="logo_name">Tadika Laundry</span>
      </div>

      <div class="menu-items">
        <ul class="nav-links">
          <li>
            <a href="admin">
              
              <i class="fa-sharp fa-solid fa-house"></i>
              <span class="link-name">Home</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa-solid fa-chart-simple"></i>              
              <span class="link-name">Stats</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa-solid fa-basket-shopping"></i>
              <span class="link-name">Orders</span>
            </a>
          </li>
          <li>
            <a href="custAdmin">
              <i class="fa-solid fa-person"></i>
              <span class="link-name">Custs</span>
            </a>
          </li>


          <li>
            <a href="#">
              <i class="fa-solid fa-jug-detergent"></i>
              <span class="link-name">Service</span>
            </a>
          </li>

        </ul>



        
        <ul class="logout-mode">
          <li>
            <a href="/">
              <i class="fa-solid fa-right-from-bracket"></i>
              <span class="link-name">Logout</span>
            </a>
          </li>

          <li class="mode">
            <a href="#">
              <i class="fa-solid fa-moon"></i>
              <span class="link-name">Dark Mode</span>
            </a>

            <div class="mode-toggle">
              <span class="switch"></span>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    @yield('hi_admin')
    @yield('hi_cust')

      </div>
    </section>

    <script src="js/admin.js"></script>
  </body>
</html>
