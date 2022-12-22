
<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/user.css" />

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e10401adfd.js" crossorigin="anonymous"></script>

    <title>User Dashboard Panel</title>
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
        <ul class="nav-kiri">
          <li>
            <a href="user">
              <i class="fa-solid fa-user"></i>
              <span class="link-name">My Account</span>
            </a>
          </li>
          <li>
            <a href="order">
              <i class="fa-solid fa-basket-shopping"></i>            
              <span class="link-name">My Orders</span>
            </a>
          </li>
          <li>
            <a href="payment">
              <i class="fa-regular fa-credit-card"></i>
              <span class="link-name">Payment</span>
            </a>
          </li>
          <li>
            <a href="notif">
              <i class="fa-regular fa-bell"></i>
              <span class="link-name">Notifications</span>
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
    @yield('hi_user')
    @yield('hi_orders')
    @yield('hi_payment')
    @yield('hi_notif')
    
      </div>
    </section>

    <script src="js/admin.js"></script>
  </body>
</html>