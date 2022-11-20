<?php
include "Connector.php";

$id = $_GET['id'];

   $gambar = mysqli_query($mysqli, "SELECT foto_mobil FROM showroom_ilham_table WHERE id_mobil = $id");
   $baris = mysqli_fetch_assoc($gambar);

   unlink("../asset/".$baris['foto_mobil']);

   $query = "DELETE FROM showroom_ilham_table WHERE id_mobil = $id";
   $result = mysqli_query($mysqli, $query);

   header('Location: ../index.php?page=myitem&message=delete-item');