<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar</title>
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    <nav class="navbar">
      <img src="images-removebg-preview.png" alt="Logo" class="logo" />
      <h3>On The Whay</h3>
      <ul class="nav-list">
        <li><a href="#" onclick="handleMenuClick('Home')">Home</a></li>
        <li>
          <a href="#" onclick="handleMenuClick('Tentang Kami')">Tentang Kami</a>
        </li>
        <li>
          <a href="index.php">Menu</a>
          <ul class="submenu">
            <li>
              <a href="Login.php" onclick="handleSubMenuClick('Login')"
                >Login</a
              >
            </li>
            <li>
              <a href="register.php" onclick="handleSubMenuClick('Register')"
                >Register</a
              >
            </li>
            <li>
              <a
                href="admin.php"
                onclick="handleSubMenuClick('Halaman Admin')"
                >Halaman Admin</a
              >
            </li>
          </ul>
        </li>
        <li><a href="#" onclick="handleMenuClick('Kontak')">Kontak</a></li>
      </ul>
      <div class="search-box">
        <input type="text" placeholder="Cari..." />
        <button type="submit">Cari</button>
      </div>
    </nav>
    <header>
      <div class="container">
        <h1>Welcome to Our Website</h1>
      </div>
    </header>

    <div class="container">
      <<div class="container">
        <div class="carousel-container">
          <div class="carousel-slide" id="carouselSlide">
            <div class="feature">
              <center>
                <img src="pngtree-food-logo-png-image_5296974-removebg-preview.png" width="100px">
                <h3>Kemudahan Pengiriman Makanan</h3> 
              </center>
              <p>"Nikmati Layanan Cepat dan Aman untuk Mencicipi Hidangan Favorit Anda" </p>
            </div>
            <div class="feature">
              <img src="zarla-drinkathon-1x1-2400x2400-20220420-cjkckxqkccp7m7fq4tr9-removebg-preview.png" width="100px">
                <h3>Sajikan Kesegaran Langsung di Pintu Anda! </h3> 
              </center>
              <p>"Pesan Sekarang dan Rasakan Kenikmatan Minuman Favorit Tanpa Harus Keluar Rumah" </p>
            </div>
            <div class="feature">
              <img src="Untitled-removebg-preview.png" width="100px">
                <h3>Pesan Dan Nikmati </h3> 
              </center>
              <p>"Setiap Pengiriman Adalah Cerminan Kepercayaan dan Keamanan Kami. Kami Hadir untuk Menyediakan Layanan Terbaik Demi Kepuasan Pelanggan"</p>
            </div>
          </div>
        </div>

      <div class="cta">
        <h2>Ready to Get Started?</h2>
        <a href="#">Sign Up Now</a>
      </div>
    </div>

    <script>
      function handleMenuClick(menuName) {
        alert("Clicked on " + menuName);
      }

      function handleSubMenuClick(subMenuName) {
        alert("Clicked on submenu: " + subMenuName);
      }
      const carouselSlide = document.getElementById('carouselSlide');
  const features = document.querySelectorAll('.feature');
  const dotsContainer = document.createElement('div');
  dotsContainer.classList.add('carousel-nav');
  carouselSlide.parentNode.insertBefore(dotsContainer, carouselSlide.nextSibling);

  features.forEach((feature, index) => {
    const dot = document.createElement('button');
    dot.classList.add('carousel-dot');
    if (index === 0) dot.classList.add('active');
    dot.onclick = () => moveSlide(index);
    dotsContainer.appendChild(dot);
  });

  let currentIndex = 0;

  function moveSlide(index) {
    currentIndex = index;
    updateSlide();
  }

  function updateSlide() {
    const translateXValue = `calc(-${currentIndex * 100}% - ${currentIndex * 20}px)`;
    carouselSlide.style.transform = `translateX(${translateXValue})`;

    const dots = document.querySelectorAll('.carousel-dot');
    dots.forEach((dot, index) => {
      dot.classList.remove('active');
      if (index === currentIndex) dot.classList.add('active');
    });
  }
    </script>
  </body>
</html>
