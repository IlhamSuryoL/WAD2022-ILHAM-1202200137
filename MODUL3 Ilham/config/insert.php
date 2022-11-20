<?php
include_once("connector.php");
if(isset($_POST['Submit'])) {
    $mobil = $_POST['mobil'];
    $pemilik = $_POST['pemilik'];
    $merk = $_POST['merk'];
    $date = $_POST['date'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    $status = $_POST['status'];

    move_uploaded_file($file_tmp, '../asset/'.$foto);
    $result = mysqli_query($mysqli, "INSERT INTO showroom_ilham_table(nama_mobil,pemilik_mobil,merk_mobil,tanggal_beli,deskripsi,foto_mobil,status_pembayaran) VALUES('$mobil','$pemilik','$merk','$date','$deskripsi','$foto','$status')");

  //   if($result) {
  //     echo "<script>alert('Data telah ditambahkan yak guys')</script>";
  //     echo "<meta http-equiv='refresh' content='1 url=http://localhost/Praktikum%20WAD/MODUL3%20Ilham/index.php?page=mycar'>";
  //  } else {
  //     echo "<script>alert('Gagal ditambahkan guys')</script>";
  //     echo "<meta http-equiv='refresh' content='1 url=http://localhost/Praktikum%20WAD/MODUL3%20Ilham/index.php?page=mycar'>";
  //   }
if($result){
  header('Location: ../index.php?page=myitem&message=none');
}
}
?>