<?php 
include 'koneksi.php';

if(isset($_POST['login'])) {
    $requestUsername = $_POST['username'];
    $requestPassword = $_POST['password'];

    // Execute the query
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, 's', $requestUsername);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check if there are any results
    if(mysqli_num_rows($result) > 0) {
        // Fetch the row
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password'];

        // Verify the password
        if (password_verify($requestPassword, $hashedPassword)) {
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email']; // Assuming you want to store email as well
            header('Location: admin.php');
            exit();
        } else {
            echo "
            <script>
                alert('Email atau password anda salah, Silahkan coba lagi');
                window.location = 'login.php';
            </script>
            ";
        }
    } else {
        echo "
        <script>
            alert('Email atau password anda salah, Silahkan coba lagi');
            window.location = 'login.php';
        </script>
        ";
    }
}
?>
