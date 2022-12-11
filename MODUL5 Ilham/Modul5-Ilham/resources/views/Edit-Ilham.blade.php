<!DOCTYPE html>
<html lang="en">

@include('partials.head')
<body>
    @include('partials.navbar')
    <?php 
    $image = $editmobil[0]['image'];
    ?>

<div class="container mt-3">
    <h4 class="display-4"><b>Edit</b> </h4>
    <p class="lead">Edit Mobil BMW i4</p>
</div>
<div class="gridedit">
    <div class="bl">
        <img src="{{"/asset/$image"}}" alt="car" class="booking-img">
    </div>
    <div class="br">
        <form action="config/edit.php" enctype="multipart/form-data" method="post">
            <div class="mb-3">
                <label for="Name1" class="form-label">Nama Mobil</label>
                <input type="text" placeholder="BMW I4" name="mobil" value="{{$editmobil[0]['name']}}" class="form-control" id="Name1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="Name2" class="form-label">Nama Pemilik</label>
                <input type="text" placeholder="Ilham - 1202200137" name="pemilik" value="{{$editmobil[0]['owner']}}" class="form-control" id="Name2">
            </div>
            <div class="mb-3">
                <label for="Merk" class="form-label">Merk</label>
                <input type="text" placeholder="BMW" name="merk" value="{{$editmobil[0]['brand']}}" class="form-control" id="Merk1">
            </div>
            <div class="mb-3">
                <label for="Date1" class="form-label">Tanggal Beli</label>
                <input type="date" value="{{$editmobil[0]['purchase_date']}}" name="date" class="form-control" id="Date1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3">{{$editmobil[0]['description']}}</textarea>
            </div>
            <div class="mb-3">
                <label for="Foto1" class="form-label">Foto</label>
                <input type="file" name="foto" value="{{$editmobil[0]['image']}}" class="form-control" id="foto1">
            </div>
            <div class="mb-3">
                <label>Status Pembayaran</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Lunas" name="status" id="flexRadioDefault1" {{ $editmobil[0]['status'] == 'Lunas' ? 'checked' : '' }} {{ $editmobil[0]['status'] == 'Belum-Lunas' ? 'disabled' : '' }} >
                    <label class="form-check-label" for="flexRadioDefault1">
                        Lunas
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Belum Lunas" name="status" id="flexRadioDefault2" {{ $editmobil[0]['status'] == 'Belum-Lunas' ? 'checked' : '' }} {{ $editmobil[0]['status'] == 'Lunas' ? '' : '' }} >
                    <label class="form-check-label" for="flexRadioDefault2">
                        Belum Lunas
                    </label>
                </div>
            </div>
            <input type="submit" class="btn btn-primary booking-cta" name="edit" value="Simpan">
            <input type="hidden" name="id" value="{{$editmobil[0]['id']}}">

    </div>
    </form>
</div>
</div>
</body>
</html>