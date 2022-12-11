<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
    @include('partials.navbar')
    <div class="container mt-5">
        <div class="row header">
            <div class="col">
                <h1 class="display-4"><b>Tambah Mobil</b> </h1>
                <p class="lead">Tambah Mobil Baru Anda Ke List Show Room </p>
            </div>
            <div class="additem">
                <div class="bl">
                </div>
                <div class="br">
                    <form action="{{route('my-car.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="Name1" class="form-label">Nama_Mobil</label>
                            <input type="text" placeholder="BMW I4" name="mobil" class="form-control" id="Name1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="Name2" class="form-label">Nama Pemilik</label>
                            <input type="text" placeholder="Ilham - 1202200137" name="pemilik" class="form-control" id="Name2">
                        </div>
                        <div class="mb-3">
                            <label for="Merk" class="form-label">Merk</label>
                            <input type="text" placeholder="BMW" name="merk" class="form-control" id="Merk1">
                        </div>
                        <div class="mb-3">
                            <label for="Date1" class="form-label">Tanggal Beli</label>
                            <input type="date" value="" name="date" class="form-control" id="Date1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Foto1" class="form-label">Foto</label>
                            <input type="file" name="foto" class="form-control" id="foto1">
                        </div>
                        <div class="mb-3">
                            <label>Status Pembayaran</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="lunas" name="status" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Lunas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="belum lunas" name="status" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Belum Lunas
                                </label>
                            </div>
                        </div>
                        <input type="submit" name="Submit" class="btn btn-primary booking-cta" value="Selesai"/>
                </div>
                </form>
            </div>
        </div>

</body>

</html>