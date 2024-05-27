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
      <form action="register-proses.php" method="post">
        <div class="input-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required />
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />
        </div>
        <div class="input-group">
          <label for="email">Email</label>
          <input type="text" id="email" name="email" required />
        </div>
        <button type="submit" id="login-btn">Login</button>
      </form>
      <div class="bottom-text">
        Don't have an account? <a href="Login.php">Sign up here</a>
      </div>
    </div>

    <div class="overlay" id="overlay"></div>
  </body>
</html>
