<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="Ilham_home.css" class="href">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Ilham_index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Ilham_index.php?page=booking">Booking</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php 
            if(isset($_GET['page'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 'booking':
                        include "Ilham_booking.php";
                        break;
                    case 'mybooking':
                        include "Ilham_mybooking.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }


            } else if (isset($_GET['mobil'])) {
                $tipe = $_GET['mobil'];

                if(in_array($tipe, ['fortuner vrz', 'innova vw', 'Pajero 12'])) {
                    include "Ilham_booking.php";
                }
            } else {
                include "Ilham_home.php";
            }

     ?>
<footer class="bg-light p-5 mt-5">
  <div class="text-center">
        <span class="ps-1 "> Created by ILHAM SURYO LAKSONO_1202200137 </span>
      </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>