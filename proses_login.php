<?php
session_start();
require 'koneksi.php';

if(isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query_sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $result = mysqli_query($koneksi, $query_sql);

    if(mysqli_num_rows($result) > 0){

        $_SESSION['email'] = $email;

        header("Location: main.php");
        exit;

    } else {
        echo "Email atau password salah!";
    }

} else {
    echo "Form tidak mengirim data!";
}
?>
