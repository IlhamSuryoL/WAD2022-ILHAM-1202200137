<?php


 include 'connectorUser.php';
    $email = $_POST['emailku'];
    $nama = $_POST['namaku'];
    $sandi = $_POST['sandiku'];
    $nohp = $_POST['nohpku'];
    $sandiconfirm = $_POST['sandiconfirm'];
    $navbarwarna = $_POST['colour'];

    if(!empty($update_sandi) && !empty ($confirm_sandi)) {
        if ($update_sandi == $confirm_sandi) {
            $query = "UPDATE users_ilham SET nama = '$nama', email = '$email', password = '$sandi', no_hp = '$nohp' WHERE email = '$email'";
            $hasil = mysqli_query($koneksi, $query);

            if ($query) {
                setcookie('nama', $nama, time() + 87400*30, '/');
                setcookie('email', $email, time() + 87400*30, '/');
                setcookie('password', $sandi, time() + 87400*30, '/');
                setcookie('no_hp', $nohp, time() + 87400*30, '/');
                setcookie('colour', $navbarwarna, time() +  87400*30, '/' );

                header('Location: ../index.php');
            }else {
                echo 'Gagal';
            }
        } else {
            echo 'Password tidak sama';
        }
    } else {
        $query = "UPDATE users_ilham SET nama = '$nama', email = '$email', no_hp = '$nohp' WHERE email = '$email'";
        $hasil = mysqli_query($koneksi, $query);

        if ($query) {
            setcookie('nama', $nama, time() + 87400*30, '/');
            setcookie('email', $email, time() + 87400*30, '/');
            setcookie('no_hp', $nohp, time() + 87400*30, '/');
            setcookie('colour', $navbarwarna, time() +  87400*30, '/' );


            header('Location: ../index.php');
        }else {
            echo 'Gagal';
        }
    }
