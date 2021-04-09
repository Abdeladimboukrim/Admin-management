<?php
$conn = mysqli_connect('localhost', 'root', '', 'admin_management');
 if (mysqli_connect_errno()) {
     
    echo 'erreur de connexion : ' . mysqli_connect_error();
        die();
    };