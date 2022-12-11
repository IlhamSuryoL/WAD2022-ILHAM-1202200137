<!DOCTYPE html>
<html lang="en">

@include('partials.head')
<body>
    @include('partials.navbar')
        <?php 
$image = $detailmobil[0]['image'];
?>


<div class="container mt-3">
    <h4 class="display-4"><b>
        </b> </h4>
    <p class="lead">
        </p>
</div>
<div class="gridedit">
    <div class="bl">
        <img src="{{"/asset/$image"}}" alt="car" class="booking-img">
    </div>
    <div class="br">
        <form action="index.php?page=detail&id=1" method="post">
            <div class="mb-3">
                <label for="Name1" class="form-label">Nama Mobil</label>
                <input type="text" placeholder="BMW I4" name="Name" value="{{$detailmobil[0]['name']}}
                " class="form-control" id="Name1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="Name2" class="form-label">Nama Pemilik</label>
                <input type="text" placeholder="Ilham - 1202200137" name="Name" value="{{$detailmobil[0]['owner']}}" class="form-control" id="Name2">
            </div>
            <div class="mb-3">
                <label for="Merk" class="form-label">Merk</label>
                <input type="text" placeholder="BMW" name="Merk" value="{{$detailmobil[0]['brand']}}" class="form-control" id="Merk1">
            </div>
            <div class="mb-3">
                <label for="Date1" class="form-label">Tanggal Beli</label>
                <input type="date" value="{{$detailmobil[0]['purchase_date']}}" name="Date" class="form-control" id="Date1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea class="form-control" value="" id="exampleFormControlTextarea1" rows="3">{{$detailmobil[0]['description']}}</textarea>
            </div>
            <div class="mb-3">
                <label for="Foto1" class="form-label">Foto</label>
                <input type="file" name="foto" value="{{$detailmobil[0]['image']}}" class="form-control" id="foto1">
            </div>
            <div class="mb-3">
                <label>Status Pembayaran</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="lunas" name="pembayaran"  id="flexRadioDefault1" {{ $detailmobil[0]['status'] == 'Lunas' ? 'checked' : '' }} {{ $detailmobil[0]['status'] == 'Belum-Lunas' ? 'disabled' : '' }} >
                    <label class="form-check-label" for="flexRadioDefault1">
                        Lunas
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="" name="belum lunas"  id="flexRadioDefault2" {{ $detailmobil[0]['status'] == 'Belum-Lunas' ? 'checked' : '' }} {{ $detailmobil[0]['status'] == 'Lunas' ? 'disabled' : '' }} >
                    <label class="form-check-label" for="flexRadioDefault2">
                        Belum Lunas
                    </label>
                </div>
            </div>
            <div class="bg-light btn-container"><a href="/edit/{{$detailmobil[0]['id']}}" class="btn btn-primary booking-cta">Edit</a>
                <!-- <button type="submit" class="btn btn-primary booking-cta">Edit</button> -->
            </div>
        </form>
    </div>
</div>
</body>
</html>