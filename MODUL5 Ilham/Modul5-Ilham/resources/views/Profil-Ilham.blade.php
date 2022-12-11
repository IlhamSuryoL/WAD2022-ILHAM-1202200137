<?php

include 'config/connectorUser.php';

$email = $_COOKIE['email'];
$query = mysqli_query($koneksi, "SELECT * FROM users_ilham WHERE email = '$email'");
$hasil = mysqli_fetch_assoc($query);

?>


<form action="config/editprofil.php" method="post">
    <div class="container mt-5">
        <div class="judul-kategori">
            <h5 class="text-center">Profile</h5>
        </div>
        <div class="form-group mb-3 wit row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" name="emailku" readonly class="form-control-plaintext" id="staticEmail" value="<?= $email ?> ">
            </div>
        </div>
        <div class="form-group mb-3 wit row">
            <label for="profilename" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="namaku" class="form-control" value="<?= $hasil['nama'] ?>" id="profilename">
            </div>
        </div>
        <div class="form-group mb-4 wit row">
            <label for="profileno" class="col-sm-2 col-form-label">No Handphone</label>
            <div class="col-sm-10">
                <input type="text" name="nohpku" class="form-control" value="<?= $hasil['no_hp'] ?>" id="profileno">
            </div>
        </div>

        <hr class="mb-4">

        <div class="form-group mb-4 wit row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" name="sandiku" class="form-control" id="inputPassword" value="">
            </div>

            <div class="form-group mt-2 wit row">
                <label for="confirmpassword" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                    <input type="password" name="sandiconfirm" class="form-control" id="confirmpassword" value="">
                </div>

                <div class="form-group mt-2 wit row">
                    <label for="car" class="col-sm-2 col-form-label">Navbar</label>
                    <div class="col-sm-10">
                        <select name="colour" id="colour" class="form-select">
                            <option <?= isset($_COOKIE['colour']) && $_COOKIE['colour'] == 'Blue' ? 'selected' : '' ?> value="Blue">Blue</option>
                            <option <?= isset($_COOKIE['colour']) && $_COOKIE['colour'] == 'pink' ? 'selected' : '' ?> value="pink">Pink</option>
                            <option <?= isset($_COOKIE['colour']) && $_COOKIE['colour'] == 'maroon' ? 'selected' : '' ?>value="maroon">Maroon</option>
                            <option <?= isset($_COOKIE['colour']) && $_COOKIE['colour'] == 'green' ? 'selected' : '' ?>value="green">Green</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5">Update</button>
                    <div>
                        <div class="identitas">
                            <img class="kiri" src="asset/logo-ead.png" alt="Mycar" class="img-fluid">
                            <p class="nim">Ilham_1202200137</p>
                        </div>
                    </div>
                </div>

</form>