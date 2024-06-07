<?php 
	session_start();
	if (!isset($_SESSION['email']) || $_SESSION['email'] == null) {
		header('Location: login.php');
		exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="css/admin.css" />
    <!-- Link CSS -->
    <script
      src="https://kit.fontawesome.com/a076d05399.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <input type="checkbox" id="check" />
    <label for="check">
      <i class="bx bx-grid-alt" id="btn"></i>
      <i class="bx bx-grid-alt" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>On The Whay</header>
      <ul>
        <li>
          <a href="index.php"><i class="bx bx-dashboard">Dashboard</i></a>
        </li>
        <li>
          <a href="categories.php"><i class="bx bx-category">Categories</i></a>
        </li>
        <li>
          <a href="transaction.php"><i class="bx bx-exchange">Transaction</i></a>
        </li>
        <li>
          <a href="categories-entry.php"><i class="bx bx-entry">Categories-entry</i></a>
        </li>
        <li>
          <a href="logout.php">
	          <i class="bx bx-log-out"></i>
	            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
    </div>
    <header>
      <div class="container">
        <a href="#" class="navbar-logo">
          <img src="images-removebg-preview.png" alt="logo" width="39px" />
          <span>On The Way</span>
        </a>
      </div>
    </header>
    <div class="home-content">
		<center>
			<h2>Selamat Datang</h2>
				<h2 id="text">
					<?php
						if (isset($_SESSION['username'])) {
				  	  echo $_SESSION['username'];
					} else {
				   	 echo "Guest";
						}
					?>
				</h2>
				<h3 id="date"></h3>
			</center>
	</div>
			
<script>
		let sidebar = document.querySelector(".sidebar");
		let sidebarBtn = document.querySelector(".sidebarBtn");
		sidebarBtn.onclick = function() {
			sidebar.classList.toggle("active");
			if (sidebar.classList.contains("active")) {
				sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
			} else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
		};

		function myFunction() {
			const months = ["Januari", "Februari", "Maret", "April", "Mei",
				"Juni", "Juli", "Agustus", "September",
				"Oktober", "November", "Desember"
			];
			const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis",
				"Jumat", "Sabtu"
			];
			let date = new Date();
			jam = date.getHours();
			tanggal = date.getDate();
			hari = days[date.getDay()];
			bulan = months[date.getMonth()];
			tahun = date.getFullYear();
			let m = date.getMinutes();
			let s = date.getSeconds();
			m = checkTime(m);
			s = checkTime(s);
			document.getElementById("date").innerHTML = `${hari}, ${tanggal} ${bulan} ${tahun}, ${jam}:${m}:${s}`;
			requestAnimationFrame(myFunction);
		}

		function checkTime(i) {
			if (i < 10) {
				i = "0" + i;
			}
			return i;
		}
		window.onload = function() {
			let date = new Date();
			jam = date.getHours();
			if (jam >= 4 && jam <= 10) {
				document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Pagi,");
			} else if (jam >= 11 && jam <= 14) {
				document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Siang,");
			} else if (jam >= 15 && jam <= 18) {
				document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Sore,");
			} else {
				document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Malam,");
			}
			myFunction();
		};
	</script>

  </body>
</html>
