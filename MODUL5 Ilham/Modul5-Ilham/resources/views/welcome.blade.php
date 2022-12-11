<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rental Mobil WAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style/index.css?v=<?php echo time(); ?>">

</head>

<body>
    <?php
    function ubahnavbar($warna)
    {
        echo $warna;
    }
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark <?= ubahnavbar($_COOKIE['colour']) ?>" id="<?= isset($_GET['page']) && in_array($_GET['page'], ['regis', 'login']) ? 'hide-nav' : '' ?>">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>" href="
          <?php
            include 'config/connector.php';
            $query = "SELECT * FROM showroom_ilham_table";
            $results = mysqli_query($mysqli, $query);
            if (mysqli_num_rows($results) > 0) {
                echo 'index.php?page=mycar&message=none';
            } else {
                echo 'index.php?page=additem';
            } ?>
          ">MyCar</a>
                    </li>
                </ul>
                <div class="navprofil ms-auto">
                    <a id="<?= isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="nav-link nav-login login-button btn btn-light" href="index.php?page=login">Login</a>
                    <div class="dropdown" id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>">
                        <a class="btn btn-light dropdown-toggle mb-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_COOKIE['nama'] ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?page=profil">Profile</a></li>
                            <li><a class="dropdown-item" href="index.php?page=logout">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <a href="index.php?page=additem" class="addcar-button btn btn-light ms-4 mb-2" class="il" id="<?= isset($_COOKIE['nama']) ? '' : 'hide' ?>">Add Car</a>
            </div>
        </div>

    </nav>

    <?php
    if (isset($_GET['page']) && isset($_GET['id'])) {
        $page = $_GET['page'];
        $id = $_GET['id'];

        switch ($page) {
            case 'detail':
                include "pages/Detail-Ilham.php";
                break;
            case 'edit':
                include "pages/Edit-Ilham.php";
                break;
            default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
        }
    } elseif (isset($_GET['page']) && isset($_GET['message'])) {
        include "pages/ListCar-Ilham.php";
    } else if (isset($_GET['page'])) {
        $page = $_GET['page'];

        switch ($page) {
            case 'additem':
                include "pages/Add-Ilham.php";
                break;
            case 'regis':
                include "pages/Registrasi-Ilham.php";
                break;
            case 'login':
                include "pages/login-Ilham.php";
                break;
            case 'profil':
                include "pages/Profil-Ilham.php";
                break;
            case 'logout':
                include "config/logout.php";
                break;
            default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
        }
    } else {
        include "pages/Home-Ilham.php";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>