<?php
if(isset($_COOKIE['rememberme'])){
unset($_COOKIE['nama']);
unset($_COOKIE['rememberme']);
unset($_COOKIE['nohp']);
setcookie('nama', '', time()-3600, '/');
setcookie('no_hp', '', time()-3600, '/');
setcookie('rememberme', '', time()-3600, '/');

header('location: index.php');
}
else{
unset($_COOKIE['nama']);
unset($_COOKIE['email']);
unset($_COOKIE['sandi']);
unset($_COOKIE['nohp']);
setcookie('nama', '', time()-3600, '/');
setcookie('email', '', time()-3600, '/');
setcookie('sandi', '', time()-3600, '/');
setcookie('no_hp', '', time()-3600, '/');
    
header('location: index.php');

}

?>