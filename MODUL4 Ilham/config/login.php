<?php
    include "connectorUser.php";
    $email=$_POST['email'];
    $sandi=$_POST['sandi'];
    
    $query=mysqli_query($koneksi, "SELECT * from users_ilham where email = '$email' && password = '$sandi'");
    $rows=mysqli_num_rows($query);

    if ($rows) {
        $ambildata=mysqli_fetch_assoc($query);
        if (isset($_POST['rememberme'])){
            $remember = $_POST['rememberme'];
            setcookie('rememberme', $remember, time()+87400*30, '/');
        } 
        
        // else{
        //     unset($_COOKIE['rememberme']);
        //     setcookie('rememberme', time()+87400*30, '/');

        // }

        // setcookie('email', $email, time()+86400*30, '/');
        setcookie('sandi', $sandi, time()+86400*30, '/');
        setcookie('nama', $ambildata['nama'], time()+87400*30, '/');
        header('location: ../index.php');

    }else{
        echo "
        <script type='text/javascript'>
        alert('Email & Password Anda Salah Mungkin :)');
        history.back(self);
        </script>";
    }
?>