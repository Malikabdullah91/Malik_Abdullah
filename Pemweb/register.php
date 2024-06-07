<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo">
              <img src = "images-removebg-preview.png" width="50px"/>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="#shop">Shop</a></li>
                    <li><a href="" class="button1">Register</a></li>
                </ul>
            </div>
    </nav>
    <div class="container">
                <div class="Register form">
                    <header>Form Registrasi</header>
                    <form action="register-proses.php" method="post">
                        <input type="username" name="username" placeholder="Masukkan Username">
                        <input type="password" name="password"  placeholder="Masukkan Password">
                        <input type="email" name="email" placeholder="Masukkan Ulang Email">
                        <button type="submit" class="btn_login" name="register"
				id="register">
				Register
		    </button>
                    </form>
                    <div class="signup">
                        <span class="signup">Sudah Punya Akun?</span>
                        <a href="login.php">Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>