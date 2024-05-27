<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Entry</title>
    <link rel="stylesheet" href="css/categories-entry.css">
    <script
      src="https://kit.fontawesome.com/a076d05399.js"
      crossorigin="anonymous"
    ></script>
    <input type="checkbox" id="check" />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
</head>
<body>
<label for="check">
      <i class="bx bx-grid-alt" id="btn"></i>
      <i class="bx bx-grid-alt" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>On The Whay</header>
      <ul>
        <li>
          <a href="index.php"><i class="dashboard">Dashboard</i></a>
        </li>
        <li>
          <a href="categories.php"><i class="categories">Categories</i></a>
        </li>
        <li>
          <a href="transaction.php"><i class="jenis">Transaction</i></a>
        </li>
        <li>
        <li>
          <a href="categories-entry.php"><i class="categories-entri">Categories-entry</i></a>
        </li>
          <a href="#"><i class="logout">Log Out</i></a>
        </li>
      </ul>
    </div>
    <div class="container">
        <h1>Category Entry</h1>
        <form>
            <div class="form-group">
                <label for="category-name">Nama Makanan:</label>
                <input type="text" id="category-name" name="category-name" required>
            </div>
            <div class="form-group">
                <label for="category-name">Description:</label>
                <input type="text" id="category-name" name="category-name" required>
            </div>
            <div class="form-group">
                <label for="category-name">Harga:</label>
                <input type="text" id="category-name" name="category-name" required>
            </div>
            <div class="form-group">
                <label for="category-image">Category Image:</label>
                <input type="file" id="category-image" name="category-image" accept="image/*">
            </div>
            <button type="submit" class="submit-button">Submit</button>
        </form>
    </div>
</body>
</html>
