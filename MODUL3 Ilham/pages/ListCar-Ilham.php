<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <div class="row header">
      <div class="col">
        <h1 class="display-4"><b>My Show Room</b> </h1>
        <p class="lead">List Show Room Ilham - 1202200137 </p>

        <div class="container containerCard">
          <?php
          include_once("config/connector.php");

          $query = mysqli_query($mysqli, 'SELECT * FROM `showroom_ilham_table`');

          if ($query) {
            while ($selects = mysqli_fetch_array($query)) {
          ?>
              <div class="card">
                <img src="asset/<?php echo $selects['foto_mobil']; ?>" class="card-img-top card-img" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $selects['nama_mobil'] ?></h5>
                  <p class="card-text"><?php echo $selects['deskripsi'] ?></p>
                  <div class="bg-light btn-container"><a href="index.php?page=detail&id=<?= $selects['id_mobil'] ?>" class="btn btn-primary rounded-pill">Detail</a>
                  <a href="config/delete.php?id=<?= $selects['id_mobil'] ?>" type="button" class="btn btn-danger rounded-pill">Deleted</a>
                  </div>
                </div>
              </div>
          <?php
            }
          }
          ?>
        </div>

        <div class="toast <?= $_GET['message'] != 'none' ? 'show' : '' ?>" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="1000">
        <div class="toast-header">
            <?php 
                $message = $_GET['message'];

                switch ($message) {
                    case 'delete-item':
                        echo '<span class="delete-item"></span>';
                        break;
                    default:
                        break;
                }
            ?>
            <strong class="me-auto toast-alert">Alert</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <?php 
                $message = $_GET['message'];

                switch ($message) {
                    case 'delete-item':
                        echo 'Data berhasil dihapus!';
                        break;
                    default:
                        break;
                }
            ?>
        </div>
    </div>
</body>

</html>