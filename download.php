<?php

if(isset($_GET['key']) && $_GET['key'] == "admin"){
    header('Content-Disposition: attachment; filename="photo.jpeg"');
    header('Content-Type: image/jpeg');
    readfile(__DIR__ . '/files/naufal_3x4.jpg');
    exit();
}else{
    echo "invalid key";
}
