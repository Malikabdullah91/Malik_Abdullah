<?php 
include 'koneksi.php';

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password_raw = $_POST["password"];
    $password = password_hash($password_raw, PASSWORD_DEFAULT);

    if (empty($email) || empty($username) || empty($password_raw)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'register.php';
            </script>
        ";
    } else {
        $sql = "INSERT INTO tb_admin (email, password, username) VALUES ('$email', '$password', '$username')";

        if (mysqli_query($koneksi, $sql)) {
            echo "
                <script>
                    alert('Registrasi Berhasil Silahkan login');
                    window.location = 'login.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Terjadi Kesalahan');
                    window.location = 'register.php';
                </script>
            ";
        }
    }
}
?>
