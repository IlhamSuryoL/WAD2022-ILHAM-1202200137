<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


<div class="container mt-2">
    <div class="judul">
    <h5 class="text-center" style="margin-top: 5px;">Thank You ILHAM SURYO LAKSONO_1202200137 for Reserving</h5>
    </div>
</div>

<div class="container mt-3">
    <div class="judul">
    <p class="text-center" style="margin-top: 5px;">Please double check your reservation details </p>
    </div>
</div>
<?php
    $checkin = isset($_POST['Date']) ? $_POST['Date'] : '';
    $duration = isset($_POST['Duration']) ? (int)$_POST['Duration'] : 0;
    $checkout = date("Y-m-d", strtotime("+$duration days", strtotime($checkin)));
    $time = isset($_POST['time']) ? $_POST['time'] : '';
    $type_mobil = isset($_POST['type_mobil']) ? $_POST['type_mobil'] : '';
    $phones = isset($_POST['phones']) ? $_POST['phones'] : '';
    $health = isset($_POST['health']) ? $_POST['health'] :  NULL;
    $driver= isset($_POST['driver']) ? $_POST['driver'] :  NULL;
    $filled= isset($_POST['filled']) ? $_POST['filled'] :  NULL;
    $services_price = array();
    $services = array();
    $total_price = 0;
?>

<?php
if (isset($_POST["health"])) {
    array_push($services, $_POST['health']);
    array_push($services_price, 25000);
  }
  if (isset($_POST["driver"])) {
    array_push($services, $_POST["driver"]);
    array_push($services_price, 100000);
  }
  if (isset($_POST["filled"])) {
    array_push($services, $_POST["filled"]);
    array_push($services_price, 250000);
}

switch ($type_mobil) {
    case 'Pajero Sport':
        $total_price = $duration * 1500000;
        break;
    case 'Innova Venturer':
        $total_price = $duration * 1000000;
        break;
    case 'Fortuner':
        $total_price = $duration * 1550000;
        break;
};

foreach($services_price as $price){
    $total_price += $price;
}
?>

<table class="table">
    <thead>
        <tr>
            <th>Booking Number</th>
            <th>Name</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Car Type</th>
            <th>Phone Number</th>
            <th>Service</th>
            <th>Total Price</th>
        </tr>
    </thead>
    <body>
        <tr>
            <td>   
                <?php
                echo rand();

                ?>
            </td>
            <td> <?php
                echo $_POST['Name']
                ?>
            </td>
            <td>
                <?php
                echo  $checkin; ?>
                <?php echo $time; ?>
            </td>
            <td>
                <?php
                echo $checkout
                ?>
                <?php echo $time ?>
            </td>
            <td>
                <?php
                echo $type_mobil
                ?>
            </td>
            <td>
                <?php
                echo $phones
                ?>
            </td>
            <td>
            <?php 
                            if (empty($services)) {
                                echo "<p>No Service</p>";
                            } else { ?>
                                <ul>
                                    <?php foreach($services as $service) { ?>
                                        <li><?= $service ?></li>
                                    <?php } ?>
                                </ul>
                        <?php }?>

            </td>
            <td>
                <?= "Rp", number_format($total_price, 0,",",",");
                ?>
            </td>
        </tr>    
    </body>
</table>