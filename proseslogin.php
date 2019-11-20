<?php
    include 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)){
        $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username= '$username' AND password='$password'");
        $result = mysql_num_rows($sql);
        if ($result) {
           header('location: home.php');
        }else {
            echo "Username dan Password Salah";
        }
    }

?>