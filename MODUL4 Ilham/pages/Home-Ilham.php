<div class="container mt-5">
    <div class="row header">
        <div class="col">
            <h1 class="display-4"><b>Selamat Datang di Showroom Ilham</b> </h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
            <a class="btn btn-primary btn-lg" href="

                   <?php 
                    include 'config/connector.php';
                    $query = "SELECT * FROM showroom_ilham_table"; 
                    $results = mysqli_query($mysqli, $query);
                    if (mysqli_num_rows($results) > 0) {
                        echo 'index.php?page=mycar&message=none';
                    } else {
                        echo 'index.php?page=additem';
                    } ?>
                    ">Mycar</a>
            <div class="identitas">
                <img class="kiri" src="asset/logo-ead.png" alt="Mycar" class="img-fluid">
                <p class="nim">Ilham_1202200137</p>
            </div>
        </div>

        <div class="col">
            <img class="kanan" src="asset/Car1.png" alt="Mycar" class="img-fluid">
        </div>


    </div>
</div>