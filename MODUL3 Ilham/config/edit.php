<?php

include_once("connector.php");

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $mobil = $_POST['mobil'];
    $pemilik = $_POST['pemilik'];
    $merk = $_POST['merk'];
    $date = $_POST['date'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    $status = $_POST['status'];




    if ($file_tmp) {
        move_uploaded_file($file_tmp, '../asset/'.$foto);
        $query = "UPDATE showroom_ilham_table SET nama_mobil = '$mobil', pemilik_mobil = '$pemilik', merk_mobil = '$merk', tanggal_beli = '$date', deskripsi = '$deskripsi', foto_mobil = '$foto', status_pembayaran = '$status' WHERE id_mobil = $id";
        $result = mysqli_query($mysqli, $query);
    } else {
        $query = "UPDATE showroom_ilham_table SET nama_mobil = '$mobil', pemilik_mobil = '$pemilik', merk_mobil = '$merk', tanggal_beli = '$date', deskripsi = '$deskripsi', status_pembayaran = '$status' WHERE id_mobil = $id";
        $result = mysqli_query($mysqli, $query);
    }

    header("Location: ../index.php?page=mycar&message=none");
}

?>