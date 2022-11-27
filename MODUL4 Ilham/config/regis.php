<?php
include_once("connectorUser.php");

$email = $_POST['email'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$sandi = $_POST['sandi'];
$sandikonfirm = $_POST['sandikonfirm'];

if ($sandi == $sandikonfirm) {
    $query = "INSERT INTO users_ilham(email, nama, password, no_hp) VALUES ('$email', '$nama', '$sandi', '$nohp')";
    $result = mysqli_query($koneksi, $query);

    if ($query) {

        header('Location: ../index.php?page=login');
    }else {
        echo 'Gagal';
    }
} else {
    echo "
    <script type='text/javascript'>
    alert('Password Anda Tidak Sama Mungkin :)');
    history.back(self);
    </script>";
}
