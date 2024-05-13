<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="stylesheet" href="register.css" />
  </head>
  <body>
    <nav class="navbar">
      <a href="#" class="navbar-logo">
        <img src="images-removebg-preview.png" alt="logo" width="39px" />
        <span>On The Way</span>
      </a>
      <div class="navbar-nav">
        <a href="index.php">Home</a>
        <a href="#about">Tentang kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">kontak</a>
      </div>
    </nav>

    <div class="popup" id="popup">
      <div class="popup-content">
        <span class="close-btn" id="close-btn"
          ><i class="fas fa-times"></i
        ></span>
        <h2>Selamat datang!</h2>
        <p>Nikmati gratis ongkir di aplikasi kami</p>
      </div>
    </div>

    <div class="Register-container">
      <h2>Register</h2>
      <form action="submit-login.php" method="POST">
        <div class="input-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required />
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />
        </div>
        <div class="input-group">
          <label for="Email">Email</label>
          <input type="text" id="Email" name="Email" required />
        </div>
        <button type="submit" id="login-btn">Login</button>
      </form>
      <div class="bottom-text">
        Don't have an account? <a href="login.php">Sign up here</a>
      </div>
    </div>

    <div class="overlay" id="overlay"></div>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const popup = document.querySelector("#popup");
        const overlay = document.querySelector("#overlay");
        const closeButton = document.querySelector("#close-btn");
        const loginButton = document.querySelector("#login-btn");

        loginButton.addEventListener("click", function (e) {
          e.preventDefault();
          popup.classList.add("flip");
          setTimeout(() => {
            popup.classList.remove("flip");
            popup.classList.add("show");
            overlay.style.display = "block";
          }, 500); // Sesuaikan dengan durasi transform di CSS
        });

        closeButton.addEventListener("click", function () {
          popup.classList.remove("show");
          overlay.style.display = "none";
        });

        overlay.addEventListener("click", function () {
          popup.classList.remove("show");
          overlay.style.display = "none";
        });

        // Mengatasi masalah backface-visibility saat menggunakan rotateY
        popup.addEventListener("transitionend", function () {
          if (!popup.classList.contains("show")) {
            popup.classList.remove("backface-invisible");
          } else {
            popup.classList.add("backface-invisible");
          }
        });
      });
    </script>
  </body>
</html>
