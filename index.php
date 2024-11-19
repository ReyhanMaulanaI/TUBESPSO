<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kopi Senja</title>
  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">
  <!-- feather -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- mystyle -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <!-- navbar start -->

  <nav class="navbar">
    <a href="#" class="navbar-logo">Kopi<span>Senja</span></a>

    <div class="navbar-nav">
      <a href="#">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#contact">Kontak</a>
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
      <a href="logout.php">Logout</a>
      <a href="dashboarduser.php">Halaman User</a>
      <a href="pdashboardadmin.php">Halaman Admin</a>

    </div>

    <div class="navbar-extra">
      <a href="#" id="search"><i data-feather="search"></i></a>
      <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>
  </nav>
  <!-- navbar end -->


  <!-- Hero section start -->
  <section class="hero" id="home">
    <main class="content">
      <h1>Mari Nikmati Secangkir <span>Kopi</span></h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, incidunt?</p>
      <a href="#" class="cta">Beli Sekarang</a>
    </main>
  </section>

  <!-- Hero section end -->


  <!-- About Section Start -->

  <section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>

    <div class="row">
      <div class="about-img">
        <img src="img/Tentang-Kami.jpg" alt="Tentang Kami">
      </div>
      <div class="content">
        <h3>Kenapa Memilih Kopi Kami?</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus facere architecto animi sint minima
          expedita!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptas nihil nam sint molestiae
          aspernatur nobis odio! Quis, voluptatibus a.</p>
      </div>
    </div>

  </section>
  <!-- About Section end -->

  <!-- Menu Section start -->

  <section id="menu" class="menu">
    <h2><span>Menu</span> Kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque, dignissimos. Vel corporis obcaecati ratione
      cumque.</p>

    <div class="row">
      <div class="menu-card">
        <img src="img/Menu/Coffe-Arabica.jpg" alt="Coffe-Arabica" class="menu-card-img">
        <h3 class="menu-card-title">- Coffe Arabica -</h3>
        <p class="menu-car-price">IDR 15K</p>
      </div>
      <div class="menu-card">
        <img src="img/Menu/Coffe-latte.jpg" alt="Coffe-Arabica" class="menu-card-img">
        <h3 class="menu-card-title">- Coffe Latte -</h3>
        <p class="menu-car-price">IDR 17K</p>
      </div>
      <div class="menu-card">
        <img src="img/Menu/Coffe-milk.jpg" alt="Coffe-Arabica" class="menu-card-img">
        <h3 class="menu-card-title">- Coffe Milk-</h3>
        <p class="menu-car-price">IDR 12K</p>
      </div>
      <div class="menu-card">
        <img src="img/Menu/Coffe-with-ice.jpg" alt="Coffe-Arabica" class="menu-card-img">
        <h3 class="menu-card-title">- Coffe With Ice-</h3>
        <p class="menu-car-price">IDR 10K</p>
      </div>
    </div>
  </section>
  <!-- Menu Section end -->



  <!-- Kontak Section start -->
  <section id="contact" class="contact">
    <h2><span>Kontak</span> Kami</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, totam?</p>

    <div class="row">

      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127389.7609960423!2d102.22217617810736!3d-3.825170666032821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e36b01e37e39279%3A0xa079b576e790a6ea!2sBengkulu%2C%20Kota%20Bengkulu%2C%20Bengkulu!5e0!3m2!1sid!2sid!4v1731937489743!5m2!1sid!2sid"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="maps"></iframe>

      <form action="">
        <div class="input-group">
          <i data-feather="user"></i>
          <input type="text" placeholder="nama">
        </div>
        <div class="input-group">
          <i data-feather="mail"></i>
          <input type="text" placeholder="email">
        </div>
        <div class="input-group">
          <i data-feather="phone"></i>
          <input type="text" placeholder="No HP">
        </div>
        <button type="submit" class="btn">Kirim Pesan</button>
      </form>
    </div>
  </section>
  <!-- Kontak Section end -->
  <!-- Login Section -->
  <section class="nav-links">
    <nav>
      <a href="login.php" class="btn">Login</a>
      <a href="registrasi.php" class="btn">Registrasi</a>
      <a href="contact.php" class="btn">Contact Us</a>
    </nav>
  </section>
  <!-- Footer start -->
  <footer>
    <div class="socials">
      <a href="#"><i data-feather="instagram"></i></a>
      <a href="#"><i data-feather="twitter"></i></a>
      <a href="#"><i data-feather="facebook"></i></a>
    </div>
    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="credit">
      <p>Created by <a href="">Fun Project Team</a>/ | &copy; 2024</p>
    </div>
  </footer>
  <!-- Footer end -->

  <!-- feather -->
  <script>
    feather.replace();
  </script>

  <!-- My javascript -->
  <script src="js/script.js"></script>
</body>

</html>