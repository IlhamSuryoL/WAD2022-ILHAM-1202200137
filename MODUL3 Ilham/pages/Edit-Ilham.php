<?php
include_once('config/connector.php');

$id = $_GET['id'];

$query = mysqli_query($mysqli, "SELECT * FROM showroom_ilham_table WHERE id_mobil=$id");
$detail = mysqli_fetch_assoc($query);
?>

<div class="container mt-3">
    <h4 class="display-4"><b>Edit</b> </h4>
    <p class="lead">Edit Mobil BMW i4</p>
</div>
<div class="gridedit">
    <div class="bl">
        <img src="asset/<?= $detail['foto_mobil'] ?>" alt="car" class="booking-img">
    </div>
    <div class="br">
        <form action="config/edit.php" enctype="multipart/form-data" method="post">
            <div class="mb-3">
                <label for="Name1" class="form-label">Nama Mobil</label>
                <input type="text" placeholder="BMW I4" name="mobil" value="<?= $detail['nama_mobil'] ?>" class="form-control" id="Name1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="Name2" class="form-label">Nama Pemilik</label>
                <input type="text" placeholder="Ilham - 1202200137" name="pemilik" value="<?= $detail['pemilik_mobil'] ?>" class="form-control" id="Name2">
            </div>
            <div class="mb-3">
                <label for="Merk" class="form-label">Merk</label>
                <input type="text" placeholder="BMW" name="merk" value="<?= $detail['merk_mobil'] ?>" class="form-control" id="Merk1">
            </div>
            <div class="mb-3">
                <label for="Date1" class="form-label">Tanggal Beli</label>
                <input type="date" value="<?= $detail['tanggal_beli'] ?>" name="date" class="form-control" id="Date1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"><?= $detail['deskripsi'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="Foto1" class="form-label">Foto</label>
                <input type="file" name="foto" value="<?= $detail['foto_mobil'] ?>" class="form-control" id="foto1">
            </div>
            <div class="mb-3">
                <label>Status Pembayaran</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Lunas" name="status" <?php echo $detail['status_pembayaran'] == 'lunas' ? 'checked' : '' ?> <?php echo $detail['status_pembayaran'] == 'belum lunas' ? 'disabled' : '' ?> id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Lunas
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Belum Lunas" name="status" <?php echo $detail['status_pembayaran'] == 'belum lunas' ? 'checked' : '' ?> <?php echo $detail['status_pembayaran'] == 'lunas' ? 'disabled' : '' ?> id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Belum Lunas
                    </label>
                </div>
            </div>
            <input type="submit" class="btn btn-primary booking-cta" name="edit" value="Simpan">
            <input type="hidden" name="id" value="<?= $detail['id_mobil'] ?>">

    </div>
    </form>
</div>
</div>