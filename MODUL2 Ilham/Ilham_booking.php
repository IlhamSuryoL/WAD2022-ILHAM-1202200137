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

<div class="booking">
    <div class="bl">
    <!-- <img src="assets/innova vw.png" class="booking-img" alt=""> -->
    <img src="assets/<?php echo isset($_GET['mobil']) ? $_GET['mobil'] : "fortuner vrz" ?>.png" alt="car" class="booking-img">
    </div>
    <div class="br">
        <form action="Ilham_index.php?page=mybooking" method="post">
                <div class="mb-3">
                    <label for="Name1" class="form-label">Nama</label>
                    <input type="text" value="ILHAM SURYO LAKSONO_1202200137" name="Name" class="form-control" id="Name1" aria-describedby="emailHelp" readOnly>
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="Date1" class="form-label">Book Date</label>
                    <input type="date" value="" name="Date" class="form-control" id="Date1">
                </div>
                <div class="mb-3">
                    <label for="Time1" class="form-label">Start Time</label>
                    <input type="time" value="" name="Time" class="form-control" id="Time1">
                </div>
                <div class="mb-3">
                    <label for="DaysDur" class="form-label">Duration (Days)</label>
                    <input type="number" value="" name="Duration" class="form-control" id="DaysDur">
                </div>
                <label for="">Car type</label>
                <select class="form-select" aria-label="Default select example" name="type_mobil">
                    <option value="Innova Venturer">Innova Venturer</option>
                    <option value="Pajero Sport">Pajero Sport</option>
                    <option value="Fortuner">Fortuner</option>
                </select>
                <div class="mb-3">
                    <label for="Phone1" class="form-label">Phone Number</label>
                    <input type="text" value="" name="phones" class="form-control" id="Date1">
                </div>
                <div class="mb-3">
                    <label>Add Service(s)</label>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="health protocol" name="health" id="flexRadioDefault1" >
                    <label class="form-check-label" for="flexRadioDefault1">
                       Health protocol / Rp.25.000
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Driver" name="driver" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Driver / Rp.100.000
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Fuel filled" name="filled" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Fuel filled / Rp250.000
                    </label>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-success booking-cta">BOOK</button>
                </div>
        </form>
    </div>
</div>
</body>
</html>